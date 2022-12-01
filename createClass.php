<?php

session_start();












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
   body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
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
     <a href="Myclasses.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
       <button class="fa fa-user w3-xxlarge"></button>
       <p>MY CLASSES</p>
     </a>
   </div>
     <a href="createClass.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
       <button class="fa fa-plus w3-xxlarge"></button>
       <p>Create Class</p>
     </a>
   </div>
   </nav>

   <!-- Navbar on small screens (Hidden on medium and large screens) -->
   <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
     <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
       <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
       <a href="Myclasses.php" class="w3-bar-item w3-button" style="width:25% !important">My Classes</a>
       <a href= "Messages.php"class="w3-bar-item w3-button" style="width:25% !important">Messages</a>
       <a href= "createClass.php"class="w3-bar-item w3-button" style="width:25% !important">Messages</a>
     </div>
   </div>
<style>
Body {

  font-family: Calibri, Helvetica, sans-serif;
  color: white;
  background-color: black;
}
button {
       background-color: black;
       width: 100%;
        color: white;
        padding: 15px;
        margin: 10px 0px;
        border: none;
        cursor: pointer;
         }
 form {
        border: 3px solid #f1f1f1;
    }
 input[type=text], textarea {
   font-family: Calibri, Helvetica, sans-serif;
        width: 100%;
        margin: 8px 0;
        padding: 12px 20px;
        display: inline-block;
        border: 2px solid black;
        box-sizing: border-box;
    }
    input[type=description] {

      width: 100%;
      height: 200px;
      padding: 12px 20px;
      border: 2px solid black;
      box-sizing: border-box;

    }
 button:hover {
        opacity: 0.7;
    }
  .cancelbtn {
        width: auto;
        padding: 10px 18px;
        margin: 10px 5px;
    }


 .container {
   margin-left: 500px;
   margin-right: 500px;
        padding: 25px;
        background-color: gray;
    }
</style>
</head>
<body>
    <center> <img src="Afterhours.png" alt="Afterhours" class="w3-image" width="125" height="125"></center>

        <div class="container">
          <form method="post">
            <input type="text" placeholder="Class Name" name="title"><br><br>
            <input type="text" placeholder="crn number" name="crn"><br><br>
            <input type="text" placeholder="section number" name="section"><br><br>
            <textarea id="text" name"forum_description" placeholder="Give breif description of the class..." style="height:200px"></textarea>


            <input id="Button" type="submit" value="Create"><br><br>





             New User? <a href="login.php"> Sign Up </a>
             </form>
  </div>

</body>
</html>
