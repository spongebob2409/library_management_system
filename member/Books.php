<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" type="text/css" href="stylebooks.css">
    <style type="text/css">
        
        .navbar-inverse
        {
          background-color:#5d2b07 ;
        }
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        
        /* Your existing styles */

        nav ul li a {
            color: brown; /* Set the font color to yellow */
            text-decoration: none; /* Remove underline if you don't want it */
        }
         body {
    background-image: url('images/73.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    /* Add any other styles you need */
}

table {
    border-collapse: collapse;
    width: 100%;
    background-color: #f2f2f2; /* Set the background color for the entire table */
    color: #333; /* Set the text color for the entire table */
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #8B4513; /* Set the background color for table headers */
    color: white; /* Set the text color for table headers */
}
h2 {
            color: white; /* Set the text color for the 'List of Books' heading */
        }
    </style>
    <style type="text/css">
        .srch
        {
            padding-left: 1300px;
        }
    </style>
</head>
<body>
    <!--________________________search bar___________________________________-->
    <div class="srch">
    <form class="navbar-form" method="post" name="form1">
        <div class="input-group">
            <input class="form-control" type="text" name="search" placeholder="Search books..." required="">
            <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-default" style="background-color: #8B4513;">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </div>
        </div>
    </form>
</div>
			
    <h2>Here's all the books we have:</h2>
    <?php
        if (isset($_POST['submit'])) {
        $search = mysqli_real_escape_string($db, $_POST['search']);
        $query = "SELECT * FROM books WHERE Title LIKE '%$search%' ";
        $result = mysqli_query($db, $query);

        if (!$result) {
            // Handle query error
            echo "Query Error: " . mysqli_error($db);
        } else {
            if (mysqli_num_rows($result) == 0) {
                echo "Sorry! No books found";
            } else {
                echo "<table>";
                echo "<tr>";
                echo "<th>BookID</th>";
                echo "<th>Title</th>";
                echo "<th>AuthorID</th>";
                echo "<th>Genre</th>";
                echo "<th>ISBN</th>";
                echo "<th>Publisher Name</th>";
                echo "<th>No. of Copies</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['BookID']}</td>";
                    echo "<td>{$row['Title']}</td>";
                    echo "<td>{$row['AuthorID']}</td>";
                    echo "<td>{$row['Genre']}</td>";
                    echo "<td>{$row['ISBN']}</td>";
                    echo "<td>{$row['Publisher_Name']}</td>";
                    echo "<td>{$row['No_of_copies']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    } else {
        $res = mysqli_query($db, "SELECT * FROM `books` ORDER BY `books`.`Title` ASC;");

        if (mysqli_num_rows($res) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>BookID</th>";
            echo "<th>Title</th>";
            echo "<th>AuthorID</th>";
            echo "<th>Genre</th>";
            echo "<th>ISBN</th>";
            echo "<th>Publisher Name</th>";
            echo "<th>No. of Copies</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>{$row['BookID']}</td>";
                echo "<td>{$row['Title']}</td>";
                echo "<td>{$row['AuthorID']}</td>";
                echo "<td>{$row['Genre']}</td>";
                echo "<td>{$row['ISBN']}</td>";
                echo "<td>{$row['Publisher_Name']}</td>";
                echo "<td>{$row['No_of_copies']}</td>";
                echo "</tr>";
            }

            echo "</table>";
        } 
        
        }
    ?>
    <nav>
				<ul>
					<li><a href="Projectwork.php">Done?Click here to go HOME</a></li>
				</ul>
			</nav>
</body>
</html>
