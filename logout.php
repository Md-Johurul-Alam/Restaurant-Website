<?php
session_start();
include 'connection.php';
if(isset($_SESSION['name'])){
	session_destroy();
	echo "<script>location.href='index.php'</script>";

	$sql = 'DELETE FROM cart';
	$result = mysqli_query($conn, $sql);

}
else{
	$sql = 'DELETE FROM cart';
	$result = mysqli_query($conn, $sql);
	echo "<script>location.href='index.php'</script>";
}
?>