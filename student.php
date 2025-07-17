<?php

require_once 'connect.php';

class Student{
    private $studentid;
    private $firstname;
    private $lastname;
    private $gender;
    private $age;

Public function __construct($studentid, $firstname, $lastname, $gender, $age) {
    $this->studentid = $studentid;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->gender = $gender;
    $this->age = $age;
}

public function displayRow(){
    echo "<tr>
    <td>{$this->studentid}</td>
    <td>{$this->firstname}</td>
    <td>{$this->lastname}</td>
    <td>{$this->gender}</td>
    <td>{$this->age}</td>
    </tr>";
}
public static function getALLStudents($conn){
    $students = [];
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $students[] = New Student(
                $row['StudentID'],
                $row['FirstName'],
                $row['LastName'],
                $row['Gender'],
                $row['Age']
            );
        }
    }
    return $students;
}
}
?>