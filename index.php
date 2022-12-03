<?php
session_start();

  $_SESSION;

  //include("connection.php");
  //include("functions.php");

  //$user_data = check_login($con);





?>

<!DOCTYPE html>
<html>
<head>
<title>After Hours</title>
<link rel="icon" type="image/x-icon" href="Afterhours.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif, Calibri, Helvetica}

button {
    font-family: Calibri, Helvetica, sans-serif;
       background-color: black;
       width: 100%;
        color: white;
        padding: 15px;
        margin: 10px 0px;
        border: none;
        cursor: pointer;
         }
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-black">



<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="UMD.png" style="width:100%">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <button class="fa fa-home w3-xxlarge"></button>
    <p>HOME</p>
  </a>
  <a href="myClasses.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <button class="fa fa-user w3-xxlarge"></button>
    <p>MY CLASSES</p>
  </a>
</div>
  <a href="createClass.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <button class="fa fa-plus w3-xxlarge"></button>
    <p>CREATE CLASS</p>
  </a>
</div>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="myClasses.php" class="w3-bar-item w3-button" style="width:25% !important">My Classes</a>
    <a href= "createClass.php"class="w3-bar-item w3-button" style="width:25% !important">Create Class</a>
  </div>
</div>


<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <img src="Afterhours.png" alt="Afterhours" class="w3-image" width="992" height="950">
  </header>

  <center>
  <div class="search-box">
      <div>
          <select name="" id="">
            <option value="Everything">Everything</option>
            <option value="title">Class Title</option>
            <option value="section">Section</option>
            <option value="course_number">Course #</option>
            <option value="professor">Professor</option>
          </select>
          <input type="text" name="q" placeholder="search ...">
          <button><i class="fa fa-search"></i></button>
      </div>
  </div>
</center>

  </header>
  <div class="container">
  <div class="subforum">
      <div class="subforum-title">
          <h1>UM-Dearbon Classes</h1>
      </div>
      <div class="subforum-row">
          <div class="subforum-icon subforum-column center">
              <button><i class="fa fa-check center w3-hover-yellow"></i></button>
          </div>
          <div class="subforum-description subforum-column">
              <h4><a href="#">CIS 435</a></h4>
              <p>Web Technology</p>
              <p>Section: 001</p>
          </div>
          <div class="subforum-stats subforum-column center">
              <h4><span>24 subscribers</span></h4>
          </div>
          <div class="subforum-info subforum-column center">
              <h4><a href="">Teacher Name</a><h4>
          </div>
      </div>
  </div>



  </div>
  <!---->
  </div>

 <!-- Forum Info
  <div class="forum-info">
  <div class="chart">
      MyForum - Stats &nbsp;<i class="fa fa-bar-chart"></i>
  </div>
  <span><u>5,369</u> Posts in <u>48</u> Topics by <u>8,124</u> Members.</span><br>
  <span>Latest post: <b><a href="">Random post</a></b> on Dec 15 2021 By <a href="">RandomUser</a></span>.<br>
  <span>Check <a href="">the latest posts</a> .</span><br>
  </div>

  -->
  </body>
  </html>


<!-- END PAGE CONTENT -->
</div>

<!--correct index.php file -->
<!--correct index.php file -->
