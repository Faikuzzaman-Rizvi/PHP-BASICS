<?php
$a = "hello world";
$b = 10;
$c = 10.23;
$d = true;
$e = ['A','B','C','D'];
$f = null;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);

class Bike{
    public $model;
    public $color;

    public function __construct($model,$color){
        $this->model = $model;
        $this->color = $color;
    }

    public function hello(){
        return "my bike model is : {$this->model} $ color is {$this->color}";
    }

}

$myBike = new Bike('classic 350', 'gray');
var_dump($myBike);