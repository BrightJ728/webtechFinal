<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class POST extends db_connection {
    // registers new user
    
    
    public function upload_image($name, $image, $description,$price){
        $sql = "INSERT INTO `images`(`name`,`image`,uploaded,`description`,price) VALUES ('$name','$image',NOW(),'$description',$price)";

        return $this->db_query($sql);
    }
}