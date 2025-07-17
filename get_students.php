<?php
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Students</title>
</head>
<body>
    <form method ="GET" action= "get_students.php">
        <button type ="submit"> Get Students</button>
</form>
<?php


// fetching data from the database registration


$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0 ){
    echo "<table border='1'>";
    echo "<tr><th>StudentID</th><th>FirstName</th><th>LastName</th><th>Gender</th><th>Age</th></tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr>";

    echo "<td>" . $row['StudentID'] . "</td>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Gender'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    }    
echo "</table>";
} else {
    echo " No students found.";
}
?>
</body>
</html> 