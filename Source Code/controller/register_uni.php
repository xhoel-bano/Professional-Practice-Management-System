<?php
require_once("../model/db_conn.php");
require_once("../model/university.class.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $name = test_input($_POST['name']);
    $location = test_input($_POST['location']);
    $website = test_input($_POST['website']);


    
    $dbh = Database::get_connection();
    $uni_instance = new University($dbh);
    $uni =($uni_instance)->registerUni($email, $password, 3, $name, $location, $website,0);

}

?>