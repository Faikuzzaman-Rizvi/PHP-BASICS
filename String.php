<?php
//1. Concatenation
$fname = 'fayekuzzaman';
$lname = 'rizvi';
$fulname = $fname . " ".$lname;

echo "hello {$fname} {$lname}!\n";
echo "hello $fulname!\n";


//String Length

$password = "password1234";
echo "password length :" . strlen($password)."\n";

//  Case Conversion
// Converting strings to uppercase or lowercase.

$name = "ElephenT Debuggers";
echo strtoupper($name)."\n";
echo strtolower($name)."\n";

//Extracting Substrings

$email = "frrizvi11@gmail.com";
$domain = substr($email, strpos($email,"z") + 6);
echo "email domain:" . $domain."\n";

//Replacing substrings

$text = "I love Programming in python";

$replac = str_replace("python","PHP",$text);
echo $replac."\n";

//word count

echo str_word_count("hello world");

echo"\n";
//Reverse string
$x = "Bangladesh";
echo strrev($x)."\n";

//Remove White space

$w = "       Hello world !";
echo trim($w)."\n";


//Convert String into Array
//he PHP explode() function splits a string into an array.
$x = "Hello World how are you";
$y = explode(" ",$x);
print_r($y)."\n";


//Slicing

$x = "Bangladesh";
echo substr($x, 6, 4);


