<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

	include "connectdb.php"; 
	
    $name = mysqli_real_escape_string($connection, $_POST['name']);
	$surname = mysqli_real_escape_string($connection, $_POST['surname']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
	
	$result = mysqli_query($connection,"UPDATE student 
				SET student_name = '$name', student_surname = '$surname', student_address = '$address', student_phone = '$phone'
				WHERE student_id = '$userid'");	
		
    echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Values updated successfully.')
				window.location.href='../../student_profile.php';
				</SCRIPT>");
	
}
?>