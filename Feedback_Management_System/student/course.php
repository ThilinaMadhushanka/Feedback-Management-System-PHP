<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentUserName = $_POST['studentUserName'];
    $courseCode = $_POST['courseCode'];

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $sql = "UPDATE student_course SET StudentUserName='$studentUserName', CourseCCode='$courseCode' WHERE id='$id'";
    } else {
        $sql = "INSERT INTO student_course (StudentUserName, CourseCCode) VALUES ('$studentUserName', '$courseCode')";
    }

    if ($con->query($sql) === TRUE) {
        echo "Record saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Fetch data
$sql = "SELECT * FROM student_course";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/2lectureHome.css">
    <style>
        .submenu {
            display: none;
        }
        .course-details {
            margin: 20px;
        }
        .edit-form {
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
            <span class="navbar-brand mb-0 h1"><b>Student in Faculty Of Engineering</b></span>
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
                    <i class="bx bx-file"></i> Course
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="1about.php">
                    <i class="bx bx-file"></i> About
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Course Details Section -->
    <div class="course-details">
        <h2>Add Course Details</h2>
        <form action="course.php" method="POST">
            <div class="mb-3">
                <label for="studentUserName" class="form-label">Student User Name</label>
                <input type="text" class="form-control" id="studentUserName" name="studentUserName" placeholder="Enter student username">
            </div>
            <div class="mb-3">
                <label for="courseCode" class="form-label">Course Code</label>
                <input type="text" class="form-control" id="courseCode" name="courseCode" placeholder="Enter course code">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>

    <!-- Display Course Details -->
    <div class="course-details">
        <h2>Course Details</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Student User Name</th>
                    <th>Course Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['StudentUserName']}</td>
                            <td>{$row['CourseCCode']}</td>
                            <td>
                                <button class='btn btn-primary edit-btn' data-username='{$row['StudentUserName']}' data-coursecode='{$row['CourseCCode']}'>Edit</button>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Edit Form Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="course.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Course Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="editId">
                        <div class="mb-3">
                            <label for="editStudentUserName" class="form-label">Student User Name</label>
                            <input type="text" class="form-control" id="editStudentUserName" name="studentUserName">
                        </div>
                        <div class="mb-3">
                            <label for="editCourseCode" class="form-label">Course Code</label>
                            <input type="text" class="form-control" id="editCourseCode" name="courseCode">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
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

            $('.edit-btn').on('click', function() {
                const id = $(this).data('id');
                const username = $(this).data('username');
                const coursecode = $(this).data('coursecode');
                
                $('#editId').val(id);
                $('#editStudentUserName').val(username);
                $('#editCourseCode').val(coursecode);

                $('#editModal').modal('show');
            });
        });
    </script>
</body>
</html>
