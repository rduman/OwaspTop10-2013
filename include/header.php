<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">OWASP TOP 10-2013</a>
        </div>
        <div class="collapse navbar-collapse">
            <p class="navbar-text pull-right">
          <?php session_start(); if($_SESSION['username']!="" and isset($_SESSION['username'])) echo "Logged in as ".$_SESSION["username"];?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
               <a href="logout.php" class="navbar-link"><?php session_start(); 
                                                          if(isset($_SESSION['username']) and $_SESSION['username']!="")
                                                              echo "Log out"; else echo "Not Logged In"; ?></a>
            </p>
        </div>
      </div>
    </div>