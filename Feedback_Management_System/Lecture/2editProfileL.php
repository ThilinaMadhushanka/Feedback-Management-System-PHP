<?php
session_start();
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["UserName"];
    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $Course = $_POST["Course"];
    $CCode = $_POST["CCode"];
    $sql = "UPDATE lecture SET FName='$FName', LName='$LName', Course='$Course', CCode='$CCode' WHERE UserName='$UserName'";
    if ($con->query($sql) === TRUE) {
            echo "Record updated successfully";
 
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
}
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["UserName"];
    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $Course = $_POST["Course"];
    $CCode = $_POST["CCode"];

    $sql_check = "SELECT * FROM course_lecture WHERE LectureUserName='$UserName' AND CourseCCode='$CCode'";
    $result = $con->query($sql_check);
    
    if ($result->num_rows > 0) {
        echo "Record already exists in course_lecture table<br>";
    } else {
        $sql_insert = "INSERT INTO course_lecture (LectureUserName, CourseCCode) VALUES ('$UserName', '$CCode')";
        if ($con->query($sql_insert) === TRUE) {
            echo "Record inserted successfully in course_lecture table";
        } else {
            echo "Error: " . $sql_insert . "<br>" . $con->error;
        }
    }
    
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lecture Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/0editProfile.css">
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
            <span class="navbar-brand mb-0 h1"> <b>Lecture in Faculty Of Engineering</b></span>
            <div class="d-flex">
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search">
                <span class="navbar-text me-3">Welcome</span>
            </div>
        </div>
    </nav>
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
                    <li><a href="viewDetailsL.php">View Profile</a></li>
                    <li><a href="2editProfileL.php">Edit Profile</a></li>
                    <li><a href="2resetpasswordl.php">Password Reset</a></li>
                    <li><a href="2loginl.php">Logout</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bx bx-message-detail"></i> Feedback
                </a>
                <ul class="submenu">
                    <li><a href="showCourse.php">Show Student Feedback</a></li>                   
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="2about.php">
                    <i class="bx bx-file"></i> About
                </a>
            </li>
        </ul>
    </div>
<div class="container">
<form id="2lectureHome.php" method="post">
    <h1 style="color: aliceblue;"><i>Edit My Profile Details</i></h1>
    <div>
                <label for="UserName"><b>Profile User Name</b><br></label>
                <input type="text" id="UserName" name="UserName" placeholder="UserName" required>
            </div>
            <br>
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
        </div>
        <div>
            <lable for="Course"><b>Course</b><br></lable>
            <input type="text" id="Course" name="Course">
        </div><br>

        <div>
            <lable for="CCode"><b>Course Code</b><br></lable>
            <input type="text" id="CCode" name="CCode">
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
