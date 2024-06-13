<?php
include 'connection.php';
session_start();
$id= $_SESSION['id'];
if(isset($_POST['sa']))
{
	$name=$_POST['food_name'];
	$price=$_POST['food_price'];
	$sql="INSERT INTO cart(u_id,food_name,quantity,price,total_price) VALUES('$id','$name','1','$price','$price')";
	$sql_run = $conn->query($sql);
	if(!$sql_run){
		echo "<script>alert('Oops! Something went wrong!')</script>";
		header("Location: main.php");
	}
	else{
		echo "<script>alert('Item Added to Cart!!!!')</script>";
		header("Location: main.php");
	}
}


?>