<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/Notice.css">
    <style>
        .submenu {
            display: none;
        }
        .state-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="btn btn-outline-light me-3" id="sidebarCollapse">
                <i class="bx bx-menu"></i>
            </button>
            <span class="navbar-brand mb-0 h1"><b>Student Feedback Management System in Faculty Of Engineering</b></span>
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
    
    <div class="container">
        <!-- Notice Section -->
        <div class="notice-container">
            <h2>Notice</h2>
            <form id="noticeForm">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="AcadamicYear"><b>Academic Year</b><br><br></label>
                            <select id="AcadamicYear" name="AcadamicYear" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="semester"><b>Semester</b><br><br></label>
                            <select id="semester" name="semester" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- State Container -->
        <div class="state-container">
            <p id="stateParagraph">Current Status: <span id="currentState">Not selected</span></p>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Semester</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>English Language Enhancement MC1010 
                            Mathematics MC1020 
                            Engineering Drawing ID1010 
                            Computing EC1011 
                            Applied Electricity EC1020 
                            Engineering Metrology ID1021 </td>
                        <td class="action-buttons">
                            <button class="btn btn-warning edit-button">Edit</button>
                            <button class="btn btn-danger delete-button">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Environmental Pollution and Control ID2010 
                            Materials Science for Engineering ID2020 
                            Linear Algebra MC2020 
                            Computer Programming EC2010 
                            Engineering Mechanics CE2021 
                            Thermodynamics MP2010</td>
                        <td class="action-buttons">
                            <button class="btn btn-warning edit-button">Edit</button>
                            <button class="btn btn-danger delete-button">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Kinematics and Dynamics MP3010 
                            Differential Equations and Numerical Methods MC3010 
                            Mechanics of Materials CE3010
                            Design and Prototyping ID3020 
                            Introduction to Electronics and Instrumentation EC3011 
                            Probability and Statistics MC3020</td>
                        <td class="action-buttons">
                            <button class="btn btn-warning edit-button">Edit</button>
                            <button class="btn btn-danger delete-button">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> Civil Engineering -
                                CE4010 Surveying and Field Work
                                CE4020 Civil Engineering Construction
                                CE4030 Engineering Hydrology
                                CE4050 Fluid Mechanics
                                CE4060 Structural Analysis
                                CE4070 Concrete Technology
                                CE4080 Geology for Civil Engineers --
                            Computer Engineering -
                            Digital Design EC4010 
                            Signals and Systems EC4040 
                            Electronic Circuits and Devices EC4050 
                            Computer and Data Networks EC4060 
                            Data Structures and Algorithms EC4070  EC2010
                            Discrete Mathematics MC4010--
                            Electrical Engineering -
                            Digital Design EC4010 
                            Electromagnetic Engineering EC4021 
                            Electric Power EC4030 
                            Signals and Systems EC4040 
                            Electronic Circuits and Devices EC4050 
                            Computer and Data Networks EC4060 --
                            Mechanical Engineering -    
                            Solid Mechanics MP4050
                            Applied Thermodynamics MP4010 
                            Machine Drawing MP4020
                            Mechanics of Machines MP4030
                            Fluid Mechanics for Mechanical Engineers ID4031
                            Materials Engineering and Manufacturing Tech-nology MP4040 
                        
                    
                        

                            </td>
                        <td class="action-buttons">
                            <button class="btn btn-warning edit-button">Edit</button>
                            <button class="btn btn-danger delete-button">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Civil Engineering -
                            CE5021 Geomechanics
                            CE5031 Water and Wastewater Engineering
                            CE5040 Hydraulic Engineering and Design
                            CE5060 Contaminated land, groundwater and Remediation
                            CE5070 Transportation Engineering
                            CE5080 Design of Concrete Structures --
                            Computer Engineering -
                            Digital Signal Processing EC5010  
                            Analogue and Digital Communication EC5020 
                            Control Systems EC5030 
                            Database Systems EC5070 
                            Software Construction EC5080 
                            Computer Architecture and Organization EC5110--
                            Electrical Engineering - Digital Signal Processing EC5010
                            Analogue and Digital Communication EC5020 
                            Control Systems EC5030 
                            Electric Machines EC5040 
                            Power Electronics and Design EC5050
                            Computer Architecture and Organization EC5110
                            Industrial Training – I MC5010--
                            Mechanical Engineering -
                            Thermal Power Generation MP5010
                        Dynamics of Mechanical Systems and Control MP5020 
                        Fluid Machinery MP5030 
                        Process Engineering MP5040 
                        Machine Design MP5050 
                        Advanced Mechanics of Machines MP5060 
                        Industrial Training – I MC5010 
