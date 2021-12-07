<?php
    include('../functions/admin_login.php'); // Includes Login Script

?>
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page </title>

    <link href="../css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Log In </h2>
  
      <!-- Icon -->
      <div class="fadeIn first">
      </div>
  
      <!-- Login Form -->
      <form method="POST">
        <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password"><br>
        <input type="submit" name = "submit" class="fadeIn fourth" value="Log In">
      </form>
  
      
  
    </div>
  </div>

</body>



</html>