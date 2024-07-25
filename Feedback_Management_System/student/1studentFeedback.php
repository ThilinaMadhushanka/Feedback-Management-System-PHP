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
    
    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/Feedback_Management_System/New folder/1.png" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>University Of Jaffna</h5>
                    <p>The main campus is located in Thirunelvely, Jaffna.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/Feedback_Management_System/New folder/262046787_275093381318819_4530013595119581069_n.png" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>University Of Jaffna</h5>
                    <p>Some faculties in Ariviyal Nagar near Kilinochchi, Kaithady</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/Feedback_Management_System/New folder/s3.png" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>University Of Jaffna - Faculty Of Engineering</h5>
                    <p>Kilinochchi premises</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-md-4">
                <h1 class="mt-4"><b><ins>Jaffna University Introduction</ins></b></h1>
                <p>Founded in 1974, Jaffna University is a public university located in the city of Jaffna in the northern region of Sri Lanka. It stands as a prominent educational institution dedicated to providing higher education opportunities to students from diverse backgrounds.</p>
                <h2 class="mt-4">Vision</h2>
                <p>To be a leading center of excellence in higher education and research, fostering knowledge, skills, and values for the development of individuals and society.</p>
                <h2 class="mt-4">Mission</h2>
                <ul>
                    <li>To provide accessible and high-quality higher education opportunities.</li>
                    <li>To conduct research that contributes to knowledge and addresses societal challenges.</li>
                    <li>To cultivate an environment that promotes critical thinking, creativity, and ethical values.</li>
                </ul>
                <h2 class="mt-4">Academic Departments</h2>
                <p>Jaffna University offers undergraduate and postgraduate programs across various disciplines, </p>
                <ul>
                    <li>Faculty of Science</li>
                    <li>Faculty of Arts</li>
                    <li>Faculty of Management Studies & Commerce</li>
                    <li>Faculty of Medicine</li>
                    <li>Faculty of Agriculture</li>
                    <li>Faculty of Engineering</li>
                    <li>Faculty of Graduate Studies</li>
                    <li>Faculty of Technology</li>
                </ul>
                <h2 class="mt-4">Research and Innovation</h2>
                <p>The university is committed to promoting research and innovation. Faculty members and students engage in research projects that address local and global issues, contributing to advancements in various fields.</p>
            </main>
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
        });
    </script>
</body>
</html>
