<html>

  <head>
    <title> ThankYou </title>

<style>
   
.custom{
  font-size: x-large;
  color: black;
}
.con{
        margin-bottom:5%;
        margin-left:25%;
        width:60%;
        border: 2px solid black;
                text-align:center;
        }    </style>
  </head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha$

  <body>
    
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
            <li><a class ="custom" href="../guest.php">Home</a></li>

          </ul>
        </div>

      </div>
    </nav>
        <div class="container">
        <div class="jumbotron">
            <h1 class="text-center" ><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>          </div>
        </div>
        <br>

        <h2 class="text-center"> Thank you for Believing in Us ! email at brightokyere.gcihs@gmail.com and let's take it from there</h2>

<?php
  $num1 = rand(100000,999999);
  $num2 = rand(100000,999999);
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>
<div class="con">
<h1> Open Email Here And You Message Us</h1>
<form class="fom" method="POST"
      action=
"mailto: obrightjesus@gmail.com"
      enctype="multipart/form-data">
    <div class="control">
        Name<br>
            <input aria-required=""
                id="name"
                type="text" />
    </div>
    <br>
    <div class="control">
         Phone Number<br>
        <input aria-required=""
               id="mobile_number"
               type="tel" />
    </div>
    <br>
    <div class="control">
    Message:<br>
    <textarea rows="7"
              cols="30"
              name="comment">
    </textarea>
</div>
<br>
<div class="control">
    <input type="submit"
           value="Submit" />
</div>
</form>
</div>
</div>
 </body>

</html>