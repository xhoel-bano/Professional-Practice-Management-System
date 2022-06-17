<?php
require_once("../model/db_conn.php");
require_once("../model/business.class.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $bname = test_input($_POST['bname']);
    $address = test_input($_POST['address']);
    $email = test_input($_POST['email']);
    $nipt = test_input($_POST['nipt']);
    $website = test_input($_POST['website']);
    $password = test_input($_POST['password']);
    
	$regex = ('/^([A-Z]{1})([\d]{8})([A-Z]{1})$/');
	
	if(preg_match($regex,$nipt)){
		$dbh = Database::get_connection();
		$business_instance = new Business($dbh);
		$business =($business_instance)->registerBusiness($bname, $address, $email, $nipt, $website, $password, 0);
	}
	else//check values if they fit requirements if not then
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Nipt must be of this format X12345678X!')
			window.location.href='../signup/signup_business.php';
			</SCRIPT>");
	}
}
?>