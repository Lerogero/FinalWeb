
    <div class="container">
      <h1> Lecture Hub</h1>
      <div class="pull-right">
        <input type="text" name="search" value="" placeholder="Search">
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Username</th>
            <th>Input One</th>
            <th>Input Two</th>
            <th>Input Three</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>stud1</td>
            <td>1</td>
            <td>5</td>
            <td>7</td>
          </tr>
          <tr>
            <td>stud2</td>
            <td>46</td>
            <td>12</td>
            <td>32</td>
          </tr>
          <tr>
            <td>stud3</td>
            <td>34</td>
            <td>23</td>
            <td>11</td>
          </tr>
          <?php foreach ($query->result_array() as $row): ?>
              <tr>
                  <td><?php echo $row['Username'];?></td>
                  <td><?php echo $row['inputOne'];?></td>
                  <td><?php echo $row['inputTwo'];?></td>
                  <td><?php echo $row['inputThree'];?></td>
              </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <section id="login">
        <center><?php echo "Welcome " . $user . " search for a user or start a lecture!"?></center>
      <form action="<?php echo base_url('index.php/hub/create');?>">
      <input type="submit" id="create-lecture" class="btn btn-custom btn-lg btn-block" value="Create Lecture">
    </form>
      <form action="<?php echo base_url('index.php/logout/view');?>">
        <input type="submit"  id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log out">
      </form>
    </section>
    </div>
