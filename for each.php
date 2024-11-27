<?php
//Task 1: Print Array Elements

$fruits = ["Apple", "Banana", "Orange", "Mango"];

foreach ($fruits as $value) {
    echo $value ."\n";
}

//Task 2: Display Key-Value Pairs of an Associative Array

$students = [
    "name" => "John",
    "age" => 20,
    "course" => "Computer Science",
];

foreach ($students as $key => $student) {
    echo "$key : $student \n";

}

// Task 3: Find the Sum of All Elements in an Array

$numbers = [5, 10, 15, 20];
$sum = 0;

foreach($numbers as $number){
    $sum+=$number;
}

echo "The sum of the array is: $sum \n";

// Task 4: Print Only Odd Numbers from an Array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo "The Odd number is : $number \n";
    }
}


$colors = ["red", "blue", "yellow", "red", "green", "blue", "red"];

$count = [];
foreach ($colors as $color) {
    if (isset($count[$color])) {
        $count[$color]++;
    } else {
        $count[$color] = 1;
    }
}

foreach ($count as $color => $occurrence) {
    echo "$color: $occurrence \n";
}

$array1 = ["PHP", "JavaScript"];
$array2 = ["Python", "Ruby"];

$mergedArray = array_merge($array1, $array2);

foreach ($mergedArray as $item) {
    echo $item . "<br>";
}