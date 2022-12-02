<?php

include("connection.php");

$crn = 123;
$section = 001;
$course_number = "number";
$title = "title";
$professor = "professor";

//$id = 1;
$query = "insert into classes (crn,section,course_number,title,professor) values ('$crn','$section','$course_number','$title','$professor')";
//$query = "select * from users where id = '$id'";

$result = mysqli_query($con, $query);

//$data = mysqli_fetch_assoc($result);

//echo $data['user_name'];

?>
