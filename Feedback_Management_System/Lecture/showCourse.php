<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Feedback For management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/course_Feedback.css">
   
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

    <!-- Main Content -->
    <div class="container">
        <div class="filter-container">
            <h2>Lecture Feedback</h2>
            <form method="post" action="showCourse.php">
            <div class="row">
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
            <div class="content">
            <div class="container">
            <h1>Show Lecture Feedback</h1>
            <table class="table table-bordered">
                <?php
                    include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $LectureID = $_POST['LectureID'];
                    $LectureName = $_POST['LectureName'];

                    $sql = "SELECT * FROM lecture_feedback WHERE LectureID = '$LectureID' AND LectureName = '$LectureName'";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {

                    echo "<thead>
                            <tr>
                                <th>Academic Year</th>
                                <th>Semester</th>                   
                                <th>Course code</th>
                                <th>Cource Name</th>
                                <th>A Quection 1</th>
                                <th>A Quection 2</th>
                                <th>A Quection 3</th>
                                <th>B Quection 1</th>
                                <th>B Quection 2</th>
                                <th>B Quection 3</th>
                                <th>C Quection 1</th>
                                <th>C Quection 2</th>
                                <th>C Quection 3</th>
                                <th>C Quection 4</th>
                                <th>D Quection 1</th>
                                <th>D Quection 2</th>
                                <th>comments</th>
                            </tr>
                        </thead>
                        <tbody>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["academic_year"] . "</td>
                                <td>" . $row["semester"] . "</td>  
                                <td>" . $row["CourseCcode"] . "</td>
                                <td>" . $row["CourceName"] . "</td>                      
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
                            </tr>";
                    }
                    echo "</tbody>";
                    } else {
                    echo "<tr><td colspan='13'>No data found</td></tr>";
                    }

                    $con->close();
                    }
                    ?>
                </tbody>
            </table>
            </div>
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
        });
    </script>
</body>
</html>
