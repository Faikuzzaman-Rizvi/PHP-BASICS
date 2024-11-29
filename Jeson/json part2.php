<?php

$students = [
    "name" => "John",
    "age" => 20,
    "course" => "Computer Science",
    "hobbies" => ['travel', 'biking'],
];

$json =json_encode($students,JSON_PRETTY_PRINT);
// echo $json;
file_put_contents("students.json",$json);
