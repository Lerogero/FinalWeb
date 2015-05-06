<script src="<?php echo site_url('application/views/js/images.js')?>"></script>
<script type="text/javascript">

$(document ).ready(function() {
  var base_url = '<?php echo base_url();?>';
  setInterval(function(){
    $.ajax({
      url: base_url+"index.php/hub/inputs",
      type:'POST',
      dataType: 'json',
      success: function(data){
         document.getElementById("inputOne").innerHTML = data['inputOne']
         document.getElementById("inputTwo").innerHTML = data['inputTwo']
         document.getElementById("inputThree").innerHTML = data['inputThree']
      },
      error: function(){
        console.log("Error");
      }
    });
}, 5000);


});
</script>
<div class="classInfo">
  <div class="pull-right">
    <div class="classPassword">Password: <?php echo $classPassword; ?></div><br>
  <div class="pull-right">
    <div id="inputOne" class="ajaxbutton btncolor1">0 </div><br>
    <div id="inputTwo"class="ajaxbutton btncolor2">0 </div><br>
    <div id="inputThree"class="ajaxbutton btncolor3">0 </div>
  </div>
</div>

<div class="container">
  <center>
    <form id="uploadForm" runat="server">
      <h2>Upload: </h2><input type='file' id="imgUp" multiple onchange="readURL(this)"/>
    </form>
  </center>
</div>

<div id="slides">
    <img id="img" src="#" alt="" />
</div>
