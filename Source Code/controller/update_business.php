<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

	include "connectdb.php"; 
		
    $bname = mysqli_real_escape_string($connection, $_POST['bname']);
    $baddress = mysqli_real_escape_string($connection, $_POST['address']);
    $bwebsite = mysqli_real_escape_string($connection, $_POST['website']);
    $bmail = mysqli_real_escape_string($connection, $_POST['email']);
    $bnipt = mysqli_real_escape_string($connection, $_POST['nipt']);
    $bpass = mysqli_real_escape_string($connection, $_POST['password']);
    $bdescription = mysqli_real_escape_string($connection, $_POST['description']);
	
	$regex = ('/^([A-Z]{1})([\d]{8})([A-Z]{1})$/');
	
	if(preg_match($regex,$bnipt)){
		
		if($bpass == NULL)
			$result1 = mysqli_query($connection,"UPDATE user 
												SET user_email = '$bmail'
												WHERE user_id = '$userid'");
		else
		{
			$bpass = password_hash($bpass,PASSWORD_BCRYPT);
			$result2 = mysqli_query($connection,"UPDATE user 
												SET user_email = '$bmail', user_password = '$bpass'
												WHERE user_id = '$userid'");
		}
		$result3 = mysqli_query($connection,"UPDATE business 
				SET business_name = '$bname', business_website = '$bwebsite', business_nipt = '$bnipt', business_description = '$bdescription', business_address = '$baddress'
				WHERE business_id = '$userid'");	
		
        echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Values updated successfully.')
				window.location.href='../../buis_profile.php';
				</SCRIPT>");
	}
	else//check values if they fit requirements if not then
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Nipt must be of this format X12345678X')
			window.location.href='../../buis_profile_update.php';
			</SCRIPT>");	
	}
}
?>