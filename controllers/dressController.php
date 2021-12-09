<?php
//connect to User class
require_once (dirname(__FILE__)).'/../models/post_image.php';

function image_upload($name,$image, $description,$price){
    $post = new POST;
    $upload = $post->upload_image($name, $image, $description,$price);
    if($upload){
        return $upload;
    }else{
        return false;
    }

}