</td>
                        <td class="action-buttons">
                            <button class="btn btn-warning edit-button">Edit</button>
                            <button class="btn btn-danger delete-button">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Civil Engineering -
                        CE6010 Geotechnical Engineering and Design
                        CE6030 Solid Waste Management
                        CE6070 Continuum Mechanics
                        CE6080 Design of Steel Structures
                        CE6090 Structural Analysis – II
                        CE6050 Civil Engineering Research Project – I --
                            Computer Engineering -
                            Embedded Systems Design EC6020
                            Software Engineering EC6060
                            Computer Engineering Research Project – I EC6070
                            Robotics and Automation EC6090
                            Operating Systems EC6110--
                            Electrical Engineering -Embedded Systems Design EC6020
                            Power Systems EC6030
                            Electrical and Electronic Engineering Research Project – I EC6080 
                            Robotics and Automation EC6090 
                            Wireless and Mobile Communications EC6100 --
                            Mechanical Engineering -
                            Elements of Heat and Mass Transfer and Princi-ples of Refrigeration MP6011 
                        Advanced Machine Design MP6020
                        Mechatronics MP6030 
                        Advanced Vibration Analysis MP6040 
                        Mechanical Engineering Research Project – I MP6050 
                        </td>
                        <td class="action-buttons">
                            <button class="btn btn-warning edit-button">Edit</button>
                            <button class="btn btn-danger delete-button">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Civil Engineering -
                        CE7020 Computational Methods in Civil Engineering
                        CE7030 Civil Engineering Fieldwork
                        CE7050 Civil Engineering Research Project – II --
                            Computer Engineering -
                            Project Management and Engineering Industry ID7010
                            Computer and Network Security EC7020
                            Computer Engineering Research Project – II EC7070--
                            Electrical Engineering -Project Management and Engineering Industry ID7010 
                            Electrical and Electronic Engineering Research Project – II EC7080
                            Communication Network Design EC7090
                            Industrial Training – II MC7020 --
                            Mechanical Engineering -
                            Project Management and Engineering Industry ID7010 
                            Production Engineering MP7010 
                            Mechanical Engineering Research Project – II MP7050
                            Industrial Training – II MC7020
                        </td>
                        <td class="action-buttons">
                            <button class="btn btn-warning edit-button">Edit</button>
                            <button class="btn btn-danger delete-button">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Civil Engineering -
                        CE8010 Multidisciplinary Design Project
                        CE8050 Civil Engineering Research Project – III --
                            Computer Engineering -
                            Computer Engineering Design Proficiency EC8020 
                            Computer Engineering Research Project – III --
                            Electrical Engineering -
                            Electrical and Electronic Engineering Design Pro-ficiency EC8010 
                            Electrical and Electronic Engineering Research Project – III--
                            Mechanical Engineering -
                        Advanced Tribology MP8010
                        Mechanical Engineering Research Project — III MP8050 

                        </td>
                        <td class="action-buttons">
                            <button class="btn btn-warning edit-button">Edit</button>
                            <button class="btn btn-danger delete-button">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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

            $('#noticeForm').on('submit', function(e) {
                e.preventDefault();
                const academicYear = $('#AcadamicYear').val();
                const semester = $('#semester').val();
                if (academicYear && semester) {
                    $('#currentState').text(`Academic Year: ${academicYear}, Semester: ${semester}`);
                    $('#changeStateBtn').show();
                }
            });

            $('#changeStateBtn').on('click', function() {
                const newState = prompt("Enter new status:");
                if (newState) {
                    $('#currentState').text(newState);
                }
            });

            $(document).on('click', '.edit-button', function() {
                const currentRow = $(this).closest('tr');
                const currentStatus = currentRow.find('td:nth-child(2)').text();
                const newStatus = prompt("Edit the status:", currentStatus);
                if (newStatus) {
                    currentRow.find('td:nth-child(2)').text(newStatus);
                }
            });

            $(document).on('click', '.delete-button', function() {
                if (confirm("Are you sure you want to delete this row?")) {
                    $(this).closest('tr').remove();
                }
            });
        });
    </script>
</body>
</html>
