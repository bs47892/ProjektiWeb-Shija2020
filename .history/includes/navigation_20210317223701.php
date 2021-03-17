          <header class="header">
              <div class="container">
                  <div class="logo">
                      <img src="images/logo-png.png" alt="llogo" width="110" height="125" />
                  </div>
                  <nav>
                      <ul>
                          <li><a href="index.php" class="underline">Ballina</a></li>
                          <li><a href="RrethNesh.php" class="underline">Rreth Nesh</a></li>
                          <li><a href="menu.php" class="underline">Menu</a></li>
                          <li><a href="kontakti.php" class="underline">Kontakti</a></li>
                          <li><a href="blog.php" class="underline">Blogu</a></li>
                      </ul>
                  </nav>
                  <?php
                  if(isset($_SESSION['user_id'])){
                      ?>
                  <li><a href="logout.php" class="rightlog">Logout</a></li>
                  <?php
                  }else{
                      ?>
                      <li class="rightlog"><a href="login.php" >Login</a>/<a href="signup.php">Sign Up</a></li>
                      <?php
                  }
                  ?>


              </div>
          </header>