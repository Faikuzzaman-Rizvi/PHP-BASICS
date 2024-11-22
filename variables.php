<?php

$x = 5;
$y = 10;

echo "$x , $y";
echo "\n";
echo $x + $y;

echo "\n";

$text = "Hello World!";

echo "the text is $text";

echo "\n";

$a = 10;
$b = "Hello";
$c = 10.23;
$d = true;
$e = ['a', 'b', 'c'];
$f = NULL;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);


//global 

$name = "jone deo";

function test(){
    global $name;
    echo "hello $name";
}

test();

echo "\n";


function number(){
    $number = 50; //local scope
    echo $number;
}

number();

echo "\n";

// global scope
 
function myTest() {
   static $x = 0; 
  echo  $x;
  $x++;
} 

myTest();
myTest();
myTest();