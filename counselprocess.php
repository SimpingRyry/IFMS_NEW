<?php
// Include the database connection script
require './php_functions/dbconn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode($_POST['data'], true);

    $student_number = $data['student_number'];
    $approach = $data['approach'];

    $background_case = $data['background_case'];
    $counseling_plan = $data['counseling_plan'];
    $comments = $data['comments'];
    $recommendations = $data['recommendations'];
    $date = $data['date'];
    $time = $data['time'];
    $date_time = $date . ' ' . $time; // Combine date and time into `YYYY-MM-DD HH:MM:SS`

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "INSERT INTO indiv_counselling (StudentID, Case_Background, counsel_goals, counsel_comment, counsel_reco, counsel_Time, counsel_Date, Counsel_approach) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Check if preparation failed
    if ($stmt === false) {
        die('MySQL prepare error: ' . mysqli_error($conn));
    }

    // Bind the parameters
    if (!mysqli_stmt_bind_param($stmt, "ssssssss", $student_number, $background_case, $counseling_plan, $comments, $recommendations, $time, $date, $approach)) {
        die('MySQL bind_param error: ' . mysqli_stmt_error($stmt));
    }

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the desired page after successful insertion
        // header('Location: individual_counseling.php');
        // exit(); // Make sure no further script execution happens after redirection
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
