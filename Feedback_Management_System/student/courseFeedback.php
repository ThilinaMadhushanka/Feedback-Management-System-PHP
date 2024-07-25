<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $academic_year = $_POST['academic_year'];
    $semester = $_POST['semester'];
    $batch = $_POST['batch'];
    $CourseCcode = $_POST['CourseCcode'];
    $CourceName = $_POST['CourceName'];
    $date = $_POST['date'];
    $general_1 = $_POST['general_1'];
    $general_2 = $_POST['general_2'];
    $general_3 = $_POST['general_3'];
    $materials_1 = $_POST['materials_1'];
    $materials_2 = $_POST['materials_2'];
    $materials_3 = $_POST['materials_3'];
    $tutorials_1 = $_POST['tutorials_1'];
    $tutorials_2 = $_POST['tutorials_2'];
    $lab_1 = $_POST['lab_1'];
    $lab_2 = $_POST['lab_2'];
    $lab_3 = $_POST['lab_3'];
    $myself_1 = $_POST['myself_1'];
    $myself_2 = $_POST['myself_2'];
    $myself_3 = $_POST['myself_3'];
    $myself_4 = $_POST['myself_4'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO course_feedback (academic_year, semester, batch, CourseCcode, CourceName, date, general_1, general_2, general_3, materials_1, materials_2, materials_3, tutorials_1, tutorials_2, lab_1, lab_2, lab_3, myself_1, myself_2, myself_3, myself_4, comments)
    VALUES ('$academic_year', '$semester', '$batch', '$CourseCcode', '$CourceName', '$date', '$general_1', '$general_2', '$general_3', '$materials_1', '$materials_2', '$materials_3', '$tutorials_1', '$tutorials_2', '$lab_1', '$lab_2', '$lab_3', '$myself_1', '$myself_2', '$myself_3', '$myself_4', '$comments')";

    if ($con->query($sql) === TRUE) {
        $sql1 = "INSERT INTO coursefeedback (CourseCcode, date)
        VALUES ('$CourseCcode', '$date')";


        if ($con->query($sql1) === TRUE) { 
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql1 . "<br>" . $con->error;
        }
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
    <title>Course Feedback Page</title>
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
            <button class="btn btn-outline-light me-3" id="sidebarCollapse">
                <i class="bx bx-menu"></i>
            </button>
            <span class="navbar-brand mb-0 h1"> <b>Course Feedback in Faculty Of Engineering</b></span>
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
            <h2>Course Evaluation</h2>
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
            <h2><b>Course Eveluation</b></h2>
            <p><i>This questionnaire intends to collect feedback from the students about the course unit. Your valuable feedback will be vital for us to strengthen the teaching-learning environment to achieve excellence in teaching and learning.</i></p>
            
            <br>
            <p><i>Please respond to the following statements by marking on the scale next to each statement (Ex.  X   ). The scale 1 to 5 refers to the following.</i></p>
            <p><i><strong>-2 : Strongly Disagree&emsp; -1 : Disagree&emsp; 0 : Not Sure&emsp; +1 : Agree&emsp; +2 : Strongly Agree</strong></i></p>

    <label for="CourseCcode">Course Code:</label>
    <input type="text" id="CourseCcode" name="CourseCcode"><br><br>
    <label for="CourceName">Course Name:</label>
    <input type="text" id="CourceName" name="CourceName"><br><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date"><br><br>
    
    <fieldset>
        <legend><strong>A. General</strong></legend>
        <label for="general_1">1. This course helped me to enhance my knowledge.</label>
        <input type="radio" id="general_1" name="general_1" value="-2" required> -2
        <input type="radio" id="general_1" name="general_1" value="-1" required> -1
        <input type="radio" id="general_1" name="general_1" value="0" required> 0
        <input type="radio" id="general_1" name="general_1" value="1" required> +1
        <input type="radio" id="general_1" name="general_1" value="2" required> +2<br><br>

        <label for="general_2">2. The workload of the course was manageable.</label>
        <input type="radio" id="general_2" name="general_2" value="-2" required> -2
        <input type="radio" id="general_2" name="general_2" value="-1" required> -1
        <input type="radio" id="general_2" name="general_2" value="0" required> 0
        <input type="radio" id="general_2" name="general_2" value="1" required> +1
        <input type="radio" id="general_2" name="general_2" value="2" required> +2<br><br>

        <label for="general_3">3. The course was interesting.</label>
        <input type="radio" id="general_3" name="general_3" value="-2" required> -2
        <input type="radio" id="general_3" name="general_3" value="-1" required> -1
        <input type="radio" id="general_3" name="general_3" value="0" required> 0
        <input type="radio" id="general_3" name="general_3" value="1" required> +1
        <input type="radio" id="general_3" name="general_3" value="2" required> +2<br><br>
    </fieldset>

    <fieldset>
        <legend><strong>B. Materials</strong></legend>
        <label for="materials_1">1. Adequate Materials (handouts) were provided.</label>
        <input type="radio" id="materials_1" name="materials_1" value="-2" required> -2
        <input type="radio" id="materials_1" name="materials_1" value="-1" required> -1
        <input type="radio" id="materials_1" name="materials_1" value="0" required> 0
        <input type="radio" id="materials_1" name="materials_1" value="1" required> +1
        <input type="radio" id="materials_1" name="materials_1" value="2" required> +2<br><br>

        <label for="materials_2">2. Handouts were easy to understand.</label>
        <input type="radio" id="materials_2" name="materials_2" value="-2" required> -2
        <input type="radio" id="materials_2" name="materials_2" value="-1" required> -1
        <input type="radio" id="materials_2" name="materials_2" value="0" required> 0
        <input type="radio" id="materials_2" name="materials_2" value="1" required> +1
        <input type="radio" id="materials_2" name="materials_2" value="2" required> +2<br><br>

        <label for="materials_3">3. Enough reference books were used .</label>
        <input type="radio" id="materials_3" name="materials_3" value="-2" required> -2
        <input type="radio" id="materials_3" name="materials_3" value="-1" required> -1
        <input type="radio" id="materials_3" name="materials_3" value="0" required> 0
        <input type="radio" id="materials_3" name="materials_3" value="1" required> +1
        <input type="radio" id="materials_3" name="materials_3" value="2" required> +2<br><br>
    </fieldset>

    <fieldset>
        <legend><strong>C. Tutorials/Examples</strong></legend>
        <label for="tutorials_1">1. Given problems (examples/ tutorials/ exercises) were enough.</label>
        <input type="radio" id="tutorials_1" name="tutorials_1" value="-2" required> -2
        <input type="radio" id="tutorials_1" name="tutorials_1" value="-1" required> -1
        <input type="radio" id="tutorials_1" name="tutorials_1" value="0" required> 0
        <input type="radio" id="tutorials_1" name="tutorials_1" value="1" required> +1
        <input type="radio" id="tutorials_1" name="tutorials_1" value="2" required> +2<br><br>

        <label for="tutorials_2">2. Given problems (examples/ tutorials/ exercises) were challenging.</label>
        <input type="radio" id="tutorials_2" name="tutorials_2" value="-2" required> -2
        <input type="radio" id="tutorials_2" name="tutorials_2" value="-1" required> -1
        <input type="radio" id="tutorials_2" name="tutorials_2" value="0" required> 0
        <input type="radio" id="tutorials_2" name="tutorials_2" value="1" required> +1
        <input type="radio" id="tutorials_2" name="tutorials_2" value="2" required> +2<br><br>
    </fieldset>

    <fieldset>
        <legend><strong>D. Lab/Fieldwork</strong></legend>
        <label for="lab_1">1. I could relate what I learnt from lectures to lab/ field classes.</label>
        <input type="radio" id="lab_1" name="lab_1" value="-2" required> -2
        <input type="radio" id="lab_1" name="lab_1" value="-1" required> -1
        <input type="radio" id="lab_1" name="lab_1" value="0" required> 0
        <input type="radio" id="lab_1" name="lab_1" value="1" required> +1
        <input type="radio" id="lab_1" name="lab_1" value="2" required> +2<br><br>

        <label for="lab_2">2. Labs & Fieldwork helped to improve my skills and practical knowledge.</label>
        <input type="radio" id="lab_2" name="lab_2" value="-2" required> -2
        <input type="radio" id="lab_2" name="lab_2" value="-1" required> -1
        <input type="radio" id="lab_2" name="lab_2" value="0" required> 0
        <input type="radio" id="lab_2" name="lab_2" value="1" required> +1
        <input type="radio" id="lab_2" name="lab_2" value="2" required> +2<br><br>

        <label for="lab_3">3. I can conduct experiments/ fieldwork myself through set of instructions in future.</label>
        <input type="radio" id="lab_3" name="lab_3" value="-2" required> -2
        <input type="radio" id="lab_3" name="lab_3" value="-1" required> -1
        <input type="radio" id="lab_3" name="lab_3" value="0" required> 0
        <input type="radio" id="lab_3" name="lab_3" value="1" required> +1
        <input type="radio" id="lab_3" name="lab_3" value="2" required> +2<br><br>
    </fieldset>

    <fieldset>
        <legend><strong>E. Myself</strong></legend>
        <label for="myself_1">1. I prepared thoroughly for each class.</label>
        <input type="radio" id="myself_1" name="myself_1" value="-2" required> -2
        <input type="radio" id="myself_1" name="myself_1" value="-1" required> -1
        <input type="radio" id="myself_1" name="myself_1" value="0" required> 0
        <input type="radio" id="myself_1" name="myself_1" value="1" required> +1
        <input type="radio" id="myself_1" name="myself_1" value="2" required> +2<br><br>

        <label for="myself_2">2. I attended lectures, lab/fieldwork regularly.</label>
        <input type="radio" id="myself_2" name="myself_2" value="-2" required> -2
        <input type="radio" id="myself_2" name="myself_2" value="-1" required> -1
        <input type="radio" id="myself_2" name="myself_2" value="0" required> 0
        <input type="radio" id="myself_2" name="myself_2" value="1" required> +1
        <input type="radio" id="myself_2" name="myself_2" value="2" required> +2<br><br>

        <label for="myself_3">3. I did all assigned work (homework/ assignments/ lab & field report) on time.</label>
        <input type="radio" id="myself_3" name="myself_3" value="-2" required> -2
        <input type="radio" id="myself_3" name="myself_3" value="-1" required> -1
        <input type="radio" id="myself_3" name="myself_3" value="0" required> 0
        <input type="radio" id="myself_3" name="myself_3" value="1" required> +1
        <input type="radio" id="myself_3" name="myself_3" value="2" required> +2<br><br>

        <label for="myself_4">4. I referred recommended textbooks regularly.</label>
        <input type="radio" id="myself_4" name="myself_4" value="-2" required> -2
        <input type="radio" id="myself_4" name="myself_4" value="-1" required> -1
        <input type="radio" id="myself_4" name="myself_4" value="0" required> 0
        <input type="radio" id="myself_4" name="myself_4" value="1" required> +1
        <input type="radio" id="myself_4" name="myself_4" value="2" required> +2<br><br>
    </fieldset>

    <label for="comments">Any other comments:</label><br>
    <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Submit">

    </form>
    </div>

</body>
</html>
