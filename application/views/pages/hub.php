<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?> Page</title>
    <link href="<?php echo base_url('application/views/css/bootstrap.css');?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1> Lecture Hub</h1>
      <ul>
        <li>Student ID</li>
        <li>Student Name</li>
        <li>Lecture ID</li>
        <li>Lecture Name</li>
        <li>Duration</li>
        <li>Total Lectures</li>
      </ul>
      <section id="login">
      <form role="form" method="post" id="create-lecture" autocomplete="off">
      <input type="button" id="create-lecture" class="btn btn-custom btn-lg btn-block" value="Create Lecture">
    </section>
    </div>
    <script src="<?php echo site_url('application/views/js/bootstrap.min.js')?>"></script>
  </body>
</html>
