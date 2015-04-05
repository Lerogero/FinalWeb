
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
    </form>
      <form action="<?php echo base_url('index.php/logout/view');?>">
        <input type="submit"  id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log out">
      </form>
    </section>
    </div>
