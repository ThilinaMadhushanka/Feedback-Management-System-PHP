<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';

// Handle adding a new course
if (isset($_POST['add_course'])) {
    $course_code = $_POST['course_code'];
    $course_name = $_POST['course_name'];
    $course_credit = $_POST['course_credit'];

    $sql = "INSERT INTO course (CCode, Name, Credit) VALUES ('$course_code', '$course_name', '$course_credit')";
    if ($con->query($sql) === TRUE) {
        echo "New course added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

if (isset($_POST['update_course'])) {
    $course_code = $_POST['CCode'];
    $course_name = $_POST['Name'];
    $course_credit = $_POST['Credit'];

    $sql = "UPDATE course SET Name='$course_name', Credit='$course_credit' WHERE CCode='$course_code'";
    if ($con->query($sql) === TRUE) {
        echo "Course updated successfully";
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
    <title>Course List</title>
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
                <a class="nav-link" href="Feedback.php">
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
        <h2>Course List</h2>
        <form id="update_course_form" method="POST" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Name</th>
                        <th>Credit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql2 = "SELECT CCode, Name, Credit FROM course";
                    $result = $con->query($sql2);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr data-CCode='" . $row["CCode"] . "'>";
                            echo "<td class='editable' data-field='CCode'>" . $row["CCode"] . "</td>";
                            echo "<td class='editable' data-field='Name'>" . $row["Name"] . "</td>";
                            echo "<td class='editable' data-field='Credit'>" . $row["Credit"] . "</td>";
                            echo "<td><button type='button' class='btn btn-primary edit-btn'>Edit</button> <button type='button' class='btn btn-success save-btn' style='display:none;'>Save</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>0 results</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <input type="hidden" name="course_code" id="course_code">
            <input type="hidden" name="course_name" id="course_name">
            <input type="hidden" name="course_credit" id="course_credit">
            <input type="hidden" name="update_course" value="true">
        </form>

        <h2>Add New Course</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="course_code" class="form-label">Course Code</label>
                <input type="text" class="form-control" id="course_code" name="course_code" required>
            </div>
            <div class="mb-3">
                <label for="course_name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="course_name" name="course_name" required>
            </div>
            <div class="mb-3">
                <label for="course_credit" class="form-label">Course Credit</label>
                <input type="number" class="form-control" id="course_credit" name="course_credit" required>
            </div>
            <button type="submit" class="btn btn-success" name="add_course">Add Course</button>
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
                var courseId = row.data('id');
                var courseCode = row.find('input[name="CCode"]').val();
                var courseName = row.find('input[name="Name"]').val();
                var courseCredit = row.find('input[name="Credit"]').val();

                $('#course_id').val(courseId);
                $('#course_code').val(courseCode);
                $('#course_name').val(courseName);
                $('#course_credit').val(courseCredit);

                $('#update_course_form').submit();
            });
        });
    </script>
</body>
</html>
