<?php
session_start();

  $_SESSION;

  include("connection.php");
  include("functions.php");

	

?>

<!DOCTYPE html>
<html>
  <html>
<head>
<
<title> Login Page </title>

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
    <form>
        <div class="container">
          <form action="index.php">
            <input type="text" placeholder="Email" name="username">
            <input type="text" placeholder="Password" name="psw">
            <button type="submit">Login</button>





             New User? <a href="signup.php"> Sign Up </a>
             </form>
  </div>
</div>

</body>
</html>

</html>
