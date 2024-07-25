<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Feedback_ID'])) {
    foreach ($_POST['Feedback_ID'] as $key => $Feedback_ID) {
        $original_Feedback_ID = $_POST['original_Feedback_ID'][$key];
        $Feedback_ID = $_POST['Feedback_ID'][$key];

        $sql = "UPDATE lecture_feedback SET Feedback_ID = '$Feedback_ID' WHERE Feedback_ID = '$original_Feedback_ID'";
        $con->query($sql);
    }
    $con->close();
    header("Location: lecture_Feedback.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Feedback For Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/course_Feedback.css">
    <style>
        .submenu {
            display: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="btn btn-outline-light me-3" id="sidebarCollapse">
                <i class="bx bx-menu"></i>
            </button>
            <span class="navbar-brand mb-0 h1"> <b>Student Feedback Management System in Faculty Of Engineering</b></span>
            <div class="d-flex">
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search">
                <span class="navbar-text me-3">Welcome</span>
            </div>
        </div>
    </nav>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <button class="btn btn-outline-light mt-3 ms-3" id="sidebarClose">
            <i class="bx bx-x"></i> Close
        </button>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bx bx-user"></i> Profile
                </a>
                <ul class="submenu">
                    <li><a href="viewDetailsM.php">View Profile</a></li>
                    <li><a href="3editProfileM.php">Edit Profile</a></li>
                    <li><a href="3resetpasswordm.php">Password Reset</a></li>
                    <li><a href="3loginm.php">Logout</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bx bx-message-detail"></i> Feedback
                </a>
                <ul class="submenu">
                    <li><a href="course_Feedback.php">Course Feedback</a></li>
                    <li><a href="lecture_Feedback.php">Lecture Feedback</a></li>                    
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bx bx-message-detail"></i> List
                </a>
                <ul class="submenu">
                    <li><a href="courseList.php">Course List</a></li>
                    <li><a href="lectureList.php">Lecture List</a></li>
                    <li><a href="studentList.php">Student List</a></li>                   
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="3question.php">
                    <i class="bx bx-leaf"></i> Questions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Summary.php">
                    <i class="bx bx-sun"></i> Summary
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Notice.php">
                    <i class="bx bx-note"></i> Notice
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="3about.php">
                    <i class="bx bx-file"></i> About
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Main Content -->
    <div class="container">
        <div class="filter-container">
            <h2>Lecture Feedback</h2>
            <form method="post" action="lecture_Feedback.php">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="academic_year">Academic Year:</label>
                            <select type="text" class="form-control" id="academic_year" name="academic_year">
                                <option>2018/19</option>
                                <option>2019/20</option>
                                <option>2020/21</option>
                                <option>2021/22</option>
                                <option>2022/23</option>
                            </select><br><br>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="semester">Semester:</label>
                            <select type="text" class="form-control" id="semester" name="semester">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="CourseCcode">Course Code:</label>
                            <input type="text" class="form-control" id="CourseCcode" name="CourseCcode">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="CourceName">Course Name:</label>
                            <input type="text" class="form-control" id="CourceName" name="CourceName">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="LectureID">Lecture ID:</label>
                            <input type="text" class="form-control" id="LectureID" name="LectureID">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="LectureName">Lecture Name:</label>
                            <input type="text" class="form-control" id="LectureName" name="LectureName">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-primary btn-block">Filter</button>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="container">
                        <h1>Lecture Feedback for Management</h1>
                        <table class="table table-bordered">
                            <?php
                            include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $academic_year = $_POST['academic_year'];
                                $semester = $_POST['semester'];
                                $CourseCcode = $_POST['CourseCcode'];
                                $CourceName = $_POST['CourceName'];
                                $LectureID = $_POST['LectureID'];
                                $LectureName = $_POST['LectureName'];

                                $sql = "SELECT * FROM lecture_feedback WHERE academic_year = '$academic_year' AND semester = '$semester' AND CourseCcode = '$CourseCcode' AND CourceName = '$CourceName' AND LectureID = '$LectureID' AND LectureName = '$LectureName'";
                                $result = $con->query($sql);

                                if ($result->num_rows > 0) {
                                    echo "<thead>
                                        <tr>
                                            <th>Feedback ID</th>
                                            <th>Course Code</th>
                                            <th>Course Name</th>
                                            <th>Lecture ID</th>
                                            <th>Lecture Name</th>
                                            <th>A Question 1</th>
                                            <th>A Question 2</th>
                                            <th>A Question 3</th>
                                            <th>B Question 1</th>
                                            <th>B Question 2</th>
                                            <th>B Question 3</th>
                                            <th>C Question 1</th>
                                            <th>C Question 2</th>
                                            <th>C Question 3</th>
                                            <th>C Question 4</th>
                                            <th>D Question 1</th>
                                            <th>D Question 2</th>
                                            <th>Comments</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                            <td>
                                                <input type='hidden' name='original_Feedback_ID[]' value='" . $row["Feedback_ID"] . "'>
                                                <input type='text' class='form-control' name='Feedback_ID[]' value='" . $row["Feedback_ID"] . "'>
                                            </td>
                                            <td>" . $row["CourseCcode"] . "</td>
                                            <td>" . $row["CourceName"] . "</td>
                                            <td>" . $row["LectureID"] . "</td>
                                            <td>" . $row["LectureName"] . "</td>                        
                                            <td>" . $row["management_1"] . "</td>
                                            <td>" . $row["management_2"] . "</td>
                                            <td>" . $row["management_3"] . "</td>
                                            <td>" . $row["delivery_1"] . "</td>
                                            <td>" . $row["delivery_2"] . "</td>
                                            <td>" . $row["delivery_3"] . "</td>
                                            <td>" . $row["subject_1"] . "</td>
                                            <td>" . $row["subject_2"] . "</td>
                                            <td>" . $row["subject_3"] . "</td>
                                            <td>" . $row["subject_4"] . "</td>
                                            <td>" . $row["myself_1"] . "</td>
                                            <td>" . $row["myself_2"] . "</td>
                                            <td>" . $row["comments"] . "</td>
                                            <td>
                                                <button type='button' class='btn btn-primary edit-btn'>Edit</button>
                                                <button type='submit' class='btn btn-success save-btn' style='display: none;'>Save</button>
                                            </td>
                                        </tr>";
                                    }
                                    echo "</tbody>";
                                } else {
                                    echo "<tr><td colspan='19'>No data found</td></tr>";
                                }

                                $con->close();
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#sidebarCollapse').on('click', function(){
                $('.sidebar').toggleClass('active');
            });
            $('#sidebarClose').on('click', function(){
                $('.sidebar').removeClass('active');
            });
            $('.nav-link').on('click', function(){
                $(this).siblings('.submenu').slideToggle();
            });
            $('.submenu a').on('click', function(e) {
                e.stopPropagation();
                window.location.href = $(this).attr('href');
            });

            $('.edit-btn').on('click', function() {
                $(this).siblings('.save-btn').show();
                $(this).hide();
                $(this).closest('tr').find('input').prop('readonly', false);
            });

            $('.save-btn').on('click', function() {
                $(this).closest('tr').find('input').prop('readonly', true);
                $(this).hide();
                $(this).siblings('.edit-btn').show();
            });
        });
    </script>
</body>
</html>
