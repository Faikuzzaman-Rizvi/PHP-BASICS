<?php

$marks = 85; // Example marks

// Determine grade using switch
switch (true) {
    case ($marks >= 80 && $marks <= 100):
        $grade = "A+";
        break;
    case ($marks >= 70 && $marks < 80):
        $grade = "A";
        break;
    case ($marks >= 60 && $marks < 70):
        $grade = "A-";
        break;
    case ($marks >= 50 && $marks < 60):
        $grade = "B";
        break;
    case ($marks >= 40 && $marks < 50):
        $grade = "C";
        break;
    case ($marks >= 33 && $marks < 40):
        $grade = "D";
        break;
    case ($marks >= 0 && $marks < 33):
        $grade = "F";
        break;
    default:
        $grade = "Invalid Marks";
}

// Display the result
echo "Marks: $marks\n";
echo "Grade: $grade";


