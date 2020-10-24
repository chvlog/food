<?php

$servername="localhost";
$username="root";
$password="";
$dbname="help";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
	echo "ok";
}
else{
	echo "fail";
}


?>