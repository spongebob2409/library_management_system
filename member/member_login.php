<?php
  include "connection.php";
  session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Member Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <style type="text/css">
     section
     {
     	margin-top: -90px;

     }
   </style>

</head> 
<body>

<nav class="navbar navbar-inverse">
	<div class="logo">
			<img src="images/9.png" width="55" height="35" align="left">
			
		</div>
	<div class="container-fluid">
        <div class="navbar-header">
			<a style="color: blueviolet; font-size:30px; word-spacing: 10px; font-family:Optima; line-height:10px ;" class="navbar-brand active">&nbspREAD BOOKS CHANGE THE WORLD</a>
		</div>				

				<ul class="nav navbar-nav navbar-right">
				  <li><a href="Projectwork.php"><span class="glyphicon glyphicon-home"> HOME</span></a></li>
				  <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN-UP</span></a></li>
				  <li><a href="aboutus.php"><span class="glyphicon glyphicon-paperclip">ABOUT-US</span></a> </li>
				</ul>
	</div>
</nav>

<section>
	<div class="log_img">
	<br><br><br>
	<div class="box1">
	<h1 style="color: blueviolet;text-align: center; font-size: 35px; font-family: Courier;"> Welcome to the Library!</h1>
	<h1 style="color: blueviolet; text-align: center; font-size: 25px; font-family: Courier;">Member Login</h1>
	<form name="Login" action="" method="post">
	
		<div class="login">
		<input class="form-control" type="text" name="username" placeholder="Enter username" required=""> <br>
		<input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
		<input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black ;width: 364px;"> </div>
	</form>
	<p style="color: white;">
		<br>
		&nbsp &nbsp &nbsp<a style="color: whitesmoke;" href="update_pass.php">Forgot Password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<a style="color: floralwhite;" href="registration.php">Create New Account </a>
	</p>

	</div>
	
</section>
 
  <?php
     if(isset($_POST['submit']))
     {
        $count=0;
        $res=mysqli_query($db,"SELECT * FROM `registration` WHERE username='$_POST[username]' && password='$_POST[password]';");
        
        $row= mysqli_fetch_assoc($res);       
 
        $count=mysqli_num_rows($res);

        if($count==0)
        { 
          ?>
            <div class="alert alert-danger" style="width: 700px; margin-left: 400px; background-color: #de1313; margin-top: 100px; color: white;">
            	<strong style="margin-left: 180px;">The username and password does not match</strong>
            </div>
          <?php
        }
        else
        {
        	/*-------------if username and pass match---------*/

        	$_SESSION['login_user'] = $_POST['username'];
        	$_SESSION['pic']=$row['pic'];
        	
        	?>
        	<script type="text/javascript">
        		window.location="Projectwork.php"
        	</script>
        	<?php

        }
     }
    ?>

</body>
</html>