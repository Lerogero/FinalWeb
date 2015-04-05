
    <section id="login">
        <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <div class="form-wrap">
                        <form role="form"  method="post" id="	login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="lecpas" class="sr-only">Lecture Password</label>
                                <input type="text" name="text" id="text" class="form-control" placeholder="Lecture Password" autofocus>
                                </div>
                            <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Access">
                        </form>
                        <form action="<?php echo base_url('index.php/logout/view');?>">
                          <input type="submit"  id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log out">
                        </form>
                  </div>
            </div>
          </div>
        </div>
