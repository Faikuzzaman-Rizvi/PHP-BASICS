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