<?php 
$server = "localhost";
$username = "root";
$p = "";
$database = "rest";

$conn = mysqli_connect($server, $username, $p, $database);
if(!$conn){
	die("<script>alert('Connection Failed.')</script>");
}

?>