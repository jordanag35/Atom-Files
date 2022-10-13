<?php
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        //Somethin was posted
      $user_name =  $_POST['user_name'];
      $password =  $_POST['password'];

      if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
      {

          //save to database
          $user_id = random_num(20);
          $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

          mysqli_query($con, $query);

          header("Location: login.php");
          die;

      }else
      {
          echo "Please enter some valid information!";
      }

    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Signup</title>

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
  input[type=text], input[type=password] {
         width: 100%;
         margin: 8px 0;
         padding: 12px 20px;
         display: inline-block;
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
         padding: 25px;
         background-color: gray;
     }
 </style>
 </head>
 <body>
     <center> <img src="Afterhours.png" alt="boy" class="w3-image" width="125" height="125"></center>

         <div class="container">
           <form method="post">
             <input type="text" placeholder="Email" name="user_name"><br><br>
             <input type="text" placeholder="Password" name="password"><br><br>

             <input id="Button" type="submit" value="Sign Up"><br><br>





              ALready have an account? <a href="login.php"> Login </a>
              </form>
   </div>

 </body>
 </html>
