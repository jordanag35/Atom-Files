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

 <html>
 <head>
   <title>After Hours</title>
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
         <a href="Messages.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
           <button class="fa fa-envelope w3-xxlarge"></button>
           <p>MESSAGES</p>
         </a>
       </div>
       </nav>

       <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Forum</title>
       <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
   </head>

   <body>
       <header>

           <!--SearchBox Section-->
           <div class="search-box">
               <div>
                   <select name="" id="">
                       <option value="Everything">Everything</option>
                       <option value="Titles">Titles</option>
                       <option value="Descriptions">Descriptions</option>
                   </select>
                   <input type="text" name="q" placeholder="search ...">
                   <button><i class="fa fa-search"></i></button>
               </div>
           </div>
       </header>
       <div class="container">
           <!--Navigation-->
           <div class="navigate">
               <span><a href="">My Classes</a></span>
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
                   <div class="status"><i class="fa fa-fire"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
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
               <div class="table-row">
                   <div class="status"><i class="fa fa-fire"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>

               <div class="table-row">
                   <div class="status"><i class="fa fa-fire"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>

               <div class="table-row">
                   <div class="status"><i class="fa fa-book"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>

               <div class="table-row">
                   <div class="status"><i class="fa fa-rocket"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>

               <div class="table-row">
                   <div class="status"><i class="fa fa-frown-o"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>


               <div class="table-row">
                   <div class="status"><i class="fa fa-fire"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>

               <div class="table-row">
                   <div class="status"><i class="fa fa-fire"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>

               <div class="table-row">
                   <div class="status"><i class="fa fa-lock"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>

               <div class="table-row">
                   <div class="status"><i class="fa fa-fire"></i></div>
                   <div class="subjects">
                       <a href="">Is learning Python on 2021 worth it?</a>
                       <br>
                       <span>Started by <b><a href="">User</a></b> .</span>
                   </div>
                   <div class="replies">
                       2 replies <br> 125 views
                   </div>

                   <div class="last-reply">
                       Oct 12 2021
                       <br>By <b><a href="">User</a></b>
                   </div>
               </div>
               <!--ends here-->
           </div>
           <!--Pagination starts-->
               <div class="pagination">
                   pages: <a href="">1</a><a href="">2</a><a href="">3</a>
               </div>
           <!--pagination ends-->
       </div>


   </body>
   </html>