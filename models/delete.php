<?php
include_once (dirname(__FILE__)).'/../controllers/post-controller.php';

if(isset($_GET['id'])){
    $deletePost = deletePost($_GET['id']);
    if($deletePost){
        header("location: ../my_form.php");
    }else{
        echo "something went wrong";
    }
}