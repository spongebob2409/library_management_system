<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<style type="text/css">
		.wrapper
		{
			width: 500px;
			height: 590px;
			margin: 0 auto;
			background-color: #5d2b07;
			opacity: .8;

		}
		body
		{
			background-image: url('images/pro.jpg');
		}
		.navbar-inverse
        {
          background-color:#5d2b07 ;
        }
	</style>
</head>
<body>
	<div class="container">
		<form action="" method="post">
			<button class="btn btn-default" style="float: right; width:70px ;" name="submit1">EDIT</button>
			
		</form>
		<div class="wrapper" style=" color: whitesmoke;" >
			<?php
				 if(isset($_POST['submit1']))
				 {
				 		?>
				 		    <script type="text/javascript">
				 		    	window.location="edit.php"
				 		    </script>

				 		<?php
				 }
 			   $q=mysqli_query($db,"SELECT * FROM registration where username='$_SESSION[login_user]'");

			?>
			<h2 style="text-align: center; padding-top: 20px; font-family: Georgia ;" >Profile Information</h2>
			<?php
			   $row=mysqli_fetch_assoc($q);

			   echo "<div style='text-align: center' >
			   <img class='img-circle profile-img' height=120 width=120 src='images/".$_SESSION['pic']."'>
			   </div>";
			   
			?>
			<div  style="text-align: center; font-size: 20px;font-family: Georgia ;"><b>WELCOME </b>
			  <h4 style="font-size: 25px;">
				  <?php 
				  echo $_SESSION['login_user'];
 				  ?>
			  </h4>
			</div>
			<?php
			echo "<b>";
			  echo "<table class='table table-bordered' >";
			  echo "<tr>";
			    echo "<td>";
			       echo "<b> First Name: </b>";
			    echo "</td>";
			    echo "<td>";
			       echo $row['first'];
			    echo "</td>";
			  echo "</tr>";

              echo "<tr>";
                echo "<td>";
			       echo "<b> Last Name: </b>";
			    echo "</td>";
			    echo "<td>";
			       echo $row['last'];
			    echo "</td>";
              echo "</tr>";

              echo "<tr>";
                echo "<td>";
			       echo "<b> Username: </b>";
			    echo "</td>";
			    echo "<td>";
			       echo $row['username'];
			    echo "</td>";
              echo "</tr>";
           

           echo "<tr>";
                echo "<td>";
			       echo "<b> Password: </b>";
			    echo "</td>";
			    echo "<td>";
			       echo $row['password'];
			    echo "</td>";
              echo "</tr>";

              echo "<tr>";
                echo "<td>";
			       echo "<b> Email: </b>";
			    echo "</td>";
			    echo "<td>";
			       echo $row['email'];
			    echo "</td>";
              echo "</tr>";
              
              echo "<tr>";
                echo "<td>";
			       echo "<b> ID: </b>";
			    echo "</td>";
			    echo "<td>";
			       echo $row['ID'];
			    echo "</td>";
              echo "</tr>";
              
 			  echo "<tr>";
                echo "<td>";
			       echo "<b> Contact: </b>";
			    echo "</td>";
			    echo "<td>";
			       echo $row['contact'];
			    echo "</td>";
              echo "</tr>";

			  echo "<table>";
			  echo "</b>";
			?>
		</div>
	</div>
</body>
</html>