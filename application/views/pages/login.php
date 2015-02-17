<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> Page</title>
    <link href="<?php echo base_url('application/views/css/bootstrap.css');?>" rel="stylesheet">
  </head>
  <body>
    <section id="login">
        <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <div class="form-wrap">
                        <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="username" class="sr-only">Username</label>
<<<<<<< HEAD
                                <input type="username" name="email" id="email" class="form-control" placeholder="Username" autofocus>
                              </div>
                              <div class="form-group">
=======
                                <input  type="username" name="email" id="email" class="form-control" placeholder="Username" autofocus>
                            </div>
                            <div class="form-group">
>>>>>>> origin/master
                                <label for="key" class="sr-only">Password</label>
                                <input type="password" name="key" id="key" class="form-control" placeholder="Password">
                            </div>
                            <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                        </form>
                  </div>
            </div>
          </div>
        </div>
    </section>
    <script src="<?php echo site_url('application/views/js/bootstrap.min.js')?>"></script>
  </body>
</html>
