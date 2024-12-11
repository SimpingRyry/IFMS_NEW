<?php
// Include database connection file
require_once './php_functions/dbconn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_number = $_POST['student_number'];

    // Fetch student data from the database
    $sql = "SELECT student_number,student_name, course_year_section FROM student_list WHERE student_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $student_number); // 's' indicates string type
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch data as an associative array
        $student_data = $result->fetch_assoc();
    } else {
        $error_message = "No student found with this number.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Counseling_Page_IFMS SICM</title>

  <link rel="stylesheet" href="counseling_page.css">
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
                        <a href="home_page.php" class="nav-link px-3 active dashboard-link">
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
                        <a href="individual_counseling.php" class="nav-link px-3 active">
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
        <div class="main_container">
            <header>INDIVIDUAL COUNSELING</header>
            <div class="buttons">
                <button class="add">
                    <span class="me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    </span>
                    <span style="font-family: 'Poppins', sans-serif;">ADD</span>
                </button>
                <button class="import">
                    <span class="me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    </span>
                    <span style="font-family: 'Poppins', sans-serif;">IMPORT</span>
                </button>
            </div>

            <div class="counseling-card">
            <div class="profile-section">
    <?php if (isset($student_data)): ?>
        <div id="uniqueText1" style="bottom: 10px; right: 100px; font-size: 30px; color: white;">
            <?= htmlspecialchars($student_data['student_name']); ?>
        </div>
        <div id="uniqueText2" style="bottom: 5px; right: 100px; font-size: 17px; color: white;">
            <?= htmlspecialchars($student_data['student_number']); ?>
        </div>
        <div id="uniqueText3" style="bottom: 5px; right: 100px; font-size: 17px; color: white;">
            <?= htmlspecialchars($student_data['course_year_section']); ?>
        </div>
      
    <?php elseif (isset($error_message)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error_message); ?></div>
    <?php endif; ?>
</div>
            <div class="recent-counseling-section">
                <header>Recent Counseling</header>
                <div class="buttons">
                    <button class="prof_dets">
                        <span class="me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                        </svg>
                        </span>
                        <span style="font-family: 'Poppins', sans-serif;">More Profile details</span>
                    </button>
                    <button class="counseling_history">
                        <span class="me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                        </svg>
                        </span>
                        <span style="font-family: 'Poppins', sans-serif;">Counseling History</span>
                    </button>
                </div>
            </div>
            </div>

            <div class="editor_container">
                <header>I. Background of the Case:</header>
                <div class="btn-toolbar">
                    <select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
                        <option value="" selected="" hidden="" disabled="">Select font size</option>
                        <option value="1">Extra small</option>
                        <option value="2">Small</option>
                        <option value="3">Regular</option>
                        <option value="4">Medium</option>
                        <option value="5">Large</option>
                        <option value="6">Extra Large</option>
                        <option value="7">Big</option>
                    </select>
                    <button onclick="toggleHighlight(this, 'bold')"><i class='bx bx-bold'></i></button>
                    <button onclick="toggleHighlight(this, 'italic')"><i class='bx bx-italic'></i></button>
                    <button onclick="toggleHighlight(this, 'underline')"><i class='bx bx-underline'></i></button>
                    <button onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left'></i></button>
                    <button onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle'></i></button>
                    <button onclick="formatDoc('justifyRight')"><i class='bx bx-align-right'></i></button>
                    <button onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify'></i></button>
                    <button onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol'></i></button>
                    <button onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul'></i></button>
                </div>
                <div id="content" contenteditable="true" spellcheck="false" required></div>
            </div>

            <div class="editor_container">
                <header>II. Counseling Plan:</header>
                <div class="counseling-plan">
                    <div class="counselings">
                        <div style="margin-bottom: 50px; right: 10px; font-size: 17px; color: black;">
                        a. Counseling Approach:
                        </div>
                        <div style="bottom: 100px; right: 10px; font-size: 17px; color: black;">
                        b. Counseling Goals:
                        </div>
                    </div>
                    <div class="approach_selection">
                        <select id="enrolment-status" required >
                            <option value="" disabled selected>Click to select an approach</option>
                            <option value="Behavior Therapy">Behavior Therapy</option>
                            <option value="Cognitive Therapy">Cognitive Therapy</option>
                            <option value="Educational Counseling">Educational Counseling</option>
                            <option value="Holistic Therapy">Holistic Therapy</option>
                            <option value="Mental Health Counseling">Mental Health Counseling</option>
                        </select>
                        
                    </div>
                </div>
                <div class="btn-toolbar">
                    <select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
                        <option value="" selected="" hidden="" disabled="">Select font size</option>
                        <option value="1">Extra small</option>
                        <option value="2">Small</option>
                        <option value="3">Regular</option>
                        <option value="4">Medium</option>
                        <option value="5">Large</option>
                        <option value="6">Extra Large</option>
                        <option value="7">Big</option>
                    </select>
                    <button onclick="toggleHighlight(this, 'bold')"><i class='bx bx-bold'></i></button>
                    <button onclick="toggleHighlight(this, 'italic')"><i class='bx bx-italic'></i></button>
                    <button onclick="toggleHighlight(this, 'underline')"><i class='bx bx-underline'></i></button>
                    <button onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left'></i></button>
                    <button onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle'></i></button>
                    <button onclick="formatDoc('justifyRight')"><i class='bx bx-align-right'></i></button>
                    <button onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify'></i></button>
                    <button onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol'></i></button>
                    <button onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul'></i></button>
                </div>
                <div id="content" contenteditable="true" spellcheck="false" required></div>
            </div>

            <div class="editor_container">
                <header>III. Comments:</header>
                <div class="btn-toolbar">
                    <select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
                        <option value="" selected="" hidden="" disabled="">Select font size</option>
                        <option value="1">Extra small</option>
                        <option value="2">Small</option>
                        <option value="3">Regular</option>
                        <option value="4">Medium</option>
                        <option value="5">Large</option>
                        <option value="6">Extra Large</option>
                        <option value="7">Big</option>
                    </select>
                    <button onclick="toggleHighlight(this, 'bold')"><i class='bx bx-bold'></i></button>
                    <button onclick="toggleHighlight(this, 'italic')"><i class='bx bx-italic'></i></button>
                    <button onclick="toggleHighlight(this, 'underline')"><i class='bx bx-underline'></i></button>
                    <button onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left'></i></button>
                    <button onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle'></i></button>
                    <button onclick="formatDoc('justifyRight')"><i class='bx bx-align-right'></i></button>
                    <button onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify'></i></button>
                    <button onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol'></i></button>
                    <button onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul'></i></button>
                </div>
                <div id="content" contenteditable="true" spellcheck="false" required></div>
            </div>

            <div class="editor_container">
                <header>IV. Recommendations:</header>
                <div class="btn-toolbar">
                    <select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
                        <option value="" selected="" hidden="" disabled="">Select font size</option>
                        <option value="1">Extra small</option>
                        <option value="2">Small</option>
                        <option value="3">Regular</option>
                        <option value="4">Medium</option>
                        <option value="5">Large</option>
                        <option value="6">Extra Large</option>
                        <option value="7">Big</option>
                    </select>
                    <button onclick="toggleHighlight(this, 'bold')"><i class='bx bx-bold'></i></button>
                    <button onclick="toggleHighlight(this, 'italic')"><i class='bx bx-italic'></i></button>
                    <button onclick="toggleHighlight(this, 'underline')"><i class='bx bx-underline'></i></button>
                    <button onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left'></i></button>
                    <button onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle'></i></button>
                    <button onclick="formatDoc('justifyRight')"><i class='bx bx-align-right'></i></button>
                    <button onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify'></i></button>
                    <button onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol'></i></button>
                    <button onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul'></i></button>
                </div>
                <div id="content" contenteditable="true" spellcheck="false" required></div>
            </div>
            <div class="modal fade" id="statusSuccessModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"> 
			<div class="modal-dialog modal-dialog-centered modal-sm" role="document"> 
				<div class="modal-content"> 
					<div class="modal-body text-center p-lg-4"> 
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
							<circle class="path circle" fill="none" stroke="#198754" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
							<polyline class="path check" fill="none" stroke="#198754" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " /> 
						</svg> 
						<h4 class="text-success mt-3">Success</h4> 
						<p class="mt-3">Counseling Successfully Recorded.</p>
						<button type="button" class="btn btn-sm mt-3 btn-success" data-bs-dismiss="modal">Ok</button> 
					</div> 
				</div> 
			</div> 
		</div>

     

    </div>
  </div>
</div>

            
            <div class="button-container">
                <button  data-bs-toggle="modal" data-bs-target="#statusSuccessModal" class="save" type="save">Save</button>
            </div>

        
        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <script>
                function formatDoc(cmd, value=null) {
                    if(value) {
                        document.execCommand(cmd, false, value);
                    } else {
                        document.execCommand(cmd);
                    }
                }

                function toggleHighlight(button, cmd) {
                    const isActive = button.classList.toggle('active');
                    if (isActive) {
                        document.execCommand(cmd);
                    } else {
                        document.execCommand(cmd);
                    }
                }

                const content = document.getElementById('content');
                content.addEventListener('mouseenter', function () {
                    const a = content.querySelectorAll('a');
                    a.forEach(item=> {
                        item.addEventListener('mouseenter', function () {
                            content.setAttribute('contenteditable', false);
                            item.target = '_blank';
                        })
                        item.addEventListener('mouseleave', function () {
                            content.setAttribute('contenteditable', true);
                        })
                    })
                })
            </script>
        </div>
      </div>
    </div>
  </main>

  <!-- Include Chart.js Library -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Link to External JS Script -->
  <script src="script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script>
    document.querySelector('.save').addEventListener('click', function () {
        var inputs = [];
        // Select all contenteditable divs
        var elements = document.querySelectorAll('#content');
        elements.forEach(function (element) {
            inputs.push(element.innerText); // Collect text from each contenteditable div
        });

        var data = {
            student_number: document.getElementById("uniqueText2").innerText,
            background_case: inputs[0],
            counseling_plan: inputs[1],
            comments: inputs[2],
            recommendations: inputs[3],
            date: new Date().toISOString().slice(0, 10), // YYYY-MM-DD
            time: new Date().toISOString().slice(11, 19), // HH:MM:SS
            approach: document.getElementById('enrolment-status').value
        };

        // Perform an AJAX request to send data to the server
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'counselprocess.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle response from server
                console.log(xhr.responseText);

                // Show the modal
             

                // Redirect after 3 seconds
                setTimeout(function () {
                    window.location.href = 'individual_counseling.php';
                }, 3000); // 3000ms = 3 seconds
            }
        };
        xhr.send('data=' + JSON.stringify(data));
    });
</script>



</body>

</html>