<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	  <link rel="stylesheet" type="text/css" href="style.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>

	    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a href="admin_panel_home.php" class="navbar-brand active">ADMIN CONTROL PANEL</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="Projectwork.php">HOME</a></li>
            <li><a href="Books.php">BOOKS</a></li>
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {
          ?>
              <ul class="nav navbar-nav">

                <li> <a href="profile.php">MY_PROFILE</a> </li>
                
                <li><a href="member.php">
                    MEMBER-INFORMATION     
                  </a> </li>
                <li><a href="addbook.php">
                    ADD-NEW-BOOK     
                  </a> </li>
                <li><a href="deletebooks.php">
                    DELETE-BOOK     
                 </a> </li>
                <li><a href="updatebooks.php">
                    UPDATE_BOOK_INFO     
                </a> </li>
              </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="">
                    <div style="color: white">
                      <?php
                         echo  "<img class='img-circle profile_img' height=40 width=40 src='images/".$_SESSION['pic']." '>";

                          echo " ".$_SESSION['login_user'];
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                  
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
              </ul>
                <?php
            }
          ?>

          

      </div>
    </nav>

</body>
</html>