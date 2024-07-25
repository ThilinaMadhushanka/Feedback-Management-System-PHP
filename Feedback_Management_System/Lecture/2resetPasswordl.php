<?php
session_start();
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["UserName"];
    $newPassword = $_POST["newPassword"]; 
    $confirmPassword = $_POST["confirmPassword"]; 

    $sql = "UPDATE lecture SET Password = '$newPassword' WHERE UserName = '$UserName'"; 

    if ($con->query($sql) === TRUE) {
        echo "Password reset successful";
    } else {
        echo "Error updating password: " . $con->error;
    }
}

$con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Lecture Pasword</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/0resetPassword.css">
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
            <span class="navbar-brand mb-0 h1"> <b>Password Reset</b></span>
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
<!-- password edit -->
<div class="container">
    <form id="resetPasswordForm" method="post" action="2resetpasswordl.php">
    <div>
            <lable for="UserName"><b> Profile User Name </b><br></lable>
            <input type="text" id="UserName" name="UserName" placeholder="UserName" required>
        </div>
        <div>
            <label for="currentPassword"><b>Current Password</b><br></label>
            <input type="password" id="currentPassword" name="currentPassword" placeholder="Current Password" required>
        </div>

        <div>
            <label for="newPassword"><b>New Password</b><br></label>
            <input type="password" id="newPassword" name="newPassword" placeholder="New Password" required>
        </div>

        <div>
            <label for="confirmPassword"><b>Confirm Password</b><br></label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
        </div>
        
        <button type="submit" class="button" name="resetPasswordSubmit">Reset Password</button>
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
