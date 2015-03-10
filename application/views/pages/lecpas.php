<html>
  <head>
    <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lecture Access Page</title>
        <link href="<?php echo base_url('application/views/css/bootstrap.css');?>" rel="stylesheet">
  </head>
  <body>
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
                  </div>
            </div>
          </div>
        </div>
    </section>
    <script src="<?php echo site_url('application/views/js/bootstrap.min.js')?>"></script>
  </body>
</html>
