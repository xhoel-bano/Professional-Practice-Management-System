<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	include "connectdb.php"; 
	
	$uniid = $_POST['uni'];
	$accdel = $_POST['accdel'];
	
	if($accdel == 0){
		$result = mysqli_query($connection,"UPDATE university 
										SET university_verify = 0
										WHERE university_id = '$uniid'");
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('University was Rejected')
				window.location.href='../../table-university.php';
				</SCRIPT>");
	}
	else if($accdel == 1){
		$result = mysqli_query($connection,"UPDATE university 
										SET university_verify = 1
										WHERE university_id = '$uniid'");
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('University was Approved')
				window.location.href='../../table-university.php';
				</SCRIPT>");
	}
	else{
		$result = mysqli_query($connection,"DELETE FROM user WHERE user_id = '$uniid'");
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Universitys was Removed')
				window.location.href='../../table-university.php';
				</SCRIPT>");
	}
}
?>