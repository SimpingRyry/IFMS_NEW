<?php
require './php_functions/function.php';

if (isset($_POST['saveUser'])) {
    $student_num = validate($_POST['student_number']);
    $student_name = validate($_POST['student_name']);
    $student_course = validate($_POST['course_year_section']);
    $student_status = validate($_POST['status']);
    $student_image = validate($_POST['image']);
    // DITO BASTA MGA LALAMAN SA STUDENT DETAILS

    if ($student_num != '' || $student_name != '' || $student_course != '' || $student_status != '') {


        if ($_FILES['image']['error'] === 4) {
            echo "<script>alert('Please upload an image.');</script>";
        } else {
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $tmpName = $_FILES['image']['tmp_name'];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if (!in_array($imageExtension, $validImageExtension)) {
                echo "<script>alert('Invalid image extension. Only JPG, JPEG, and PNG are allowed.');</script>";
            } else if ($fileSize > 1000000) { // Limit: 1MB
                echo "<script>alert('Image size too large. Please upload an image less than 1MB.');</script>";
            } else {
                $newImageName = uniqid() . '.' . $imageExtension;
                move_uploaded_file($tmpName, 'uploads/'. $newImageName);

                // Insert into database
                $query = "INSERT INTO student_list (student_number, student_name, `course_year_section`, `status`, `image`) 
                          VALUES ('$student_num', '$student_name', '$student_course', '$student_status', '$newImageName')";

                $result = mysqli_query($conn, $query);

                if ($result) {
                    redirect('profile_page.php', 'User Added Successfully');
                } else {
                    redirect('profile_page.php', 'Something went wrong.');
                }
            }
        }
    } else {
        redirect('profile_page.php', 'Please fill all the input fields.');
    }
}

?>
