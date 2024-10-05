<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>

  <title>Update member info</title>
    <style type="text/css">
      body
      {
        background-color: white;
        background-image: url('images/pro.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      .navbar-inverse
        {
          background-color:#5d2b07 ;
        }
      .btn-default
       {
        color: #333;
        background-color: #5d2b07;
        border-color: #000;
       }
       input[type=text]
        {
          width: 30%;
          margin-left: 540px;
          margin-top: 10px;
          box-sizing: border-box;
          border: 2px solid black;
          border-radius: 4px;
}
   </style>
</head>
<body>

    <div >

       <div style="text-align: center;">
         <h1 style="color: #5d2b07;text-align: center; font-size: 35px; font-family: bold;"> Update Member Info</h1><br>
       </div>
   </div>
      
       <form style="text-align: center;" name="Update Member Info" action="" method="post">
         <input type="text" name="ID" class="form-control"  placeholder="Member ID to Update" required=""><br>
         <input type="text" name="first" class="form-control" placeholder="First name" required=""><br>
         <input type="text" name="last" class="form-control" placeholder="Last name" required=""><br>
         <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
         <input type="text" name="contact" class="form-control" placeholder="Contact Info" required=""><br>
         <button type="submit" name="submit" style="color: whitesmoke;" class="btn btn-default">Update New Info</button>
         
       </form>
    <div >

       <div style="text-align: center;">
         <h1 style="color: #5d2b07;text-align: center; font-size: 35px; font-family: bold;"> Delete Member Info</h1>
       </div>
   </div>
            <form style="text-align: center;" name="Delete Member Info" action="" method="post">
                
                    <input class="form-control" type="text" name="memid" placeholder="Member ID to Delete" required=""> <br>
                    <button type="submit" name="submit1" style="color: whitesmoke;" class="btn btn-default">Delete Info</button>
            </form>

    <?php
     if(isset($_POST['submit']))
     {
       if(mysqli_query($db,"UPDATE registration SET first='$_POST[first]',last='$_POST[last]',email='$_POST[email]',contact='$_POST[contact]' WHERE ID='$_POST[ID]';"))
        {
         ?>
          <script type="text/javascript">
            alert("User information has been changed successfully")
            window.location="books.php";
          </script>
         <?php 
        }
     }
     if (isset($_POST['submit1'])) 
     {
     $memId = $_POST['memid'];

     $sql = "DELETE FROM registration WHERE id = $memId";

// Perform the query
$result = mysqli_query($db, $sql);

// Check if the deletion was successful
if ($result) 
{
    echo "Record deleted successfully.";
} 
else
{
    echo "Error: " . mysqli_error($db);
}
 mysqli_close($db);    
}
   ?>
</body>
</html>
