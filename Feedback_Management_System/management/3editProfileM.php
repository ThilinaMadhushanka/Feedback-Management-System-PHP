<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["UserName"];
    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $sql = "UPDATE  management_assistant SET FName='$FName', LName='$LName' WHERE UserName='$UserName'";

    if ($con->query($sql) === TRUE) {
            echo "Error: " . $sql1 . "<br>" . $con->error;
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/3editProfileM.css">
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


    <!-- edit -->
<div class="container">
<form id="#" method="post">
        <div>
            <lable for="FName"><b> Profile First Name </b><br></lable>
            <input type="text" id="FName" name="FName" placeholder="FName" required>
        </div>

        <div>
            <lable for="LName">
                <b>Profile Last Name</b>
             <br>
            </lable>
            <input type="text" id="LName" name="LName" placeholder="LName" required>
        </div><br>
        
        <button type="submit" class="button" name="submit">submit</button>
    </form>
</div>


    <!-- JavaScript -->
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
        });
    </script>
</body>
</html>
