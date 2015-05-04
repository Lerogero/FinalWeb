$(document).ready(function(){

    $("#inputOne").click(function()
    {
     $.ajax({
         type: "POST",
         url: "<?php echo base_url(); ?>index.php/lecpas/buttons",
         data: {"1"},
         success:
              function(){
                sleep(5);  //STOP POST
              }
          });
     return false;
 });

   $("#inputTwo").click(function()
   {
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/lecpas/buttons",
        data: {"1"},
        success:
             function(){
               sleep(5);  //STOP POST
             }
         });
    return false;
  });

  $("#inputThree").click(function()
  {
   $.ajax({
       type: "POST",
       url: "<?php echo base_url(); ?>index.php/lecpas/buttons",
       data: {"1"},
       success:
            function(){
              sleep(5);  //STOP POST
            }
        });
   return false;
 });


 });
