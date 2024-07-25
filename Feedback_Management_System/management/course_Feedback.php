<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['FeedbackID'])) {
    foreach ($_POST['FeedbackID'] as $key => $FeedbackID) {
        $original_FeedbackID = $_POST['original_FeedbackID'][$key];
        $FeedbackID = $_POST['FeedbackID'][$key];

        $sql = "UPDATE course_feedback SET FeedbackID = '$FeedbackID' WHERE FeedbackID = '$original_FeedbackID'";
        if ($con->query($sql) === TRUE) {

            $sql1 = "UPDATE coursefeedback SET FeedbackID = '$FeedbackID' WHERE FeedbackID = '$original_FeedbackID'";;
    
            if ($con->query($sql1) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error: " . $sql1 . "<br>" . $con->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    $con->close();
    header("Location: course_Feedback.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Feedback for management</title>
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
            <h2>Course Feedback</h2>
            <form method="post" action="course_Feedback.php">
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
                        <label></label>
                        <button class="btn btn-primary btn-block">Filter</button>
                    </div>
                </div>
            </div>
        </form>
        </div>

        <div class="content">
        <div class="container">
            <h1>Course Feedback for management</h1>
            <form method="post" action="course_Feedback.php">
            <table class="table table-bordered">
                <?php
                    include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['FeedbackID'])) {
                    $academic_year = $_POST['academic_year']; 
                    $semester = $_POST['semester'];
                    $CourseCcode = $_POST['CourseCcode'];
                    $CourceName = $_POST['CourceName'];

                    $sql = "SELECT * FROM course_feedback WHERE academic_year = '$academic_year' AND semester = '$semester' AND CourseCcode = '$CourseCcode' AND CourceName = '$CourceName'";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {

                    echo "<thead>
                            <tr>
                            <th>Feedback ID</th>
                            <th>Course code</th>
                            <th>Cource Name</th>
                            <th>A Question 1</th>
                            <th>A Question 2</th>
                            <th>A Question 3</th>
                            <th>B Question 1</th>
                            <th>B Question 2</th>
                            <th>B Question 3</th>
                            <th>C Question 1</th>
                            <th>C Question 2</th>
                            <th>D Question 1</th>
                            <th>D Question 2</th>
                            <th>D Question 3</th>
                            <th>E Question 1</th>
                            <th>E Question 2</th>
                            <th>E Question 3</th>
                            <th>E Question 4</th>
                            <th>comments</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                 <td>
                                    <input type='hidden' name='original_FeedbackID[]' value='" . $row["FeedbackID"] . "'>
                                    <input type='text' class='form-control' name='FeedbackID[]' value='" . $row["FeedbackID"] . "' readonly>
                                </td>
                                <td>" . $row["CourseCcode"] . "</td>
                                <td>" . $row["CourceName"] . "</td>
                                <td>" . $row["general_1"] . "</td>
                                <td>" . $row["general_2"] . "</td>
                                <td>" . $row["general_3"] . "</td>
                                <td>" . $row["materials_1"] . "</td>
                                <td>" . $row["materials_2"] . "</td>
                                <td>" . $row["materials_3"] . "</td>
                                <td>" . $row["tutorials_1"] . "</td>
                                <td>" . $row["tutorials_2"] . "</td>
                                <td>" . $row["lab_1"] . "</td>
                                <td>" . $row["lab_2"] . "</td>
                                <td>" . $row["lab_3"] . "</td>
                                <td>" . $row["myself_1"] . "</td>
                                <td>" . $row["myself_2"] . "</td>
                                <td>" . $row["myself_3"] . "</td>
                                <td>" . $row["myself_4"] . "</td>
                                <td>" . $row["comments"] . "</td>
                                <td>
                                    <button type='button' class='btn btn-primary edit-btn'>Edit</button>
                                    <button type='submit' class='btn btn-success save-btn' style='display: none;'>Save</button>
                                </td>
                            </tr>";
                    }
                    echo "</tbody>";
                    } else {
                    echo "<tr><td colspan='20'>No data found</td></tr>";
                    }

                    $con->close();
                    }
                    ?>
                </tbody>
                </table>
            </form>
            </div>
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
