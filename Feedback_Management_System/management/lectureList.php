<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';

// Handle updating lecture ID
if (isset($_POST['update_lecture_id'])) {
    $lecture_id = $_POST['lecture_id'];
    $new_lecture_id = $_POST['new_lecture_id'];

    $sql = "UPDATE lecture SET LectureID='$new_lecture_id' WHERE LectureID='$lecture_id'";
    if ($con->query($sql) === TRUE) {
        echo "Lecture ID updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/viewDetailsM.css">
    <style>
        .submenu {
            display: none;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background: #343a40;
            transition: all 0.3s;
        }
        .sidebar.active {
            left: 0;
        }
        .sidebar .nav-link {
            color: #ffffff;
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
    <div class="container mt-5">
        <h2>Lecture List</h2>
        <form id="update_lecture_form" method="POST" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>LectureID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Course</th>
                        <th>Course Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql2 = "SELECT UserName, LectureID, FName, LName, Course, CCode FROM lecture";
                    $result = $con->query($sql2);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr data-id='" . $row["LectureID"] . "'>";
                            echo "<td>" . $row["UserName"] . "</td>";
                            echo "<td class='editable' data-field='LectureID'>" . $row["LectureID"] . "</td>";
                            echo "<td>" . $row["FName"] . "</td>";
                            echo "<td>" . $row["LName"] . "</td>";
                            echo "<td>" . $row["Course"] . "</td>";
                            echo "<td>" . $row["CCode"] . "</td>";
                            echo "<td><button type='button' class='btn btn-primary edit-btn'>Edit</button> <button type='button' class='btn btn-success save-btn' style='display:none;'>Save</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>0 results</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <input type="hidden" name="lecture_id" id="lecture_id">
            <input type="hidden" name="new_lecture_id" id="new_lecture_id">
            <input type="hidden" name="update_lecture_id" value="true">
        </form>
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
                var row = $(this).closest('tr');
                row.find('.editable').each(function() {
                    var value = $(this).text();
                    var field = $(this).data('field');
                    $(this).html('<input type="text" class="form-control" name="' + field + '" value="' + value + '">');
                });
                row.find('.edit-btn').hide();
                row.find('.save-btn').show();
            });

            $('.save-btn').on('click', function() {
                var row = $(this).closest('tr');
                var lectureId = row.data('id');
                var newLectureId = row.find('input[name="LectureID"]').val();

                $('#lecture_id').val(lectureId);
                $('#new_lecture_id').val(newLectureId);

                $('#update_lecture_form').submit();
            });
        });
    </script>
</body>
</html>
