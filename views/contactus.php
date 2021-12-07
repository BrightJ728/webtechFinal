<?php
require_once (dirname(__FILE__)).'/../settings/db_class.php';
$qu = new db_connection;
session_start();
?>

<html>

  <head>
    <title> Contact | Fashion </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="../css/contactus.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">  <script type="text/javascript" src="js/jquery.min.js"></script>


  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../guest.php">Home</a></li>
            <li class="active"><a href="contactus.php">Contact Us</a></li>
          </ul>

          <?php



 
?>
        </div>

      </div>
    </nav>
    <br>

    <div class="heading">
     <strong>Want to contact <span class="edit"> Fashion Up' </span>?</strong>
     <br>
    Here are a few ways to get in touch with us.
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form method="post" action="">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
            <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
          </div> 
          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
        </form>


        
      </div>
    </div>
      
    </div>

    <?php
if (isset($_POST['submit'])){
$Name =$_POST['name'];
$Email_Id = $_POST['email'];
$Mobile_No = $_POST['mobile'];
$Subject = $_POST['subject'];
$Message =$_POST['message'];

// use wordwrap() if lines are longer than 70 characters

$msg = wordwrap($Message,70);

// send email
ini_set("SMTP", "127.0.0.1");
# set the smtp server
ini_set("smtp_port", "25");
mail("obrightjesus@gmail.com","My subject","hiii");

$to = "obrightjesus@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: obrightjesus@gmail.com" . "\r\n" .
"CC: obrightjesus@gmail.com";

mail($to,$subject,$txt,$headers);

$query = "INSERT into contact(name,email,mobile,subject,message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
$success = $qu->db_query($query);

if (!$success){
  die("Couldnt enter data: ");
}
else{
  
  echo"alert(message sent)";
}

}
?>




     </body>

  
</html>