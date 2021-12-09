<?php
include_once (dirname(__FILE__)).'/../controllers/post-controller.php';

// check if button is clicked
if(isset($_POST['submit'])){
    // Grab form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    // update post if empty
    $updatedPost = updateFashion($id, $FashionName, $body);
    if($updatedPost){
        header("location: ../views/posts.php?id=".$id);
    }else{
        header("location: ../views/post_update.php?id=".$id);
    }
}

