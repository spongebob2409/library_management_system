<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Member Information</title>
	<style type="text/css">
		.srch
		{
			padding-left: 1250px;
		}
		.navbar-inverse
        {
          background-color:#5d2b07 ;
        }
        body
        {
        background-image: url('images/56.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
       table {
       border-collapse: collapse;
       width: 100%;
       background-color: #f2f2f2; 
       color: #333; /* Set the text color for the entire table */
       }

       th, td {
         border: 1px solid #ddd;
         padding: 8px;
         text-align: center;
        }

       th {
          background-color: #8B4513; /* Set the background color for table headers  */
          color: white; /* Set the text color for table headers */
        } 
	</style>
</head>
<body>
	<!--__________________________search bar________________________-->

	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="Search a User" required="">
				<button style="background-color: #7c2b2a; color: white;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
		
	</div>

	<h2 style="color:white; ">Details of the Members :</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT first,last,username,ID,email,contact FROM `registration` where first like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No user found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #7c2b2a; color: white; '>";
				//Table header
				echo "<th>"; echo "First-Name";	echo "</th>";
				echo "<th>"; echo "Last-Name";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "ID";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['first']; echo "</td>";
				echo "<td>"; echo $row['last']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['ID']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($db,"SELECT first,last,username,ID,email,contact FROM `registration`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #7c2b2a; color: white;'>";
				//Table header
				echo "<th>"; echo "First-Name";	echo "</th>";
				echo "<th>"; echo "Last-Name";  echo "</th>";
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "ID";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['first']; echo "</td>";
				echo "<td>"; echo $row['last']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['ID']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}
		
	?>

</body>
</html>