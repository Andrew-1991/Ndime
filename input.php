<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>add a new student</h1>
    <form action="add_student.php" method="POST"><br>
    <label for="FirstName">FistName</label>
    <input type="text" id="FirstName" Name="firstname" Required><br>
    <label for="Lastname">Lastname</label>
    <input type="text" id="Lastname" Name="lastname" Required><br>
    <label for="gender">Gender</label>
    <input type="text" id="Gender" Name="gender" Required><br>
    <label for="StudentID">StudentID</label>
    <input type="text" id="ageStudentID" Name="student_id" Required><br>
    <label for="Age">Age</label>
    <input type="text" id="Age" Name="age" Required><br>
    <button type="submit">Add student</button><br>
</body>
</html>