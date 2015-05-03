<script src="<?php echo site_url('application/views/js/images.js')?>"></script>
<div class="classInfo">
  <div class="pull-right">
    <div class="classPassword">Password: <?php echo $classPassword; ?></div><br>
  <div class="pull-right">
    <div class="ajaxbutton btncolor1">0 </div><br>
    <div class="ajaxbutton btncolor2">0 </div><br>
    <div class="ajaxbutton btncolor3">0 </div>
  </div>
</div>

<div class="container">
  <center>
    <form id="uploadForm" runat="server">
        <input type='file' id="imgUp" multiple onchange="readURL(this)"/>
    </form>
  </center>
</div>

<div id="slides">
    <img id="img" src="#" alt="" />
</div>
