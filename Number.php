<?php

$a = 5;
$b = 5.34;
$c = "25";

var_dump(is_int($a));
var_dump($b);
var_dump($c);


$x = 123456;
var_dump(is_int($x));

$x = acos(8);
var_dump($x);

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;