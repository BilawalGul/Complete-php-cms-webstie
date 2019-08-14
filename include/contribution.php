              <b>Contribution</b><br>
              <small>⇩</small>
              <div class="row">
                <?php
                $query=mysqli_query($connection , "SELECT * FROM profile WHERE user_role='admin'");
                while ($row=mysqli_fetch_array($query)) {
                  $image=$row['image'];
                  $username=$row['user_name'];
                  $skills=$row['skilles'];
                  $def_username=$row['default_username'];
                ?>
                <div class="col-lg-3 cold-md-3 col-centered">
                  <div id="col-con" class="center-block">
                    <div id="contribution-background-image">
                      <img src="images/<?php echo $image;?>" alt="contribution-image" class="img-fluid"><br>
                      <b id="b"><?php echo ucwords($username);?></b>
                      <p><?php echo $skills;?></p>
                      <a href="profile?/=<?php echo $def_username;?>">
                        <button type="submit" class="btn btn-outline-success">Follow</button>
                      </a>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>