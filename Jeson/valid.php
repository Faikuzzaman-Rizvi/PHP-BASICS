<?php

$username = "abc";
$password = "1234";

$userData = file_get_contents("Jeson/users.json");
$users = json_decode($userData,true);
// var_dump($users);

foreach ($users as $u => $p) {
        if($u == $username && $p == $password){
            echo "login successful";
            exit;
        }   
}
echo "login Failed";