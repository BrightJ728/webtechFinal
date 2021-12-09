$(document).ready(function(){
           
    load_data();
  function load_data(page){


      $.ajax({
      url: "ajax/load_data.php",
      method: "POST",
      data:{page:page},
      dataType:"JSON",
      success:function(data){
       $(".show_data").html(data.output);
       $("#pagination").html(data.pagination);
      }
      });
  }

$(document).on("click", ".pagination a",function(event){
event.preventDefault();
 var id  = $(this).attr("id");
 load_data(id);
});




  function show_mycart(){
     $.ajax({
     url: "ajax/show_mycart.php",
     method:"POST",
     dataType:"JSON",
     success:function(data){
       $("#cart").text(data.da);
     }
  });
  }

});






$(document).on("click",".add_cart", function(event){
  event.preventDefault();
  var id = $(this).attr("id");
  var name = $("#name"+id+"").val();
  var price = $("#price"+id+"").val();
  var quantity = $("#quantity"+id+"").val();
  var action = "add";


  $.ajax({
     url: "ajax/cart_action.php",
     method:"POST",
     dataType:"JSON",
     data: {id:id,name:name,price:price,quantity:quantity,action:action},
     success:function(data){
        
     }
  });


});
