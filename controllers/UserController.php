<?php
//connect to User class
require_once (dirname(__FILE__)).'/../models/User.php';

function register_new_user($name, $email, $password){
    // create a new instance of the object
    $user = new User;

    // run the query
    $register_user = $user->register($name, $email, $password);

    // check if it worked
    if($register_user){
        return $register_user;
    }else{
        return false;
    }

}