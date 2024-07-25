<?php
    include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Management Page</title>
    <link rel="stylesheet" href="/Feedback_Management_System/css/3stylem.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form  method="post" class="form-login" action="3managementAssistant.php">
        <h1><b><i><ins>Feedback Management System-Management</ins></i></b></h1>
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
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $UserName = $_POST['UserName'];
            $Password = $_POST['Password'];

            $query = "SELECT * FROM management_assistant WHERE UserName = ?";
            if ($stmt = mysqli_prepare($con, $query)) {
                mysqli_stmt_bind_param($stmt, "s", $UserName);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);

                    if (password_verify($Password, $row['Password'])) {
                        header("Location: 3managementAssistant.php");
                        exit();
                    } else {
                        header("Location: 3loginm.php?error=invalid_credentials");
                        exit();
                    }
                } else {
                    header("Location: 3loginm.php?error=invalid_credentials");
                    exit();
                }
            } else {
                die("Database query failed.");
            }
        }
    ?>
</body>
</html>

