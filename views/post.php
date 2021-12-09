<?php
// start session so that errors can be available in this file to print
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styling.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>Post Clothes </title>
</head>
<body>
<div class=" fadeInDown">

    <div class="container">
        <br>
    <a class="btn btn-primary" href="../admin.php">Back to Home</a> 

       <form id="form" class="form"  action="../functions/upload_image.php" method="POST" enctype="multipart/form-data">
            <!-- <?php
            if(isset($_SESSION["errors"])){
                $errors = $_SESSION["errors"];
                foreach($errors as $error){
                    ?>
                        <small style="color: red"> <?= $error."<br>"; ?> </small>
                    <?php
                }
            }
            session_destroy();
        ?> -->
            <div class="form-control">
                <label for="name">Fashion Name</label>
                <input type="text" id="name" name="name">
            </div>
           
            <div class="form-control">
                <label for="description">Description</label>
                <input type="text"  id="description" name="description">
            </div>
            <div class="form-control">
                <label for="price">Price In $</label>
                <input type="text" id="price" name="price">
            </div>
      
           
            <div class="form-control">
                <label for="">Upload Image</label>
                <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
            </div>
            <small id='success'></small>
            <button type="submit" id='submitBtn' name="submit">Submit</button>
        </form>
    </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>