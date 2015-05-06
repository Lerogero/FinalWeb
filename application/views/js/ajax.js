$(document ).ready(function() {
  var base_url = '<?php echo base_url();?>';
  alert("Hello");
     $.ajax({
       type: "GET",
       url: base_url+"index.php/hub/lecture",
       data: query,
       success: function(query){
         if(query = "inputOne") {
           document.getElementById("InputOne").innerHTML = input;
         } else if (query = "inputTwo") {
            document.getElementById("inputTwo").innerHTML = input;
          } else if (query = "inputThree") {
            document.getElementById("inputThree").innerHTML = input;
          }
       }
     });

});});
