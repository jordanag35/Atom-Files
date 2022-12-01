<?php

$dbhost = "141.215.80.154";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");

}

?>
//just adding for a push
