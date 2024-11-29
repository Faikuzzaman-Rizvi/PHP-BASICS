<?php

$jsonData = file_get_contents("students.json");
// echo $jsonData;
// $students = json_decode($jsonData);
// var_dump($students);
// echo $students->name; 

$students = json_decode($jsonData,true);
// var_dump($students);
echo $students['age'];
