<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
	body{
		background-blend-mode: screen;
	}
	.cus{
		width: 40%;
		margin-right: 5%;
		margin-left: 25%;
		margin-top: 10%;

	}
	.custom{
		margin-top: 4%;
		margin-left: 15%;

		text-align: justify;
	}
</style>
</head>
<body>
<nav>
	<a class="btn btn-primary" href="../admin.php">Back to Home</a> 

</nav>
	<?php
	include("../connection.php");
	if(isset($_POST['submit'])){
$id =$_POST['id'];
	}
	$pages = mysqli_query($connect,"SELECT  * FROM images where id=$id");
	$row = mysqli_fetch_array($pages);
	if($row['id']==$id){
	echo" 
			
	<img src='../".$row['image']."' class='cus' height='400px' >

		<div class='col-md-6 custom shadow-sm rounded bg-white d-flex justify-content-center'>
		   <div class='custo' >
		   <h3 class='mx-3 text-center'> Product Name: ".$row['name']."</h3>

			   <h3 class='mx-3 text-center'>Description: ".$row['description']."</h3>
			   <h3 class='mx-3 text-center'>Price: $".$row['price']."</h3>


		   </div>
		   </div>

	";
	}
			?>

	
			</body>
</html>