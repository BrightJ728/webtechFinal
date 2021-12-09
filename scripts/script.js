$(document).ready(function(){
            
    show_mycart();
   function show_mycart(){
      $.ajax({
      url: "ajax/show_mycart.php",
      method:"POST",
      dataType:"JSON",
      success:function(data){
        $(".get_cart").html(data.out);
        $("#cart").text(data.da);
      }
   });
   }

   setInterval(show_mycart,1000);

});


$(document).ready(function(){
            
    show_mycart();
   function show_mycart(){
      $.ajax({
      url: "ajax/show_mycart.php",
      method:"POST",
      dataType:"JSON",
      success:function(data){
          $("#get_cart").html(data.out);
        $("#cart").text(data.da);
        $("#total").text(data.total);
      }
   });
   }

   setInterval(show_mycart,1000);

 });

 $(document).on("click",".remove",function(){
     var id = $(this).attr("id");

     var action = "delete";

      $.ajax({
      url: "ajax/cart_action.php",
      method:"POST",
      data:{id:id,action:action},
      dataType:"JSON",
      success:function(data){
      
      }
   });
 });

     $(document).on("click",".clearall",function(){
     var id = $(this).attr("id");

     var action = "clearall";

      $.ajax({
      url: "ajax/cart_action.php",
      method:"POST",
      data:{id:id,action:action},
      dataType:"JSON",
      success:function(data){
      
      }
   });
 });
