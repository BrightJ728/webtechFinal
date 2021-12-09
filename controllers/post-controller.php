<?php
//connect to post class
include_once (dirname(__FILE__)).'/../models/post_class.php';

// Inserting a new post


function getFashions(){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->getFashions();

    if($runQuery){
        $posts = array();
        while($record = $post->db_fetch()){
            $posts[] = $record;
        }
        return $posts;
    }else{
        return false;
    }
}
function getSingleFashions($id){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->getSingleFashion($id);

    if($runQuery){

        $posts = $post->db_fetch();
        if(!empty($posts)){
            return $posts;
        }else{
            return [];
        }
        
    }else{
        return false;
    }
}
function deleteFashion($id){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->delete($id);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}


function updateFashion($id, $fashionName, $description){
    // Create new post object
    $post = new Post;

    // Run query
    $runQuery = $post->update($id, $fashionName, $description);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

?>