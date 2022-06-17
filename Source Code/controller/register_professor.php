<?php
require_once("../model/db_conn.php");
require_once("../model/professor.class.php");

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
    
    
    $dbh = Database::get_connection();
    $professor_instance = new Professor($dbh);
    $professor =($professor_instance)->registerProfessor($email, $password, 4, $name, $surname, 0);

}


?>