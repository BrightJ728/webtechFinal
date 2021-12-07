<?php 

include("../connection.php");
require_once ("../settings/db_class.php");
$dbs = new db_connection;
if (isset($_POST['page'])) {
	$page = $_POST['page'];
}else{
	$page = 1;
}

$pagination = "";
$limit = 15;
$start = ($page - 1)* $page;
$pages = mysqli_query($connect,"SELECT count(id) AS id FROM images");
while ($row = mysqli_fetch_array($pages)) {
	$total = $row['id'];
	$count = ceil($total / $limit);
   for ($i=1; $i <=$count ; $i++) { 
$pagination .= "
  <ul class='pagination mx-4'>
     <a id='".$i."' href='' class='page-link '>".$i."</a>
       
    
";
   }

}

include('../models/image_queries.php');

$output = "";
if (mysqli_num_rows($res) < 1) {
	$output .= "<h1 class='text-center'>Not yet Uploaded</h1>";
}else{
	while ($row = mysqli_fetch_array($res)) {
		require('../views/details.php');
	}
}
$data['output'] = $output;
$data['pagination'] = $pagination;
echo json_encode($data);


 ?>