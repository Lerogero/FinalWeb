<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
    <div class="container">
      <center>
        <h1> Lecture Hub</h1>
      </center>
       <script type="text/javascript">
      $(window).load(function(){
      	$("#search").keyup(function() {
      	    var value = this.value;

      	    $("table").find("tr").each(function(index) {
      	        if (index === 0) return;
      	        var Username = $(this).find("td").first().text();
      	        $(this).toggle(Username.indexOf(value) !== -1);
      	    });
      	});

      	});

  </script>
      <div class="pull-right">
        <form  style="padding-bottom: 5px;"class="form-inline"method="get">
          <div  class="form-group">
            <label class="control-label">Search</label>
            <input  id="search" type="text" class="form-control" placeholder="Username">
          </div>
        </form>
      </div>
      <table  class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Username</th>
            <th>Input One</th>
            <th>Input Two</th>
            <th>Input Three</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach($query as $row): 
              ?>

              <tr>
                  <td><?php echo $row['Username'];?></td>
                  <td><?php echo $row['inputOne'];?></td>
                  <td><?php echo $row['inputTwo'];?></td>
                  <td><?php echo $row['inputThree'];?></td>
              </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <section style="padding-top: 50px; "id="login">
        <center><?php echo "Welcome " . $user . " search for a user or start a lecture!"?></center>
      <form action="<?php echo base_url('index.php/hub/create');?>">
      <input type="submit" id="create-lecture" class="btn btn-custom btn-lg btn-block" value="Create Lecture">
    </form>
      <form action="<?php echo base_url('index.php/logout/view');?>">
        <input type="submit"  id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log out">
      </form>
    </section>
    </div>
