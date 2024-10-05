<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .alert {
      padding: 10px;
      margin-top: 10px;
      font-size: 14px;
    }
     body
    {
        background-color: white;
        background-image: url('images/5.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    section 
    {
    height: 0px;
    width: 1540px;
    background-color: white;
    }
    .box2 
    {
    height: 600px;
    }
    header
    {
    height: 140px;
    width: 1540px;
    background-color: black;
    margin-top: 0px;
}
  </style>
</head>
<body>
<header style="height: 70px; color: black;">
  <div class="logo">
    <h1 style="color: white; font-size: 20px;word-spacing: 10px; line-height: 60px;margin-top: 20px;">Our Registration Page</h1>
    <nav>
      <ul>
        <li><a href="Projectwork.php">GO BACK</a></li>
      </ul>
    </nav>
  </div>
</header>

<section>
  <div >
    <div class="box2">
      <h1 style="text-align: center; font-size: 23px;font-family: Lucida Console;">New here?  REGISTER!!!</h1>
      <h1 style="text-align: center; font-size: 15px;">User Registration Form</h1>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="ID" placeholder="ID" required=""><br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 40px"> </div>
      </form>
    </div>
  </div>
</section>

<?php  
if(isset($_POST['submit'])) {
  $first = $_POST['first'];
  $last = $_POST['last'];
  $username = $_POST['username'];
  $password = $_POST['password']; // Note: Password is not hashed
  $ID = $_POST['ID'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $countUsername = mysqli_num_rows(mysqli_query($db, "SELECT username FROM registration WHERE username = '$username'"));
  $countID = mysqli_num_rows(mysqli_query($db, "SELECT ID FROM registration WHERE ID = '$ID'"));

  if($countUsername == 0 && $countID == 0) 
  {
    mysqli_query($db,"INSERT INTO `registration` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[ID]', '$_POST[email]', '$_POST[contact]', '10.jpg');");

    echo '<div class="alert alert-success" role="alert">
          Registration successful!
        </div>';
  } 
  else 
  {
    echo '<div class="alert alert-danger" role="alert">
          The username or ID already exists.
        </div>';
  }
}
?>

</body>
</html>
