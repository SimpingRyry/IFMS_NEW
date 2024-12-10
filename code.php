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
        $query = "INSERT INTO student_list (student_number, student_name, `course/year/section`, `status`, `image`) 
        VALUES ('$student_num', '$student_name', '$student_course', '$student_status', '$student_image')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            redirect('profile_page.php', 'User Added Successfully');
        } else {
            redirect('profile_page.php', 'Something went wrong');
        }
    } else {
        redirect('profile_page.php', 'Please fill all the input fields.');
    }
}

?>
