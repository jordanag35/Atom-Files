<?php

//session_start();
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    //Somethin was posted
  $title =  $_POST['title'];
  $crn =  $_POST['crn'];
  $section = $_POST['section'];
  $course_number = $_POST['course_number'];
  $professor = $_POST['professor'];
  //$forum_description = $_POST['forum_description'];


  //if(!empty($title) && !empty($crn) && !empty($section) && !empty($course_number) && !empty($professor) && !is_numeric($crn) && !is_numeric($section))
  //{

      //save to database
      $query = "insert into classes (crn,section,course_number,title,professor) values ('$crn','$section','$course_number','$title','$professor')";

      mysqli_query($con, $query);

      header("Location: forums.php");
      die;

  //}else
  //{
  //    echo "Please enter some valid information!";
  //}

}


?>
<!DOCTYPE html>
<html>
<head>
   <title>Create Class</title>
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
       <a href="index.php" class="w3-bar-home w3-button" style="width:25% !important">My Classes</a>
       <a href= "myClasses.php"class="w3-bar-user w3-button" style="width:25% !important">Create Class</a>


     </div>
   </div>


<style>

Body {

  font-family: Calibri, Helvetica, sans-serif;
  color: white;
  background-color: black;
}
.button1 {
       background-color: black;
       width: 100%;
        color: white;
        padding: 15px;
        margin: 10px 0px;
        border: none;
        cursor: pointer;
         }


 form {
        background-color: #111314;
        border: 3px solid black;

        button
    }
 input[type=text], textarea {
   font-family: Calibri, Helvetica, sans-serif;
        width: 90%;
        margin: 8px 0;
        margin-left: 40px;
        padding: 12px 20px;
        display: inline-block;
        border: 2px solid black;
        box-sizing: border-box;
    }

.button2{
 text-align: center;
 color: yellow;
}

 .container {
   margin-top: -20px;
   margin-left: 500px;
   margin-right: 500px;
   padding: 25px;
   background-color: #292B2E;
    }

</style>
</head>
<body>
    <center> <img src="Afterhours.png" alt="Afterhours" class="w3-image" width="200" height="200"></center>

        <div class="container">
          <form method="post">
            <input type="text" placeholder="Class Name" name="title"><br><br>
            <input type="text" placeholder="CRN Number" name="crn"><br><br>
            <input type="text" placeholder="Section Number" name="section"><br><br>
            <input type="text" placeholder="Course Number " name="course_number"><br><br>
            <input type="text" placeholder="Professor " name="professor"><br><br>
            <div class="button2">
            <input id="button2" type="submit" value="Create"><br><br>
            </div>
  </div>

</body>
</html>
