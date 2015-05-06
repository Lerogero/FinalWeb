
<script type="text/javascript">
$( document ).ready(function() {
$(".btn-lg").on('click', function(e){
    e.preventDefault();

    butId = $(this).attr('id');
    var base_url = '<?php echo base_url();?>';
    $.ajax({
          method: "POST",
          url: base_url+"index.php/lecpas/buttons",
          data: { button: butId }
        })
      .done(function( data ) {
        console.log(data);
      });
});
});
</script>
    <div style ="padding-top: 300px;" class="form-group login-form">
      <center>
        <form method="post">
          <input  class="btn btn-lg btn-success" type="button" id="inputOne" value="I didn't understand that" ><br><br>
          <input  class="btn btn-lg btn-primary" type="button" id="inputTwo" value="Could you repeat that" ><br><br>
          <input  class="btn btn-lg btn-danger" type="button" id="inputThree" value="HELP!">
        </form>
      </center>
    </div>
