<?php
$name   = "UWABEZA Gaella";
$school = "ULK";
$city   = "Kigali";

$age      = 23;
$children = 0;
$Experience = 2;

$GPA    = 4.1;
$salary = 500000.00;
$height = 1.63;

$status  = true; 
$married = false;  
$student = true;

echo "My name is ".$name."<br>";
echo "I study at ".$school."<br>";
echo "I live in ".$city."<br>";

echo "I am ".$age . "years old" . "<br>";
echo "I have ".$Experience." years working experience " ."<br>";

echo "I have a ".$GPA. " GPA". "<br>";
echo "I earn ".$salary."<br>";
echo "I am " .$height. " m tall". "<br>";

echo $married ? "i am currently married with $children children ." : "i am single with $children ". "<br>";
echo $student ? "I am a student at $school ." : "i am not a student at $school ";


?>
