<?php
  include "connection.php";
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
    

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}

</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/9.png" width="80" height="70">
			<h1 style="color: white;">"Knowledge is strong,but supreme leader is stronger"</h1>
		</div>
		<?php 
		if(isset($_SESSION['login_user']))
		{?>
			<nav>
				<ul>
					<li><a href="Projectwork.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</nav>
			<?php
		}
		else
		{ 
			?>
			<nav>
				<ul>
					<li><a href="Projectwork.php">HOME</a></li>
					<li><a href="member_login.php">MEMBER-LOGIN</a></li>
					<li><a href="admin_login.php">ADMIN-LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
				</ul>
			</nav>


		<?php
	    }

		?>
			
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px; font-family: 'Pacifico', cursive;">Welcome to Bangladesh-North Korea Friendship library!!!</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">We open at: 09:00 a.m. </h1><br>
				<h1 style="text-align: center;font-size: 25px;">We close at at: 05:00 p.m. </h1><br>
			</div>
		</div>
		</section>
		
	</div>
	<?php
	  include "footer.php";
	?>

</body>
</html>