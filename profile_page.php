<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Home_Page_IFMS SICM</title>

    <link rel="stylesheet" href="profile_page.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
</head>

<body>
    <!------------------------------------------------------ NAVBAARR -------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #B3293C;">
        <div class="container-fluid">
            <!------------------------------------------------------ OFF_CANVAS -------------------------------------------------------->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
            </button>

            <a class="navbar-brand fw-bold me-auto" href="#" style="color: white;">
                <img src="images/cn_solo_logo.png" alt="" width="45" height="35">
                <img src="images/ifms_txt.png" alt="" width="120" height="40" style="margin-left: 5px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-gear-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!------------------------------------------------------ OFF_CANVAS -------------------------------------------------------->
    <!------------------------------------------------------ OFF_CANVAS -------------------------------------------------------->

    <div class="offcanvas offcanvas-start sidebar-nav text-white" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
        style="background:#990D35;">

        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav navbar_slide">
                    <li>
                        <a href="home_page.php" class="nav-link px-3 active">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trello" viewBox="0 0 16 16">
                                    <path d="M14.1 0H1.903C.852 0 .002.85 0 1.9v12.19A1.9 1.9 0 0 0 1.902 16h12.199A1.9 1.9 0 0 0 16 14.09V1.9A1.9 1.9 0 0 0 14.1 0M7 11.367a.636.636 0 0 1-.64.633H3.593a.633.633 0 0 1-.63-.633V3.583c0-.348.281-.631.63-.633h2.765c.35.002.632.284.633.633zm6.052-3.5a.633.633 0 0 1-.64.633h-2.78A.636.636 0 0 1 9 7.867V3.583a.636.636 0 0 1 .633-.633h2.778c.35.002.631.285.631.633z" />
                                </svg>
                            </span>
                            <span style="font-family: 'Poppins', sans-serif;">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="profile_page.php" class="nav-link px-3 active profile-link">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                                    <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </span>
                            <span style="font-family: 'Poppins', sans-serif;">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                </svg>
                            </span>
                            <span style="font-family: 'Poppins', sans-serif;">Counseling</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </span>
                            <span style="font-family: 'Poppins', sans-serif;">Visiting Logs</span>
                        </a>
                    </li>
                    <li>
                        <a href="report_page.php" class="nav-link px-3 active">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1" />
                                </svg>
                            </span>
                            <span style="font-family: 'Poppins', sans-serif;">Reports</span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider" style="border-top: 1px solid white;" />
                    </li>

                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                </svg>
                            </span>
                            <span style="font-family: 'Poppins', sans-serif;">Forms</span>
                            <span class="right-icon ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                </svg></span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="#" class="nav-link px-3">
                                            <span class="me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0" />
                                                </svg>
                                            </span>
                                            <span style="font-family: 'Poppins', sans-serif;">Add Form</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-3">
                                            <span class="me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
                                                    <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1M3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z" />
                                                </svg>
                                            </span>
                                            <span style="font-family: 'Poppins', sans-serif;">Manage Form</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <!------------------------------------------------------ MAIN_BOX -------------------------------------------------------->
    <!------------------------------------------------------ MAIN_BOX -------------------------------------------------------->
    <main>
        <div class="container mt-5 pt-5 shadow">
            <div class="container shadow p-0" id="main_box" style="border: 2px solid black;">
                <!-- Header Section -->
                <div class="dashboard-header d-flex justify-content-between align-items-center" style="background-color: #990D35; padding: 10px; border-bottom: 2px solid #B3293C;">
                    <h2 class="fw-bold" style="color: white;">Students</h2>
                    <div>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add</button>
                        <button class="btn btn-danger btn-sm" id="deleteButton">Delete</button>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="table-wrapper p-4">
                    <table id="myTable" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="selectAll" onclick="selectAllCheckboxes()"></th>
                                <th>Student Number</th>
                                <th>Student Name</th>
                                <th>Course/Year/Section</th>
                                <th>Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require './php_functions/function.php';
                            fetchStudents(); // Call the function to populate the table
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Student Modal -->
        <div class="modal" id="addStudentModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Student</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">

                        <?= alertMessage(); ?>

                        <form id="addStudentForm" action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="student_number">Student Number:</label>
                                <input type="text" class="form-control" id="student_number" name="student_number" required>
                            </div>
                            <div class="form-group">
                                <label for="student_name">Student Name:</label>
                                <input type="text" class="form-control" id="student_name" name="student_name" required>
                            </div>
                            <div class="form-group">
                                <label for="course_year_section">Course/Year/Section:</label>
                                <input type="text" class="form-control" id="course_year_section" name="course_year_section" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <input type="text" class="form-control" id="status" name="status" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="saveUser">Add Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Include Chart.js Library -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        <!-- PARA SA DATATABLE -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();

                // Function to select or unselect all checkboxes
                function selectAllCheckboxes() {
                    var checkboxes = document.querySelectorAll('.studentCheckbox');
                    var isChecked = document.getElementById('selectAll').checked;
                    checkboxes.forEach(function(checkbox) {
                        checkbox.checked = isChecked;
                    });
                }

                // Form validation for empty input fields
                $('#addStudentForm').submit(function(e) {
                    let isValid = true;

                    // Check if any input field is empty
                    $('#addStudentForm input').each(function() {
                        if ($(this).val() === '') {
                            isValid = false;
                        }
                    });

                    // If form is invalid, show a popup and prevent form submission
                    if (!isValid) {
                        e.preventDefault(); // Prevent form submission
                        alert("Please fill all the input fields.");
                    }
                });

                // Function to collect selected student numbers and delete them
                document.getElementById('deleteButton').addEventListener('click', function() {
                    var selectedStudents = [];
                    var checkboxes = document.querySelectorAll('.studentCheckbox:checked');

                    checkboxes.forEach(function(checkbox) {
                        selectedStudents.push(checkbox.value); // Push student_number
                    });

                    if (selectedStudents.length === 0) {
                        alert("No student selected.");
                        return;
                    }

                    // Ask for confirmation before deletion
                    if (confirm("Are you sure you want to delete the selected students?")) {
                        // Send selected students to the server via AJAX
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "php_functions/function.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                if (response.success) {
                                    alert("Students deleted successfully.");
                                    location.reload(); // Reload the page to reflect changes
                                } else {
                                    alert("Failed to delete students.");
                                }
                            }
                        };

                        // Send student numbers to delete
                        xhr.send("delete_students=true&student_numbers=" + JSON.stringify(selectedStudents));
                    }
                });
            });
        </script>

        <!-- Link to External JS Script -->
        <script src="script.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>

</html>