<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>edit profile</title>
  <style type="text/css">
    .form-control
    {
      width: 300px;
      height: 40px;
    }
    .form1
    {
      padding-left: 620px;
    }
    body
    {
      background-image: url('images/pro.jpg');
    }
    .navbar-inverse
        {
          background-color:#5d2b07 ;
        }
    label
    {
      color:#5d2b07 ;
    }
  </style>
</head>
<body> 
  <h2 style="text-align: center; padding-top: 20px; font-family: Georgia ;" >EDIT INFORMATION</h2>

  <?php
    $sql = "SELECT * FROM admin WHERE username='$_SESSION[login_user]' ";
    $result = mysqli_query($db,$sql) or die (mysql_error());

    while ($row = mysqli_fetch_assoc($result))
    {
      $name=$row['name'];      
      $password=$row['password'];
      $email=$row['email'];
      $branchID=$row['branchID'];
      $contact=$row['contact'];
    }
  ?>
  <div class="profile_info" style="text-align: center;">
    <span style="color: black; font-size: 20px; font-family: Georgia ;">FOR</span> 
    <h4 style="color: black;  font-size: 20px; font-family: Georgia ;"><?php echo $_SESSION['login_user']; ?></h4>
  </div>

 <div class="form1">
  <form action="" method="post" enctype="multipart/form-data">

    <input class="form-control" type="file" name="file">

  <label><h4><b>Name :</b></h4></label>
    <input class="form-control" type="text" name="name" value="<?php echo $name;?>">
    <label><h4><b>Password :</b></h4></label>
    <input class="form-control" type="text" name="password" value="<?php echo $password ;?>">
    <label><h4><b>Email :</b></h4></label>
    <input class="form-control" type="text" name="email" value="<?php echo $email;?>">
    <label><h4><b>Phone_No :</b></h4></label>
    <input class="form-control" type="text" name="contact" value="<?php echo $contact;?>"><br>
    <div style="padding-left: 110px;">
      <button  class="btn btn-default" type="submit" name="submit" >Save</button>
    </div>
  </form>
</div>
  <?php

    if(isset($_POST['submit']))
    {

      move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

      $name=$_POST['name'];
      $password=$_POST['password'];
      $email=$_POST['email'];
      $contact=$_POST['contact'];
      $pic=$_FILES['file']['name'];
      

      $sql1= "UPDATE admin SET pic='$pic', name='$name', password='$password', email='$email', contact='$contact' WHERE username='".$_SESSION['login_user']."';";

      if (mysqli_query($db,$sql1))
       {
          ?>
             <script type="text/javascript">
               alert("Saved Successfully.");
               window.location="profile.php";
             </script>
          <?php 
       }
    }
  ?>

</body>
</html>