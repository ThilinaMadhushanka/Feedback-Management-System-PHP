<?php
    include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Lecture Page</title>
    <link rel="stylesheet" href="/Feedback_Management_System/css/2stylel.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form id="submitForm" method="post" class="form-login">
        <h1><b><i><ins>Feedback Management System-Lecture</ins></i></b></h1>
            <h2>Register</h2>
            <div class="input-box">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" placeholder="user@gmail.com" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box1">
                <label for="Cpassword">Comform Password</label>
                <input type="password" id="Cpassword" name="Cpassword" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
             <br>
            <button type="submit" class="btn" name="submit">Register</button>
        </form>

        <form class="form-register"><br>
            <div>
                <label>Already register!</label>
                <button type="submit" class="submit2">Log IN</button>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['Cpassword'];

        if ($password !== $confirmPassword) {
            echo "<script>alert('Passwords do not match!');</script>";
            exit();
        }

        $sql = "SELECT * FROM lecture WHERE username='$username'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<script>alert('Username already exists!');</script>";
            exit();
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO lecture (username, password) VALUES ('$username', '$hashedPassword')";

        if ($con->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully'); window.location.href='2lectureHome.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    }
    ?>
</body>
</html>
