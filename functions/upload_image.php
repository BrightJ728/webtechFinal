<?php
//connect to database class
require_once (dirname(__FILE__)).'/../controllers/dressController.php';

// keeping track of errors
$errors = array();

// check if button is clicked
if(isset($_POST["submit"])){
    // grab form data
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    // validate data

    // check if fields are empty
    if(empty($name)){array_push($errors, "name is required");}

    if(empty($description)){array_push($errors, "password is required");}

    // check if fields are of appropriate length

    // check if passwords are the same
    
    // validate email with regex
    // set error if not an email
    // number validation
    // image validation
    $target_dir = "images/";
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if image has been uploaded
    if(empty($_FILES["image"]["name"])){
        array_push($errors, "file cannot be empty");
    }else{
        // check if its an actual image
        $check  = getimagesize($_FILES["image"]["tmp_name"]);
        if($check == false){
            array_push($errors, "file is not an image");
        }
        // check if file already exists
        if(file_exists($target_file)){
            array_push($errors, "file already exists");
        }

        // limit file size to 5MB
        if($_FILES["image"]["size"] > 5000000){
            array_push($errors, "file is too large");
        }

        // limit file type
        if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif"){
            array_push($erros, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        }
    }

    // if form is fine
    if(count($errors) == 0){
        // upload image
        $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], '../'.$target_file);

        // check if uploaded successfully and then add new user
        // note we are storing the path to the image in the database
        if($upload_image){
            // encrypt password
            $upload = image_upload($name, $target_file, $description, $price);
            // check if user is registered
            if(!$upload){
                echo "failed";
            }else{
                // redirect
                echo "success";
                header("location: ../admin.php");

            }
        }else{
            echo "upload failed";
        }
    }else{
        session_start();
        // store errors inside session
        $_SESSION["errors"] = $errors;
        print_r($errors);
        // header("location: ../views/signUp.php");
    }
    
}