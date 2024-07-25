<?php
include_once 'C:\xampp\htdocs\Feedback_Management_System\connect.php';

// Assuming you have a form submission to filter data, process it here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $academic_year = $_POST['academic_year'];
    $semester = $_POST['semester'];
    // Add more filters as needed based on your data structure

    // Example SQL query to fetch data based on filters
    $sql = "SELECT * FROM course_feedback WHERE academic_year = '$academic_year' AND semester = '$semester'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Summary of Course Feedback</h1>";
        echo "<table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Feedback ID</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>General Questions</th>
                        <th>Materials Questions</th>
                        <th>Tutorials Questions</th>
                        <th>Lab Questions</th>
                        <th>Self-Assessment Questions</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['FeedbackID'] . "</td>
                    <td>" . $row['CourseCcode'] . "</td>
                    <td>" . $row['CourceName'] . "</td>
                    <td>" . $row['general_1'] . ", " . $row['general_2'] . ", " . $row['general_3'] . "</td>
                    <td>" . $row['materials_1'] . ", " . $row['materials_2'] . ", " . $row['materials_3'] . "</td>
                    <td>" . $row['tutorials_1'] . ", " . $row['tutorials_2'] . "</td>
                    <td>" . $row['lab_1'] . ", " . $row['lab_2'] . ", " . $row['lab_3'] . "</td>
                    <td>" . $row['myself_1'] . ", " . $row['myself_2'] . ", " . $row['myself_3'] . ", " . $row['myself_4'] . "</td>
                    <td>" . $row['comments'] . "</td>
                </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>No feedback data found for the selected filters.</p>";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Summary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Feedback Summary</h2>
        <form method="post" action="Summary.php">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="academic_year">Academic Year:</label>
                        <select class="form-control" id="academic_year" name="academic_year">
                            <option>2018/19</option>
                            <option>2019/20</option>
                            <option>2020/21</option>
                            <option>2021/22</option>
                            <option>2022/23</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="semester">Semester:</label>
                        <select class="form-control" id="semester" name="semester">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label></label>
                    <button class="btn btn-primary btn-block">Filter</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
