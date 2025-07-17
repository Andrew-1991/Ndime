<?php
class student {

public $name;
public $age;
public $gender;

public function introduction (){
    echo "my name is $this->name and my age is $this->age and my gender is $this->gender";
}
}


$student = new Student ();
$student->name = "Andrew";
$student->age = 12;
$student->gender = "male";

$student->introduction();

?>