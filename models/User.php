<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class User extends db_connection {
    // registers new user
    public function register($name, $email, $password){
        $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

        return $this->db_query($sql);

    }
}