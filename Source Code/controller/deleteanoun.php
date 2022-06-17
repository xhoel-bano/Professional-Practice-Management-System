<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $announcementid = $_POST['delete'];
		
	include "connectdb.php"; 
		
	$result = mysqli_query($connection,"DELETE FROM job_announcement WHERE job_announcement_id = '$announcementid'");	
		
    echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Announcement deleted successfully.')
			window.location.href='../../buis_announcments.php';
			</SCRIPT>");
}
?>