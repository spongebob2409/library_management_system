<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>

  <title>Change Password</title>
    <style type="text/css">
      body
      {
        background-color: #e9ca95;
        background-image: url("images/6.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      .wrapper
      {
        width: 500px;
        height: 300px;
        margin: 100px auto;
        margin-top: 230px;
        margin-right: 150px;
        background-color: whitesmoke;
        opacity: .8;
        color: darkblue;
        padding: 5px 15px ;
        
      }
      .btn-default
       {
        color: #333;
        background-color: #5159cc;
        border-color: #000;
       }
        .navbar-inverse 
       {
         background-color: #5d2b07;
       }
   </style>
</head>
<body>
    <div class="wrapper">

       <div style="text-align: center;">
         <h1 style="color: darkblue;text-align: center; font-size: 35px; font-family: bold;"> Forgot Password?</h1>
       </div>
      
       <form action="" method="post">
         <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
         <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
         <input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
         <button type="submit" name="submit" style="color: whitesmoke;" class="btn btn-default">Confirm New Password</button>
         
       </form>
   </div>
   <?php
     if(isset($_POST['submit']))
     {
       if(mysqli_query($db,"UPDATE admin SET password='$_POST[password]' WHERE username='$_POST[username]' AND email='$_POST[email]';"))
       {
         ?>
          <script type="text/javascript">
            alert("Your Password has been changed successfully")
          </script>
         <?php 
       }
     }
   ?>
</body>
</html>