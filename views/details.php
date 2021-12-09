<?php
$output .= "
             <div class='col-md-3 shadow-sm rounded bg-white d-flex justify-content-center'>
				<form method='post' >
				<button  >
   			 <img name='image' src='".$row['image']."' class='col-md-12' height='200px'>
					<h3 class='mx-3 text-center'>".$row['name']."</h3>
					<h3 class='mx-3 text-center'> $".$row['price']."</h3>

					<input type='hidden' name='id' value='".$row['id']."' id='".$row['id']."'>
					<input type='hidden' name='name' value='".$row['name']."' id='name".$row['id']."'>

					<input type='hidden' name='quantity' value='1' id='quantity".$row['id']."'></a>
					<input type='hidden' name='price' value='".$row['price']."' id='price".$row['id']."'>

					<input type='submit' name='add' id='".$row['id']."' class='btn btn-warning fa fa-heart my-2 add_cart' value='Add to Cart' style='margin-left: 100px;'>
                    <i class=' fa fa-heart'></i>
				</button>
				</form>
				</div>

		 ";
?>
