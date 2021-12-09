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

    <title>Form Validator</title>
</head>
<body>
<div class=" wrapper fadeInDown">

    <div class="container">
       

        <form id="form" class="form"  action="../functions/register_user_function.php" method="POST" enctype="multipart/form-data">
            <h2>Register With Us</h2>
            <?php
            if(isset($_SESSION["errors"])){
                $errors = $_SESSION["errors"];

                // loop and display errors
                foreach($errors as $error){
                    ?>
                        <small style="color: red"> <?= $error."<br>"; ?> </small>
                    <?php
                }
            }
            // destroy session after displaying errors
            session_destroy();
        ?>
            <div class="form-control">
                <label for="username">Full Name</label>
                <input type="text" id="username" name="username">
                <small id='usernameError'></small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text"  id="email" name="email">
                <small id='emailError'></small>
            </div>
            <div class="form-control">
                <label for="phone">Phone Number</label>
                <input type="text"  id="phone" name="phone">
                <small id='phone'></small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password"  id="password" name="password">
                <small id='passwordError'></small>
            </div>
            <div class="form-control">
                <label for="password2">Confirm Password</label>
                <input type="password" id="password2" name="password2">
                <small id='password2Error'></small>
            </div>
          
            <small id='success'></small>
            <button type="submit" id='submitBtn' name="submit">Submit</button>
            <a href="login.php">Already Have Account? Login</a>
        </form>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>
</html>