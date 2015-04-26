<div class="container">
  <section id="login">
    <center>
      <?php
      $tags = array('class'=> 'form-control');
      echo form_open('index.php/hub/start', $tags);
      $data = array(
          '1 hour'  => '1 Hour Lecture',
          '2 hour'    => '2 Hour Lecture',
          '3 hour'   => '3 Hour Lecture',
                        );

        echo form_dropdown('time', $data, '1 hour');

        echo '<p style="color: red;">As soon as you click the Start Lecture button the time period will start.</p>';
        $data = array (
          'type' => 'submit',
          'id' => 'create-lecture',
          'class' => 'btn btn-custom btn-lg btn-block',
          'value' => 'start Lecture'
        );
        echo form_submit($data) . "<br>";
        echo form_close() . "<br>". "<br>". "<br>". "<br>";?>

        <form action="<?php echo base_url('index.php/hub/view');?>">
          <input type="submit"  id="btn-login" class="btn btn-custom btn-lg btn-block" value="Back">
      </form>
    </center>
  </section>
</div>
