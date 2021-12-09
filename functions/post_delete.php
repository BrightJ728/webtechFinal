<?php
include_once (dirname(__FILE__)).'/../controllers/post-controller.php';

if(isset($_GET['id'])){
    $deletePost = deleteFashion($_GET['id']);
    if($deletePost){
        header("location: ../views/crud.php");
    }else{
        echo "something went wrong";
    }
}