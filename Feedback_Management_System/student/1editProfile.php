<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["UserName"];
    $FName = $_POST["FName"];
    $LName = $_POST["LName"];
    $RegNo = $_POST["RegNo"];
    $AcadamicYear = $_POST["AcadamicYear"];
    $dob = $_POST["dob"];
    $Address = $_POST["Address"];
    $sql = "UPDATE student SET FName='$FName', LName='$LName', RegNo='$RegNo', AcadamicYear='$AcadamicYear', dob='$dob' WHERE UserName='$UserName'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully"; 

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName = $_POST["UserNameA"];
    $Address = $_POST["SAddress"];

        $sql1 = "UPDATE student_address SET SAddress='$Address' WHERE UserNameA='$UserName'";

        if ($con->query($sql1) === TRUE) {
            header("Location: 1studentFeedback.php"); 
            exit();
        } else {
            echo "Error: " . $sql1 . "<br>" . $con->error;
        }
}

$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Profile</title>
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
            <span class="navbar-brand mb-0 h1"> <b>Student in Faculty Of Engineering</b></span>
            <div class="d-flex">
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search">
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
                    <li><a href="viewDetailsS.php">View Profile</a></li>
                    <li><a href="1editProfile.php">Edit Profile</a></li>
                    <li><a href="1resetpassword.php">Password Reset</a></li>
                    <li><a href="1logins.php">Logout</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bx bx-message-detail"></i> Feedback
                </a>
                <ul class="submenu">
                    <li><a href="courseFeedback.php">Course Feedback</a></li>
                    <li><a href="lectureFeedback.php">Lecture Feedback</a></li>                    
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="course.php">
                    <i class="bx bx-file"></i> course
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="1about.php">
                    <i class="bx bx-file"></i> About
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Edit Form -->
    <div class="container">
        <form method="post">
            <div>
                <label for="UserName"><b>Profile User Name</b><br><br></label>
                <input type="text" id="UserName" name="UserName" placeholder="UserName" required>
            </div>
            <br>
            <div>
                <label for="FName"><b>Profile First Name</b><br><br></label>
                <input type="text" id="FName" name="FName" placeholder="FName" required>
            </div>
            <br>
            <div>
                <label for="LName"><b>Profile Last Name</b><br><br></label>
                <input type="text" id="LName" name="LName" placeholder="LName" required>
            </div><br>
            <div>
                <label for="RegNo"><b>RegNo</b><br><br></label>
                <input type="text" id="RegNo" name="RegNo" placeholder="RegNo" required>
            </div><br>
            
            <div>
                <label for="AcadamicYear"><b>Academic Year</b><br><br></label>
                <select id="AcadamicYear" name="AcadamicYear">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <br>
            <div>
                <label for="dob"><b>Date Of Birth</b><br><br></label>
                <input type="date" id="dob" name="dob">
            </div><br>
            <div>
                <label for="Address"><b>Address</b><br><br></label>
                <input type="text" id="Address" name="Address" placeholder="Address" required>
            </div><br><br>
            
            <button type="submit" class="button" name="submit">Submit</button>
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
