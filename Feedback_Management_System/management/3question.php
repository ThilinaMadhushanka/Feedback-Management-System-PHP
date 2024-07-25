<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/Feedback_Management_System/css/3question.css">
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
    
    <h2>Questions Table</h2>
<table>
  <thead>
    <tr>
      <th>Question No</th>
      <th>Description</th>
      <th>Option</th>
      <th>Type</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>This course helped me to enhance my knowledge</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>WThe workload of the course was manageable</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>The course was interesting</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Adequate Materials (handouts) were provided</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Handouts were easy to understand</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>6</td>
      <td>Enough reference books were used </td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>7</td>
      <td>Given problems (examples/ tutorials/ exercises) were enough</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>8</td>
      <td>Given problems (examples/ tutorials/ exercises) were challenging</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>9</td>
      <td>I could relate what I learnt from lectures to lab/ field classes</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>10</td>
      <td>Labs & Fieldwork helped to improve my skills and practical knowledge </td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>11</td>
      <td>I can conduct experiments/ fieldwork myself through set of instructions in future</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>12</td>
      <td>I prepared thoroughly for each class</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>13</td>
      <td>I attended lectures, lab/fieldwork regularly</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>14</td>
      <td>I did all assigned work (homework/ assignments/ lab & field report) on time</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>15</td>
      <td>I referred recommended textbooks regularly</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>16</td>
      <td>Lectures/ Labs/ Fieldworks started and finished on time</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>17</td>
      <td>The lecturer managed class time effectively</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>18</td>
      <td>The lecturer was readily available for consultation with students</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>19</td>
      <td>Use of teaching aids (multimedia, white board)</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>20</td>
      <td>Lectures were easy to understand</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>21</td>
      <td>The lecturer encouraged students to participate in discussions</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>22</td>
      <td>The lecturer focused on syllabi</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>23</td>
      <td>The lecturer was self-confident in subject and teaching</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>24</td>
      <td>The lecturer linked real-world applications and creating interest in the subject</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>25</td>
      <td>The lecturer updated latest development in the field</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>26</td>
      <td>I asked questions from the lecturer in the class</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>27</td>
      <td>I consulted with the lecturer after lecture hours</td>
      <td>-2,-1,0,1,2</td>
      <td>one Choice</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    
  </tbody>
</table>

<h2>Categories Table</h2>
<table>
  <thead>
    <tr>
      <th>Category No</th>
      <th>Type</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1-15</td>
      <td>Course Feedback</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>15-27</td>
      <td>Lecture Feedback</td>
      <td class="action-buttons">
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
  </tbody>
</table>

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
