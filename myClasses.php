<?php

/*session_start();

try{

$connString = "mysql:host=localhost; dbname=login_db";
$user_name = "root";
$password = "";

$pdo = new PDO($connString, $user_name, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$user_id = $_POST['user_id'];

$query= "SELECT status FROM users WHERE user_id = :user_id";
$statement = $pdo->prepare($query);
$statement->bindValue(':user_id', $user_id);
$statement->execute();
$status = $statement->fetch();
$statement->closeCursor();



}catch (PDOException $e) {

  die($e->getMessage());

}*/



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
 <title>Button</title>
 <style>
 body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
 .w3-row-padding img {margin-bottom: 12px;}
 /* Set the width of the sidebar to 120px */
 .w3-sidebar {width: 120px;background: #222;margin-top: 0px;}
 /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
 #main {margin-left: 120px;}
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
   <a href="Myclasses.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
     <button class="fa fa-user w3-xxlarge"></button>
     <p>MY CLASSES</p>
   </a>
 </div>
   <a href="Messages.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
     <button class="fa fa-envelope w3-xxlarge"></button>
     <p>MESSAGES</p>
   </a>
 </div>
 </nav>

 <!-- Navbar on small screens (Hidden on medium and large screens) -->
 <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
   <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
     <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
     <a href="Myclasses.html" class="w3-bar-item w3-button" style="width:25% !important">My Classes</a>
     <a href= "Messages.html"class="w3-bar-item w3-button" style="width:25% !important">Messages</a>
   </div>
 </div>

 <!-- Page Content -->

           <!--Navigation-->
           <div class="navigate">
               <span>My Classes</span>
           </div>
           <!--Display posts table-->
           <div class="posts-table">
               <div class="table-head">
                   <div class="status">Status</div>
                   <div class="subjects">Subjects</div>
                   <div class="replies">Replies/Views</div>
                   <div class="last-reply">Last Reply</div>
               </div>
               <div class="table-row">
                   <div class="status"><i class="fa fa-check"></i></div>
                   <div class="subjects">
                       <a href="">CIS 435</a>
                       <p>Web Technology</P>
                       <p>Section: 001</p>
                       <br>
                       <span>Started by <b><a href="">TA Name</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>
               <!--starts here-->

           <!--Pagination starts-->
               <div class="pagination">
                   pages: <a href="">1</a><a href="">2</a><a href="">3</a>
               </div>
           <!--pagination ends-->
       </div>


   </body>
   </html>
