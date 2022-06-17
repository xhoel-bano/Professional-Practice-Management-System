<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	include "connectdb.php"; 
	
	$userid = $_POST['user'];
	
	$result = mysqli_query($connection,"DELETE FROM user WHERE user_id = '$userid'");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('User was Removed')
			history.go(-1);
			</SCRIPT>");
}
?>