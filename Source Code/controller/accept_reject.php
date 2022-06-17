<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	include "connectdb.php"; 
	
	$annid = $_POST['announc'];
	$accrej = $_POST['accrej'];
	
	$result = mysqli_query($connection,"UPDATE job_application 
				SET job_application_status = '$accrej'
				WHERE job_announcement_id = '$annid'");	
	
	if($accrej == 1)
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Student was Hired')
				window.location.href='../../buis_viewApp.php';
				</SCRIPT>");
	else
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Student was Rejected')
				window.location.href='../../buis_viewApp.php';
				</SCRIPT>");
}
?>