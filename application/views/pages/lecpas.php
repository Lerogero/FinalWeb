
    <section id="login">
        <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <div class="form-wrap">
                        <?php

                        echo form_open('index.php/lecpas/view/');

                          // Password Form
                            $data = array(
                              'type' => 'text',
                              'name' => 'password',
                              'id' => 'password',
                              'class' => 'form-control',
                              'placeholder' => 'Lecture Password');
                              echo form_input($data) . "<br>";

                            // Submit Form
                            $data = array (
                              'type' => 'submit',
                              'name' => 'login',
                              'id' => 'btn-login',
                              'class' => 'btn btn-custom btn-lg btn-block',
                              'value' => 'Access'
                            );
                            echo form_submit($data);
                            echo form_close();
                            echo validation_errors('<p class="error">');
                          ?>
                          <p class="error"> <?php if (!empty ($error)) { echo $error; }?></p>
                        <form action="<?php echo base_url('index.php/logout/view');?>">
                          <input type="submit"  id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log out">
                        </form>
                  </div>
            </div>
          </div>
        </div>
