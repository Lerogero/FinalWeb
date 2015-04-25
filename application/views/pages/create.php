<div class="container">
  <?php echo $password; ?>
  <section id="login">
  <form action="<?php echo base_url('index.php/hub/lecture');?>">
  <input type="submit" id="create-lecture" class="btn btn-custom btn-lg btn-block" value="Start Lecture">
  </form>
  <form action="<?php echo base_url('index.php/hub/view');?>">
    <input type="submit"  id="btn-login" class="btn btn-custom btn-lg btn-block" value="Back">
  </form>
  </section>
</div>
