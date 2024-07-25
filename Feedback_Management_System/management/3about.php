<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/homeMan.css">
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
            <span class="navbar-brand mb-0 h1"> <b>Student Feedback Management System in Faculty Of Engineering</b></span>
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
                    <li><a href="viewDetailsM.php">View Profile</a></li>
                    <li><a href="3editProfileM.php">Edit Profile</a></li>
                    <li><a href="3resetpasswordm.php">Password Reset</a></li>
                    <li><a href="3loginm.php">Logout</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bx bx-message-detail"></i> Feedback
                </a>
                <ul class="submenu">
                    <li><a href="course_Feedback.php">Course Feedback</a></li>
                    <li><a href="lecture_Feedback.php">Lecture Feedback</a></li>                   
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bx bx-message-detail"></i> List
                </a>
                <ul class="submenu">
                    <li><a href="courseList.php">Course List</a></li>
                    <li><a href="lectureList.php">Lecture List</a></li>
                    <li><a href="studentList.php">Student List</a></li>                
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="3question.php">
                    <i class="bx bx-leaf"></i> Questions
                </a>
            </li>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="Summary.php">
                    <i class="bx bx-sun"></i> Summary
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Notice.php">
                    <i class="bx bx-note"></i> Notice
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="3about.php">
                    <i class="bx bx-file"></i> About
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="\Feedback_Management_System\New folder\1.png" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>University Of Jaffna</h5>
                    <p>The main campus is located in Thirunelvely, Jaffna.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="\Feedback_Management_System\New folder\262046787_275093381318819_4530013595119581069_n.png" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>University Of Jaffna</h5>
                    <p>Some faculties in Ariviyal Nagar near Kilinochchi, Kaithady</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="\Feedback_Management_System\New folder\s3.png" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>University Of Jaffna - Faculty Of Engineering</h5>
                    <p>Kilinochchi premises</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-md-4">
                <h1 class="mt-4"><b><ins>About in faculty of Engineering </ins></b></h1>
                <p>It is a longstanding dream comes true for the University of Jaffna and the people of the region with the establishment of the Faculty of Engineering. The Faculty is enrolling its first ever batch of students in 2013 and willing to serve the nation in the years to come. The campus is located in Ariviyalnagar approximately 7 km south of Killinochi.</p>
                <h2 class="mt-4">Vision</h2>
                <p>The Vision of the Faculty of Engineering is to become a preeminent centre for discernment in Engineering education, research and services nationally and globally.</p>
                <h2 class="mt-4">Mission</h2>
                <p>The Mission of the Faculty of Engineering is to foster and promote engineering nationally and globally by producing competent Engineers with social, economic and ethical values, and environmental consciousness, who contribute to sustainable development.</p>
                <h2 class="mt-4">Departments</h2>
                <ul>
                    <li>CIVIL Engineering</li>
                    <li>COMPUTER Engineering</li>
                    <li>MECHANICAL Engineering</li>
                    <li>ELECTRICAL AND ELECTRONIC Engineering</li>
                </ul>
                <h2 class="mt-4">History</h2>
                <p>The brief history associated with the establishment of Faculty spans for 30 years. The first proposal to establish the Faculty of Engineering was made at the Senate, University of Jaffna in 1979 and granted approval by both the Senate and the Council thereafter. A committee was appointed to explore the feasibility, which submitted a comprehensive report to the University Grants Commission (UGC) in 1980 recommending a Faculty of Engineering to be set up in Kilinochchi and be attached to the University of Jaffna. After a considerable delay UGC approved the proposal in 1988 entertaining the intake for the academic year 1991/92.</p>
                <p>Although a number of steps were taken by the University for establishing the Faculty at Kilinochchi, it had been delayed mainly due to the isolation of Kilinochchi from the rest of the Country due to an unfavourable situation that prevailed in the region. In 2010, as the situation was improving in the region, the Senate and the Council of University of Jaffna, the UGC, the Ministry of Higher Education, the general public and professionals wanted to give top priority to the establishment of the Faculty of Engineering at Kilinochchi to fulfil the aspirations of the community. In this regard, the Senate of University of Jaffna at its 353rd meeting held on 29th October 2010 appointed a sub-committee to study and report to the Senate on the establishment of the Faculty of Engineering. The committee, considering the reports of the previous sub-committees, present trends of the Engineering Education and the Government’s commitment on restoration of normalcy and the development of the region, submitted its proposal. The Senate approved the proposal at its 357th meeting on 29th march 2011 and Council, at its 357th meeting held on 03th April 2011 decided to establish the Faculty of Engineering at Kilinochchi adjoining the Faculty of Agriculture, initially with the following departments: Department of Civil Engineering, Department of Electrical and Electronic Engineering, Department of Computer Engineering, and Department of Inter-disciplinary Studies.</p>
                <p>The UGC and Ministry of Higher Education had subsequently endorsed the proposal to establish the Faculty of Engineering with departments above and submitted it for Cabinet approval. The Cabinet approved the formation of the Faculty of Engineering and the Gazette notification of the same appeared on 5th December 2012. The Cabinet also approved the cabinet paper no. 12/1724/521/035 of 4th January2013. </p>
                
                <h2 class="mt-4">Contact us</h2>
                <ul>
                    <li>Faculty of Engineering,
                        University of Jaffna,
                        Ariviyal Nagar,
                        Killinochchi 44000,
                        Sri Lanka</li>
                    <li>Department of Computer:
                        +94-21-2282211
                        Department of Electrical & Electronic:
                        +94-21-2282209
                        Department of Inter Disciplinary Studies:
                        +94-21-2282210 , +94-21-2282218
                        Department of Civil Engineering:
                        +94-21-2060167
                        Assistant Registrar's office:
                        +94-21-2060161
                        Dean's Office:
                        +94-021-2060160</li>
                    <li>+94-021-2060161 after five ringing tone</li>
                    <li>Office:
                        deansoffice@eng.jfn.ac.lk
                        Dean:
                        dean@eng.jfn.ac.lk</li>
                </ul>
            
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
