$(document ).ready(function() {
     $.ajax({
       type: "GET",
       url: "index.php/hub/ajax/",
       data: input,
       success: function(input){
         if(input = "inputOne") {
           document.getElementById("InputOne").innerHTML = input;
          } else if (input = "inputTwo") {
            document.getElementById("inputTwo").innerHTML = input;
          } else if (input = "inputThree") {
            document.getElementById("inputThree").innerHTML = input;
          }
       }
     });

});});
