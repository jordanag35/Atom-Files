<?php
    session_start();

    include("connections1.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        //Somethin was posted
      $user_name =  $_POST['user_name'];
      $password =  $_POST['password'];

      if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
      {

          //read to database

          $query = "select * from users where user_name = '$user_name' limit 1 ";

          $result = mysqli_query($con, $query);

          if($result)
          {
            if($result && mysqli_num_rows($result) > 0)
            {

              $user_data = mysqli_fetch_assoc($result);

              if($user_data['password'] === $password)
              {
                if (isset($_SESSION['user_id'])) {
                  unset($_SESSION['user_id']);
                }
                $_SESSION['user_id'] = $user_data['id'];
                header("Location: index.php");
                die;

              }

            }

          }

            echo "wrong username or password!";

      }else
      {
          echo "wrong username or password";
      }

    }



?>

<!DOCTYPE html>
<html>
<head>
   <title>Signup</title>

<style>
Body {
  margin-left: 500px;
  margin-right: 500px;
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
    <center> <img src="Afterhours.png" alt="Afterhours" class="w3-image" width="125" height="125"></center>

        <div class="container">
          <form method="post">
            <input type="text" placeholder="Email" name="user_name"><br><br>
            <input type="text" placeholder="Password" name="password"><br><br>

            <input id="Button" type="submit" value="Login"><br><br>





             New User? <a href="signup.php"> Sign Up </a>
             </form>
  </div>

</body>
</html>
