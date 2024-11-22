<?php 
$x = 30;
$y = "Hello";
$z = 12.02;

printf("the value is %.3f %s %d",$x,$y,$z);

echo "\n";

$fname = "Isaac";
$mname = "nothing";
$lname = "Newton";

printf('his name is %3$s %1$s %2$s',$fname,$mname,$lname);

echo "\n";

printf("Hello, %10s!\n", $fname); 

printf('the binary equivlent of %1$d is %1$b',12);

echo "\n";

printf("Floating point (fixed): %.2f\n", 123.456); 

//Desimal formate
$number = 255;
printf("Decimal: %d\n", $number); 

//octal formate
$number = 255;
printf("Octal: %o\n", $number);

//Hexadecimal Formate
$number = 255;
printf("Hexadecimal (lowercase): %x\n", $number); 

printf("Hexadecimal (uppercase): %X\n", $number); 

//combined example

$number = 300;

printf("Bainary: %b, Decimal: %d, Octal: %o, Hex (lower): %x, Hex (upper): %X\n", 
    $number, $number, $number, $number,$number);



