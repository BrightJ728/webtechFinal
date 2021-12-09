<?php
$query = "SELECT * FROM images LIMIT $start, $limit";
$res = mysqli_query($connect,$query);
?>