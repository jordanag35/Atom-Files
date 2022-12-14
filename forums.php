<?php

session_start();

    include("connections1.php");
    include("functions.php");

    if (isset($_SESSION['user_id'])) {
      $user_id = $_SESSION['user_id'];
    } else {
      header("location: login.php");
    }

    $is_admin_query = "select u.is_admin from users u where u.id = '$user_id'";
    $admin_result = mysqli_query($con, $is_admin_query);
    $admin_data = mysqli_fetch_assoc($admin_result);
    $is_admin = $admin_data['is_admin'];

    $class_id = $_GET['class_id'];

    $query = "select * from classes c where c.class_id = '$class_id'";
    $result = mysqli_query($con,$query);
    $class_data = mysqli_fetch_assoc($result);

    $course_number = $class_data['course_number'];
    $title = $class_data['title'];
    $section = $class_data['section'];

    if (isset($_POST['submit'])) {
        $comment = $_POST['comment'];
        $query = "insert into posts (forum_id, user_id, content) values ('$class_id', '$user_id', '$comment')";
        mysqli_query($con,$query);
        $query = "update classes set posts = posts + 1 where class_id = '$class_id'";
        mysqli_query($con,$query);
    }


    $query = "select * from posts p where p.forum_id = '$class_id' order by timestamp asc";
    $posts_data = mysqli_query($con,$query);










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
<?php if ($is_admin == 1) { ?>
  <a href="createClass.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <button class="fa fa-plus w3-xxlarge"></button>
    <p>Create Class</p>
  </a>
  <?php } ?>
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

<header>
<center> <img src="Afterhours.png" alt="Afterhours" class="w3-image" width="400" height="400"></center>
</header>

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
<div class="container">
  <!--Comment Button-->
  <center><div class="search-box">
      <center><button onclick="showComment()">Post</button></center>
  </div></center>
  <!--Comment Area-->
  <div class="comment-area hide" id="comment-area">
    <form method="post" action="">
      <textarea name="comment" id="" placeholder="comment here ... "></textarea>
      <input type="submit" value="submit" name="submit"></input>
    </form>
  </div>
</div>
    <div class="container">
        <!--Topic Section-->
        <div class="topic-container">
            <!--Original thread-->
            <div class="subforum-title center">
                <center><h3><div class="authors"><?php echo $course_number?> | <?php echo $title?> | Section <?php echo $section?></div></h3></center>
            </div>
            <?php
            if (mysqli_num_rows($posts_data) > 0) {
              while ($post = mysqli_fetch_assoc($posts_data)) {
                $user_id = $post['user_id'];
                $query = "select * from users where id = '$user_id'";
                $user_results = mysqli_query($con,$query);
                $user = mysqli_fetch_assoc($user_results);
                $username = $user['user_name'];
                $is_ta = $user['is_admin'];
                $post_content = $post['content'];
                $role = "Student";
                if ($is_ta == 1) {
                  $role = "Teacher Assistant";
                }
            ?>
            <!-- start loop here -->
            <div class="body">
                <div class="authors">
                    <div class="username"><a href=""><?php echo $username ?></a></div>
                    <div><?php echo $role ?></div>
                    <img src="UMD.png" alt="Subscriber" width="130" height="130">
                </div>
                <div class="content">
                    <pre><?php echo $post_content ?></pre>
                </div>
            </div>
            <!-- end loop -->
          <?php } } ?>
        </div>
    <script src="main.js"></script>
</body>
</html>















</body>
</html>
