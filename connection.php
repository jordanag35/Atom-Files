<?php

$servername = "141.215.80.154";
$username = "group3";
$password = "5xYcM@ugnRv";
$dbname = "group3_db";

if(!$con = mysqli_connect($servername,$username,$password,$dbname))
{

    die("failed to connect!");

}

?>
