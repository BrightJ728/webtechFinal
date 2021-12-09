<?php
require_once (dirname(__FILE__)).'/../settings/db_class.php';
$qu = new db_connection;
session_start();
if(isset($_POST['submit'])){
    include '../settings/connection.php';
$email =$_POST['email'];
$password =$_POST['password'];
$username = mysqli_real_escape_string($conn, $email);  

$sql="SELECT * FROM users where email='$email' and password='$password'";
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count >0){
    header("Location: ../admin.php"); 
}
else
{

}
}
?>