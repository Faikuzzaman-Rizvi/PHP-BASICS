<?php

function login($username, $userpassword){
    if(validateUsername($username)){
        return "fail username";
    }elseif(validatePassword($userpassword)){
        return "fail password";
    }elseif(!massing($username, $userpassword)){
        return "login fail";
    }else{
        return "login successful";
    }


}


function validateUsername($username){
    if (empty($username)){
        return "username empty!";
    }
}

function validatePassword($userpassword){
    if (empty($userpassword)){
        return "password empty";
    }
}

function massing($username, $userpassword){
    if($username == "abc" && $userpassword == "1234"){
        return "login successfully";
    }
}

echo login("abc" , "1234");