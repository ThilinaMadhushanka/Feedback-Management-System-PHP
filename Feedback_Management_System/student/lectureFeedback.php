<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $academic_year = $_POST['academic_year'];
    $semester = $_POST['semester'];
    $batch = $_POST['batch'];
    $CourseCcode = $_POST['CourseCcode'];
    $CourceName = $_POST['CourceName'];
    $LectureID = $_POST['LectureID'];
    $LectureName = $_POST['LectureName'];
    $date = $_POST['date'];
    $management_1 = $_POST['management_1'];
    $management_2 = $_POST['management_2'];
    $management_3 = $_POST['management_3'];
    $delivery_1 = $_POST['delivery_1'];
    $delivery_2 = $_POST['delivery_2'];
    $delivery_3 = $_POST['delivery_3'];
    $subject_1 = $_POST['subject_1'];
    $subject_2 = $_POST['subject_2'];
    $subject_3 = $_POST['subject_3'];
    $subject_4 = $_POST['subject_4'];
    $myself_1 = $_POST['myself_1'];
    $myself_2 = $_POST['myself_2'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO lecture_feedback (academic_year, semester, batch, CourseCcode, CourceName, LectureID, LectureName, date, management_1, management_2, management_3, delivery_1, delivery_2, delivery_3, subject_1, subject_2, subject_3, subject_4, myself_1, myself_2, comments)
    VALUES ('$academic_year', '$semester', '$batch', '$CourseCcode', '$CourceName','$LectureID', '$LectureName', '$date', '$management_1', '$management_2', '$management_3', '$delivery_1', '$delivery_2', '$delivery_3', '$subject_1', '$subject_2', '$subject_3', '$subject_4', '$myself_1', '$myself_2',  '$comments')";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Feedback Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/courseFeedback.css">
    <style>
        .submenu {
            display: none;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Open/Close Dashboard Button -->
            <button class="btn btn-outline-light me-3" id="sidebarCollapse">
                <i class="bx bx-menu"></i>
            </button>
            <span class="navbar-brand mb-0 h1"> <b>Lecture Feedback in Faculty Of Engineering</b></span>
            <div class="d-flex">
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search">
                <span class="navbar-text me-3"></span>
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
      
    <!-- Main Content -->
    <div class="container">
        <form action="1studentFeedback.php" method="post">
            <h2>Lecture Evaluation</h2>
            <label for="academic_year">Academic Year:</label>
            <select name="academic_year">
                <option>2018/19</option>
                <option>2019/20</option>
                <option>2020/21</option>
                <option>2021/22</option>
                <option>2022/23</option>
            </select><br><br>
            Semester 
            <select name="semester">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
            (E/
            <select name="batch">
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
            </select>
            batch)<br><br>
            <h2><b>TEACHER EVALUATION</b></h2>
            <p><i>This questionnaire intends to collect feedback from the students about the Lecturer. Your valuable feedback will be vital for us to strengthen the teaching-learning environment to achieve excellence in teaching and learning.</i></p>
            
            <br>
            <p><i>Please respond to the following statements by marking on the scale next to each statement (Ex.X). The scale 1 to 5 refers to the following.</i></p>
            <p><i><strong>-2 : Strongly Disagree&emsp; -1 : Disagree&emsp; 0 : Not Sure&emsp; +1 : Agree&emsp; +2 : Strongly Agree</strong></i></p>

    <label for="CourseCcode">Course Code:</label>
    <input type="text" id="CourseCcode" name="CourseCcode"><br><br>
    <label for="CourceName">Course Name:</label>
    <input type="text" id="CourceName" name="CourceName"><br><br>   
    <label for="LectureID">Lecture ID:</label>
    <input type="text" id="LectureID" name="LectureID"><br><br>
    <label for="LectureName">Lecture Name:</label>
    <input type="text" id="LectureName" name="LectureName"><br><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date"><br><br>

    <fieldset>
        <legend><strong>A.	Time Management</strong></legend>
        <label for="management_1">1. Lectures/ Labs/ Fieldworks started and finished on time.</label>
        <input type="radio" id="management_1" name="management_1" value="-2" required> -2
        <input type="radio" id="management_1" name="management_1" value="-1" required> -1
        <input type="radio" id="management_1" name="management_1" value="0" required> 0
        <input type="radio" id="management_1" name="management_1" value="1" required> +1
        <input type="radio" id="management_1" name="management_1" value="2" required> +2<br><br>

        <label for="management_2">2. The lecturer managed class time effectively.</label>
        <input type="radio" id="management_2" name="management_2" value="-2" required> -2
        <input type="radio" id="management_2" name="management_2" value="-1" required> -1
        <input type="radio" id="management_2" name="management_2" value="0" required> 0
        <input type="radio" id="management_2" name="management_2" value="1" required> +1
        <input type="radio" id="management_2" name="management_2" value="2" required> +2<br><br>

        <label for="management_3">3. The lecturer was readily available for consultation with students.</label>
        <input type="radio" id="management_3" name="management_3" value="-2" required> -2
        <input type="radio" id="management_3" name="management_3" value="-1" required> -1
        <input type="radio" id="management_3" name="management_3" value="0" required> 0
        <input type="radio" id="management_3" name="management_3" value="1" required> +1
        <input type="radio" id="management_3" name="management_3" value="2" required> +2<br><br>
    </fieldset>

    <fieldset>
        <legend><strong>B.	Delivery Method</strong></legend>
        <label for="delivery_1">1. Use of teaching aids (multimedia, white board).</label>
        <input type="radio" id="delivery_1" name="delivery_1" value="-2" required> -2
        <input type="radio" id="delivery_1" name="delivery_1" value="-1" required> -1
        <input type="radio" id="delivery_1" name="delivery_1" value="0" required> 0
        <input type="radio" id="delivery_1" name="delivery_1" value="1" required> +1
        <input type="radio" id="delivery_1" name="delivery_1" value="2" required> +2<br><br>

        <label for="delivery_2">2. Lectures were easy to understand.</label>
        <input type="radio" id="delivery_2" name="delivery_2" value="-2" required> -2
        <input type="radio" id="delivery_2" name="delivery_2" value="-1" required> -1
        <input type="radio" id="delivery_2" name="delivery_2" value="0" required> 0
        <input type="radio" id="delivery_2" name="delivery_2" value="1" required> +1
        <input type="radio" id="delivery_2" name="delivery_2" value="2" required> +2<br><br>

        <label for="delivery_3">3. The lecturer encouraged students to participate in discussions.</label>
        <input type="radio" id="delivery_3" name="delivery_3" value="-2" required> -2
        <input type="radio" id="delivery_3" name="delivery_3" value="-1" required> -1
        <input type="radio" id="delivery_3" name="delivery_3" value="0" required> 0
        <input type="radio" id="delivery_3" name="delivery_3" value="1" required> +1
        <input type="radio" id="delivery_3" name="delivery_3" value="2" required> +2<br><br>
    </fieldset>

    <fieldset>
        <legend><strong>C.	Subject Command</strong></legend>
        <label for="subject_1">1. The lecturer focused on syllabi.</label>
        <input type="radio" id="subject_1" name="subject_1" value="-2" required> -2
        <input type="radio" id="subject_1" name="subject_1" value="-1" required> -1
        <input type="radio" id="subject_1" name="subject_1" value="0" required> 0
        <input type="radio" id="subject_1" name="subject_1" value="1" required> +1
        <input type="radio" id="subject_1" name="subject_1" value="2" required> +2<br><br>

        <label for="subject_2">2. The lecturer was self-confident in subject and teaching.</label>
        <input type="radio" id="subject_2" name="subject_2" value="-2" required> -2
        <input type="radio" id="subject_2" name="subject_2" value="-1" required> -1
        <input type="radio" id="subject_2" name="subject_2" value="0" required> 0
        <input type="radio" id="subject_2" name="subject_2" value="1" required> +1
        <input type="radio" id="subject_2" name="subject_2" value="2" required> +2<br><br>

        <label for="subject_3">3. The lecturer linked real-world applications and creating interest in the subject.</label>
        <input type="radio" id="subject_3" name="subject_3" value="-2" required> -2
        <input type="radio" id="subject_3" name="subject_3" value="-1" required> -1
        <input type="radio" id="subject_3" name="subject_3" value="0" required> 0
        <input type="radio" id="subject_3" name="subject_3" value="1" required> +1
        <input type="radio" id="subject_3" name="subject_3" value="2" required> +2<br><br>

        <label for="subject_4">4. The lecturer updated latest development in the field.</label>
        <input type="radio" id="subject_4" name="subject_4" value="-2" required> -2
        <input type="radio" id="subject_4" name="subject_4" value="-1" required> -1
        <input type="radio" id="subject_4" name="subject_4" value="0" required> 0
        <input type="radio" id="subject_4" name="subject_4" value="1" required> +1
        <input type="radio" id="subject_4" name="subject_4" value="2" required> +2<br><br>
    </fieldset>
    
    <fieldset>
        <legend><strong>E. Myself</strong></legend>
        <label for="myself_1">1. I asked questions from the lecturer in the class.</label>
        <input type="radio" id="myself_1" name="myself_1" value="-2" required> -2
        <input type="radio" id="myself_1" name="myself_1" value="-1" required> -1
        <input type="radio" id="myself_1" name="myself_1" value="0" required> 0
        <input type="radio" id="myself_1" name="myself_1" value="1" required> +1
        <input type="radio" id="myself_1" name="myself_1" value="2" required> +2<br><br>

        <label for="myself_2">2. I consulted with the lecturer after lecture hours.</label>
        <input type="radio" id="myself_2" name="myself_2" value="-2" required> -2
        <input type="radio" id="myself_2" name="myself_2" value="-1" required> -1
        <input type="radio" id="myself_2" name="myself_2" value="0" required> 0
        <input type="radio" id="myself_2" name="myself_2" value="1" required> +1
        <input type="radio" id="myself_2" name="myself_2" value="2" required> +2<br><br>
    </fieldset>

    <label for="comments">Any other comments:</label><br>
    <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Submit">

    </form>
    </div>
</body>
</html>
