<?php
require_once 'student.php';
$students = Student::getALLStudents($conn);
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Student Management System</title>
    <style>
        table { border-collapse: collapse; width:100%; }
        th, td {border: 1px solid #ddd; padding: 8px; }
        th{background-color:#85edbe;}
    </style>
</head>
<body>
    <h1>Display All Students</h1>
    <table>
        <thead>
            <tr>
                <th>StudentID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Gender</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $student) {
                $student->displayRow();
        
            }
            ?>
            </tbody>
        </table>
</body>
</html>