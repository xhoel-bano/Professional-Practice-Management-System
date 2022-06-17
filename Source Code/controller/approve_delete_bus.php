<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	include "connectdb.php"; 
	
	$bussid = $_POST['bus'];
	$accdel = $_POST['accdel'];
	
	if($accdel == 0){
		$result = mysqli_query($connection,"UPDATE business 
										SET business_verify = 0
										WHERE business_id = '$bussid'");
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Business was Rejected')
				window.location.href='../../table-bus.php';
				</SCRIPT>");
	}
	else if($accdel == 1){
		$result = mysqli_query($connection,"UPDATE business 
										SET business_verify = 1
										WHERE business_id = '$bussid'");
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Business was Approved')
				window.location.href='../../table-bus.php';
				</SCRIPT>");
	}
	else{
		$result = mysqli_query($connection,"DELETE FROM user WHERE user_id = '$bussid'");
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Businesss was Removed')
				window.location.href='../../table-bus.php';
				</SCRIPT>");
	}
}
?>