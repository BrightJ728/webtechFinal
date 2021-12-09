<?php
//connect to database class
require_once (dirname(__FILE__)).'/../settings/db_class.php';

class Post extends db_connection {
    
    public function getFashions(){
        //sql query
        $sql = "SELECT * FROM `images`";

        //run query
        return $this->db_query($sql);
    }
    public function delete($id){
        // sql query
        $sql = "DELETE FROM `images` WHERE `id`='$id'";

        // run query
        return $this->db_query($sql);
    }
    public function getSingleFashion($id){
        // sql query
        $sql = "SELECT * FROM `images` WHERE `id`='$id'";

        // run query
        return $this->db_query($sql);
    }

    public function update($id, $name, $body){
        // sql query
        $sql = "UPDATE `images` SET `name`='$name',`description`='$body' WHERE `id`='$id'";

        // run query
        return $this->db_query($sql);
    }

    
}

?>