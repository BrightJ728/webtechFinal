<?php
include_once (dirname(__FILE__)).'/../controllers/post-controller.php';
$posts = getPosts();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .formsearch{
    width: 60%;
    height: 40px;
    margin-left: 20%;
    margin-right: 20%;
    margin-top: 20%;
}
#search{
    width: 100%;
    height: 40px;
    border-radius: 20px;
    font-stretch: extra-expanded;
    font-size: larger;
    padding-left: 3%;

}
#btn{
    
    margin-right: 20%;
    margin-top: 4%;
    width: 100%;
    height: 40px;
    display: inline;
  
}
label{
    margin-left: 40%;
    margin-right: 20%;
    margin-bottom: 10%;
    font-size: x-large;
    
}
.stateless{
    margin-top: 10%;
    width: 100%;
    margin-bottom: 10%;

}
form{
    width: 70%;
    padding-bottom: 20%;
    
}
.contain{
    padding-left: 15%;
    padding-right: 40%;
}
.stateless input{
    display: block;
    margin-top: 2%;
    width: 70%;
    margin-left: 20%;
    margin-right: 20%;
    height: 40px;
    font-size: x-large;
}

.btn-custom{
    margin-right: 5px;
    float: right;
}
.lis{
    margin-right: 8%;
    margin-right: 8%;

}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>        
<div class="contain">
<h3 class="mt-5"> Delete Posts</h3>
            <ul class="list-group">
                <?php
                    foreach($posts as $key => $value){
                ?>
                <td>
                <li class="list-group-item ">  <?= $value['image'] ?> <a> 
                     </td>
                        <a href="./functions/delete.php?id=<?= $value['id'] ?>" class="btn btn-danger btn-custom"> Delete</a> 
                            
                    </li>
                <?php
                    }
                ?>
            </ul>
            
            
        </div>
        <br>
        <br>
           
</body>

</html>