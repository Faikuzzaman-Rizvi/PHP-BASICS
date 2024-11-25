<?php

$marks = 36;

if($marks>=80 && $marks<=100){
    echo "A+";
}elseif($marks>=70 && $marks<80){
    echo "A";
}elseif($marks>=60 && $marks<70){
    echo "A-";
}elseif($marks>=50 && $marks<60){
    echo "B";
}elseif($marks>=40 && $marks<50){
    echo "C";
}elseif($marks>=33 && $marks<40){
    echo "D";
}elseif($marks>=0 && $marks<33){
    echo "F";
}else{
    echo "Invalid Marks";
}


