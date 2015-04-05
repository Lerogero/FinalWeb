
    <section id="login">
        <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <div class="form-wrap">
                            <div class="form-group login-form">
                              <?php

                              //Username Form
                              echo form_open('index.php/login/view/');
                                $data = array(
                                  'type' => 'username',
                                  'name' => 'username',
                                  'id' => 'username',
                                  'class' => 'form-control',
                                  'placeholder' => 'Username',
                                  'value' => set_value('username'),
                                  'autofocus' => 'autofocus');
                                echo form_input($data) . "<br>";

                                // Password Form
                                  $data = array(
                                    'type' => 'password',
                                    'name' => 'password',
                                    'id' => 'password',
                                    'class' => 'form-control',
                                    'placeholder' => 'Password');
                                  echo form_password($data)  . "<br>";

                                  // Submit Form
                                  $data = array (
                                    'type' => 'submit',
                                    'name' => 'login',
                                    'id' => 'btn-login',
                                    'class' => 'btn btn-custom btn-lg btn-block',
                                    'value' => 'Log in'
                                  );
                                  echo form_submit($data);
                                  echo form_close();
                                  echo validation_errors('<p class="error">');
                                ?>
                                <p class="error"> <?php if (!empty ($error)) { echo $error; }?></p>
                  </div>
            </div>
          </div>
        </div>
    </section>
