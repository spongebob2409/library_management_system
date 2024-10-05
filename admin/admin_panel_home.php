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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylebooks.css">

    <style type="text/css">
    /* For side navigation bar */

        body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  margin-top: 50px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#5d2b07;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/* Side navigation ends */      

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
    background-image: url('images/hack.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    /* Add any other styles you need */
}


    </style>
    <style type="text/css">
        .srch
        {
            padding-left: 1300px;
        }
        .wrapper
        {
        width: 400px;
        height: 140px;
        margin: 100px auto;
        margin-top: 170px;
        margin-right: 250px;
        background-color: black;
        opacity: .9;
        color: #5d2b07;
        padding: 5px 15px ;
        
        }
    </style>
</head>
<body>
    <!--________________________side navbar___________________________________-->
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="info_update_mem.php">Update Member info</a>
  <a href="#">Staff info</a>
  <a href="#">Author info</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <span style="font-size:30px; color:white; cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

  <div class="wrapper">

       <div style="text-align: center;">
         <h1 style="color: darkred;text-align: center; font-size: 50px; font-family: Lucida Console;"> WELCOME ADMIN</h1>
       </div>
 
</body>
</html>