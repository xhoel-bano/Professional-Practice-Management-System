<?php
require_once("../model/db_conn.php");
require_once("../model/careeroffice.class.php");


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $re_password = test_input($_POST['re-password']);
    $name = test_input($_POST['fname']);
    $surname = test_input($_POST['lname']);
    

   
    $dbh = Database::get_connection();
    $career_instance = new Careeroffice($dbh);
    $career =($career_instance)->registerCareer($email, $password, 6, $name, $surname, 0);
    
}

?>