<?php
//for looop....
for($i=1; $i <=10 ; $i++){
    for($j=1; $j <=$i; $j++){
        echo "*";
    }
    echo "\n";
}

//while loop..
$a=1;
while ($a<=10){
    echo "$a\n";
    $a++;
}

//do while loop ..
$a=1;
do {
    echo "number:$a\n";
    $a++;
}while($a<=5);


for($i=1; $i <=10 ; $i++){
    if($i % 2 == 0 ){
    echo "$i is odd number!\n";
    }else{
        echo "$i this is a even number!\n";
    }
    
}

$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo "The factorial of $number is: $factorial";

