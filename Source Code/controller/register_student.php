<?php
require_once("../model/db_conn.php");
require_once("../model/student.class.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $name = test_input($_POST['name']);
    $surname = test_input($_POST['surname']);
    $phone = test_input($_POST['phone']);
    $address = test_input($_POST['address']);

    
    $dbh = Database::get_connection();
    $student_instance = new Student($dbh);
    $student =($student_instance)->registerStudent($email, $password, 5, $name, $surname, $phone, $address, 0, 0);

}

?>