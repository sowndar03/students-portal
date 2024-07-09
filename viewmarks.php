<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewmarks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .table-responsive {
            margin-top: 20px;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
       

    </style>
</head>
<body>
<div class="sidebar">
    <div class="teacher-info">
      <img src="https://img.freepik.com/premium-vector/school-girl-cartoon-round-icon-vector-illustration-schoolgirl-glasses_1142-66572.jpg" alt="Teacher">
      <div>Bharathi Dashboard</div>
    </div>
    <nav class="nav flex-column">
      <a href="#view-students"><i class="bi bi-people-fill"></i> View Students</a>
      <a href="addmarks.php"><i class="bi bi-plus-square-fill"></i> Add Student Mark</a>
      <a href="viewmarks.php"><i class="bi bi-eye-fill"></i> View Student Mark</a>
      <a href="viewmarks.php"><i class="bi bi-pencil-fill"></i> Update Student Mark</a>
    </nav>
  </div>
  <div class="chead">
    <h2>Students Data</h2>
  </div>
  <button class="bi bi-list d-lg-none" type="button" data-bs-toggle="collapse" onclick="toggleSidebar()" ></button>
<div class="container mt-5 ">
   <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Roll Number</th>
                            <th>Name</th>
                            <th>Exam</th>
                            <th>Class</th>
                            <th>Tamil</th>
                            <th>English</th>
                            <th>Hindi</th>
                            <th>Maths</th>
                            <th>Science</th>
                            <th>Social Science</th>
                            <th>totalMarks</th>
                            <th>totalpercentage</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PHP code to fetch and display records -->
                        <?php
                        include('dbconnect.php');

                        $sql = "SELECT * FROM student_marks";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>{$row['roll_no']}</td>";
                                echo "<td>{$row['name']}</td>";
                                echo "<td>{$row['exam']}</td>";
                                echo "<td>{$row['class']}</td>";
                                echo "<td>{$row['tamil']}</td>";
                                echo "<td>{$row['english']}</td>";
                                echo "<td>{$row['hindi']}</td>";
                                echo "<td>{$row['maths']}</td>";
                                echo "<td>{$row['science']}</td>";
                                echo "<td>{$row['social_science']}</td>";
                                echo "<td>{$row['total_marks']}</td>";
                                echo "<td>{$row['totalpercentage']}</td>";
                                echo "<td><a href='edit_student.php?id={$row['id']}' class='btn btn-secondary'>Edit</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>No records found</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            
        
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>