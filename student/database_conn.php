<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn == false){
    die ("ERROR: Could not connect " . mysqli_connect_error());
} else {

}
//$conn = mysqli_connect($servername,$username,$password,$database);
 
//if(!$conn){
 //   echo("Database connection failed");
//}
?>