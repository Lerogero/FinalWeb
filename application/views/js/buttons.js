
function buttonPressed(e){
    e.preventDefault();

    butId = $(this).attr('id');

    $.ajax({
          method: "POST",
          url: "index.php/lecpas/buttons/",
          data: { button: butId }
        })
      .done(function( msg ) {
        sleep(5);
      });
});
