<?php

//Arithmetic operators are [+,-,*,/,**,%]

$x = 10;  
$y = 3;

echo $x + $y ."\n";
echo $x - $y ."\n";
echo $x * $y ."\n";
echo $x / $y ."\n";
echo $x % $y ."\n";
echo $x ** $y ."\n";


//PHP Assignment Operators

// x = y	x = y	The left operand gets set to the value of the expression on the right	
// x += y	x = x + y	Addition	
// x -= y	x = x - y	Subtraction	
// x *= y	x = x * y	Multiplication	
// x /= y	x = x / y	Division	
// x %= y	x = x % y	Modulus

$x = 100;  
$y = "100";

var_dump($x !== $y);