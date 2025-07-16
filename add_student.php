<?php

   require_once "connect.php";

        // Sanitize and validate form data to check zinthu ngati malicious code
        $firstname = $conn->real_escape_string($_POST['firstname']);
        $lastname = $conn->real_escape_string($_POST['lastname']);
        $student_id = $conn->real_escape_string($_POST['student_id']);
        $gender = $conn->real_escape_string($_POST['gender']);
        $age = (int)$_POST['age']; // Cast to integer for safety

        // Prepare the SQL query with proper quoting for strings for ma strings and no quoting for ma integers
        $sql = "INSERT INTO student (StudentID, FirstName, LastName, Gender, Age) VALUES ('$student_id', '$firstname', '$lastname', '$gender', $age)";

        // Execute the query and check for successful adding of ma student athu
        if ($conn->query($sql) === TRUE){
            echo "<p style='color: green;'>Student Added Successfully</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
        }

        // Close the connection
        $conn->close();