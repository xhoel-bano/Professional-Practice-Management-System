<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

	include "connectdb.php"; 
	
    $announcementid = $_POST['announid'];
	$day = date("Y/m/d");
	
	$check = mysqli_query($connection,"SELECT * FROM job_application WHERE student_id = $userid AND job_announcement_id = $announcementid");
	if(mysqli_num_rows($check)!=0)
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('You have already applied once here. Please wait for response.')
					window.location.href='../../View-Opportunities.php';
					</SCRIPT>");
	else 
	{
		$result = mysqli_query($connection,"INSERT INTO `job_application`(`job_application_date`,`job_application_status`,`student_id`,`job_announcement_id`) 
			VALUES ('$day',0,'$userid','$announcementid')");
		
		if($result)
			echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Your application has been received.')
						window.location.href='../../student_profile.php';
						</SCRIPT>");
		else
			echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Something went wrong. Please try again later.')
						window.location.href='../../View-Opportunities.php';
						</SCRIPT>");
	}	
}
?>