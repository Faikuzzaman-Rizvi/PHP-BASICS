<?php 

$students = [
    "name" => "John",
    "age" => 20,
    "course" => "Computer Science",
    "hobbies" => ['travel', 'biking'],
];

echo serialize($students);
// $newArray = unserialize(a:3:{s:4:"name";s:4:"John";s:3:"age";i:20;s:6:"course";s:16:"Computer Science";});

// echo $newArray['name'];


$newArray = unserialize('a:4:{s:4:"name";s:4:"John";s:3:"age";i:20;s:6:"course";s:16:"Computer Science";s:7:"hobbies";a:2:{i:0;s:6:"travel";i:1;s:6:"biking";}}');

echo $newArray['hobbies'][0];