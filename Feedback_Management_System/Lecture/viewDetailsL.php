<?php
    include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile Lecture Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/ViewDetailsL.css">
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

    <h2 style="text-align:center; color:black"><b>Login</b></h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="text-align:center">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="User Name" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM lecture WHERE UserName='$username' AND Password='$password'";
        $result = $con->query($sql);

        if ($result->num_rows == 1) {
            echo "<h2>lecture Profile</h2>";
            echo "<table>";
            echo "<thead>
                    <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Lecture ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["UserID"] . "</td>";
                echo "<td>" . $row["UserName"] . "</td>";
                echo "<td>" . $row["LectureID"] . "</td>";
                echo "<td>" . $row["FName"] . "</td>";
                echo "<td>" . $row["LName"] . "</td>";
                echo "<td>" . $row["Course"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Invalid username or password";
        }
    }
    $con->close();
    ?>
    
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
                window.location.href = $(this).attr('href');
            });
        });
    </script>
</body>
</html>
