<?php
    include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Student Page</title>
    <link rel="stylesheet" href="/Feedback_Management_System/css/1styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form method="post" class="form-login">
        <h1><b><i><ins>Feedback Management System-Student</ins></i></b></h1>
            <h2>LOGIN</h2>
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

            <div class="remember-forgot">
                <label>
                    <input type="checkbox">
                    Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Log In</button>
        </form>

        <form action="1registers.php" class="form-register">
            <div>
                <label>No account! now create new account</label>
            </div>
            <div>
                <label for="account">Create account : </label>
                <button type="submit" class="submit2">Create account</button>
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM student WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 1) {
            header("Location: 1studentFeedback.php");
            exit();
        } else {
            header("Location: 1logins.php?error=invalid_credentials");
            exit();
        }
    }
?>
</body>
</html>