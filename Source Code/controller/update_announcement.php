<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

	include "connectdb.php"; 
	
	$announcementid = $_POST['announcementid'];
    $modality = mysqli_real_escape_string($connection, $_POST['modality']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $postdate = mysqli_real_escape_string($connection, $_POST['postdate']);
    $deadline = mysqli_real_escape_string($connection, $_POST['deadline']);
    $criteria = mysqli_real_escape_string($connection, $_POST['criteria']);
    $qualification = mysqli_real_escape_string($connection, $_POST['qualification']);
    $salary = mysqli_real_escape_string($connection, $_POST['salary']);
	$type = mysqli_real_escape_string($connection, $_POST['type']);
    $duration = mysqli_real_escape_string($connection, $_POST['duration']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
		
	$result = mysqli_query($connection,"UPDATE job_announcement 
				SET job_announcement_title = '$title', job_announcement_description = '$description', job_announcement_post_date = '$postdate', job_announcement_deadline = '$deadline', job_announcement_type = '$type', job_announcement_modality = '$modality', job_announcement_duration = '$duration', job_announcement_qualification = '$qualification', job_announcement_criteria = '$criteria', job_announcement_salary = '$salary'
				WHERE job_announcement_id = '$announcementid'");	
		
    echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Values updated successfully.')
			window.location.href='../../buis_announcments.php';
			</SCRIPT>");
	
}
?>