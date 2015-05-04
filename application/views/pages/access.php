<script src="<?php echo site_url('application/views/js/buttons.js')?>"></script>
    <div style ="padding-top: 300px;" class="form-group login-form">
      <center>
        <form method="post">
          <input class="btn btn-lg btn-success" type="submit" id="inputOne" value="I didn't understand that"><br><br>
          <input class="btn btn-lg btn-primary" type="submit" id="inputTwo" value="Could you repeat that"><br><br>
          <input class="btn btn-lg btn-danger" type="submit" id="inputThree" value="HELP!">
        </form>
        <!-- <?php

        // inputOne Form
        echo form_open('index.php/lecpas/buttons/');
          $inputOne = array(
            'type' => 'submit',
            'name' => 'inputOne',
            'class' => 'btn btn-success btn-lg',
            'value' => 'I did not understand that'
            );
          echo form_submit($inputOne) . "<br>" . "<br>";

          // inputTwo Form
            $inputTwo = array(
              'type' => 'submit',
              'name' => 'inputTwo',
              'class' => 'btn btn-primary btn-lg',
              'value' => 'Could you repeat that'
              );
            echo form_submit($inputTwo)  . "<br>" . "<br>";

            // inputThree Form
            $inputThree = array (
              'type' => 'submit',
              'name' => 'inputThree',
              'class' => 'btn btn-danger btn-lg',
              'value' => 'HELP!'
            );
            echo form_submit($inputThree);
            echo form_close();
          ?> -->
      </center>
    </div>
