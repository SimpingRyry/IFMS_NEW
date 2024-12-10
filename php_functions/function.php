<?php

require 'dbconn.php';

function validate($inputData)
{

    global $conn;

    return mysqli_real_escape_string($conn, $inputData);
}

function redirect($url, $status)
{
    $_SESSION['status'] = $status;
    header('Location: ' . $url);
    exit(0);
}

function alertMessage()
{
    if (isset($_SESSION['status'])) {
        echo '<script>
            alert("' . $_SESSION['status'] . '");
        </script>';
        unset($_SESSION['status']);
    }
}

function fetchStudents()
{
    global $conn; // Use the global database connection
    $query = "SELECT student_number, student_name, `course/year/section`, status FROM student_list";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td><input type='checkbox' class='studentCheckbox' value='" . htmlspecialchars($row['student_number']) . "'></td>
                    <td>" . htmlspecialchars($row['student_number']) . "</td>
                    <td>" . htmlspecialchars($row['student_name']) . "</td>
                    <td>" . htmlspecialchars($row['course/year/section']) . "</td>
                    <td>" . htmlspecialchars($row['status']) . "</td>
                    <td><button class='btn btn-primary'>View</button></td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No data available</td></tr>";
    }
}

function add_student($student_number, $student_name, $course_year_section, $status, $image)
{
    global $conn;

    // Handle image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the image is a valid file
    if (in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            // Image uploaded successfully
        } else {
            return false; // Error uploading image
        }
    } else {
        return false; // Invalid file type
    }

    // Insert student into the database
    $query = "INSERT INTO student_list (student_number, student_name, `course/year/section`, status, image) 
              VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssss', $student_number, $student_name, $course_year_section, $status, $target_file);

    if (mysqli_stmt_execute($stmt)) {
        return true; // Successfully added
    } else {
        return false; // Error inserting
    }
}

function delete_row($student_numbers)
{
    global $conn;

    if (empty($student_numbers)) {
        return false; // No student numbers to delete
    }

    $placeholders = implode(',', array_fill(0, count($student_numbers), '?'));
    $query = "DELETE FROM student_list WHERE student_number IN ($placeholders)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, str_repeat('s', count($student_numbers)), ...$student_numbers);
        if (mysqli_stmt_execute($stmt)) {
            return true; // Successfully deleted
        } else {
            return false; // Error executing deletion
        }
    } else {
        return false; // Error preparing statement
    }
}



// Handle AJAX delete request
if (isset($_POST['delete_students'])) {
    // Get the student numbers to delete
    $student_numbers = json_decode($_POST['student_numbers'], true);

    if (delete_row($student_numbers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}

?>
