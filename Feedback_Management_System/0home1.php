<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/Feedback_Management_System/css/0home1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <h1><b><i><ins>Feedback Management System - Faculty Of Engineering</ins></i></b></h1>
        <h1>UNIVERSITY OF JAFFNA</h1>
        <h2>Choose your login page</h2>
        <form action="/Feedback_Management_System/student/1logins.php">
            <div class="input-box">
                <label for="student-login" style="color: aliceblue"><b>Student</b></label>
                <button type="submit" id="student-login">Student Login</button>
                <i class='bx bxs-user'></i>
            </div>
        </form>
        <form action="/Feedback_Management_System/Lecture/2loginl.php">
            <div class="input-box">
                <label for="lecture-login" style="color: aliceblue"><b>Lecture</b></label>
                <button type="submit" id="lecture-login">Lecture Login</button>
                <i class='bx bxs-user'></i>
            </div>
        </form>
        <form action="/Feedback_Management_System/management/3loginm.php">
            <div class="input-box">
                <label for="management-login" style="color: aliceblue"><b>Management</b></label>
                <button type="submit" id="management-login">Management Login</button>
                <i class='bx bxs-user'></i>
            </div>
        </form>
    </div>
</body>
</html>
