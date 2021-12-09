<?php
//connect to database class
include_once (dirname(__FILE__)).'/../controllers/post-controller.php';

$posts = getFashions();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">

    <title>Blog Post</title>

    
  </head>
  <body>
  <div class=" fadeInDown">

    <div class="container container-custom">
    <a class="btn btn-primary" href="../admin.php">Back to Home</a> 

        <h1>Welcome Edit Fashions</h1>

        <ul class="list-group">
      <li class="list-group-item"> <a  class="cus"style=" text-decoration:none;" class="nav-link text-white" href="post.php">Add New Product</a></li>
        </ul>
        <div>
            <h3 class="mt-5">Your Posts</h3>
            <ul class="list-group">
                <?php
                    foreach($posts as $key => $value){
                ?>
                        <li class="list-group-item"> <?= $value['name'] ?>  
                            <a href="../functions/post_delete.php?id=<?= $value['id'] ?>" class="btn btn-danger btn-custom"> Delete</a> 
                            <a href="post_update.php?id=<?= $value['id'] ?>" class="btn btn-secondary btn-custom"> Update</a> 
                        </li>
                <?php
                    }
                ?>
            </ul>

        </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>