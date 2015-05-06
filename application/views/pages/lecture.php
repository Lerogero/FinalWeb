<script src="<?php echo site_url('application/views/js/images.js')?>"></script>
<script type="text/javascript">

$(document ).ready(function() {
  var base_url = '<?php echo base_url();?>';
  var query = '<?php $query; ?>';
     $.ajax({
       type: "POST",
       url: base_url+"index.php/hub/inputs",
       data: data,
       dataType: 'json',
       success: function(query){
          document.getElementById("InputOne").innerHTML = query['inputOne']
          document.getElementById("inputTwo").innerHTML = query['inputTwo']
          document.getElementById("inputThree").innerHTML = query['inputThree']
       }
     });

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
