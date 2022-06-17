<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	include "connectdb.php";
	
    $title =  mysqli_real_escape_string($connection, $_POST['title']);
	$description =  mysqli_real_escape_string($connection, $_POST['description']);
    $postdate =  mysqli_real_escape_string($connection, $_POST['postdate']);
    $deadline =  mysqli_real_escape_string($connection, $_POST['deadline']);
	$type =  mysqli_real_escape_string($connection, $_POST['type']);
    $modality =  mysqli_real_escape_string($connection, $_POST['modality']);
	$duration =  mysqli_real_escape_string($connection, $_POST['duration']);
    $qualification =  mysqli_real_escape_string($connection, $_POST['qualification']);
    $criteria =  mysqli_real_escape_string($connection, $_POST['criteria']);
    $salary =  mysqli_real_escape_string($connection, $_POST['salary']);
	
	$result = mysqli_query($connection,	"INSERT INTO `job_announcement` (`job_announcement_title`, `job_announcement_description`, `job_announcement_post_date`, `job_announcement_deadline`, `job_announcement_type`, `job_announcement_modality`, `job_announcement_duration`, `job_announcement_qualification`, `job_announcement_criteria`, `job_announcement_salary`, `business_id`) 
	VALUES('$title','$description','$postdate','$deadline','$type','$modality','$duration','$qualification','$criteria','$salary','$userid')");
    
	if($result)
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Announcement saved successfully')
				window.location.href='../../buis_profile.php';
				</SCRIPT>");
	else 
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Something went wrong. Please try again.')
				window.location.href='../../buis_createannouncments.php';
				</SCRIPT>");
}
?>