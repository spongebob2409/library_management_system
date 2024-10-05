<?php
  include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Book Entry</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
<header style="height: 90px;">
  
<div class="logo">
      <h1 style="color: white; font-size: 30px;word-spacing: 10px; line-height: 60px;margin-top: 10px;">The book adding section</h1>
       <nav>
        <ul>
          <li><a href="Books.php">GO BACK</a></li>
        </ul>
      </nav>
    </div>
</header>

<section>
  <div class="reg_img2">

    <div class="box2">
        <h1 style="text-align: center; font-size: 23px;font-family: Lucida Console;">Hello there!</h1><br>
        <h1 style="text-align: center; font-size: 45px;">ADD YOUR BOOKS</h1><br>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">
          <input class="form-control" type="text" name="BookID" placeholder="BookID" required=""> 
          <input class="form-control" type="text" name="Title" placeholder="Title" required=""> 
          <input class="form-control" type="text" name="AuthorID" placeholder="AuthorID" required=""> 
          <input class="form-control" type="text" name="Genre" placeholder="Genre" required=""> 
          <input class="form-control" type="text" name="ISBN" placeholder="ISBN" required="">
          <input class="form-control" type="text" name="Publisher_Name" placeholder="Publisher_Name" required="">
          <input class="form-control" type="text" name="No_of_copies" placeholder="No_of_copies" required=""><br>
          <input class="btn btn-default" type="submit" name="submit" value="Add" style="color: black; width: 150px; height: 40px"> </div>
      </form>
    </div>
  </div>
</section>

     <?php  

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT BookID from `books`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['BookID']==$_POST['BookID'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `books` VALUES('$_POST[BookID]', '$_POST[Title]', '$_POST[AuthorID]', '$_POST[Genre]', '$_POST[ISBN]', '$_POST[Publisher_Name]', '$_POST[No_of_copies]');");
        ?>
          <script type="text/javascript">
           alert("Added successfully");
          </script>
        <?php  
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The bookname already exist.");
            </script>
          <?php

        }
         }

    ?>

</body>
</html>