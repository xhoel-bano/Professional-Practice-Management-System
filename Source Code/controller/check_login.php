<?php
require_once("../model/db_conn.php");
require_once("../model/user.class.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $dbh = Database::get_connection();
    $user_instance = new Users($dbh);
    $user =($user_instance)->verifyLogin($email, $password);

    if ($user) {
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user'] = $user;
        $_SESSION['authority'] = $user['user_authority'];
        

        if ($_SESSION['authority'] == 1) #admin
        header("Location: ../views/admin/table-bus.php");
    else if ($_SESSION['authority'] == 2) #business
        header("Location: ../views/business/buis_profile.php");
    else if ($_SESSION['authority'] == 3) #university
        header("Location: ../views/university/uni_home.php");
    else if ($_SESSION['authority'] == 4) #professor
        header("Location: ../views/professor/prof_home.php"); 
    else if ($_SESSION['authority'] == 5) #student
        header("Location: ../views/student/student_profile.php");
    else if ($_SESSION['authority'] == 6) #career office
        header("Location: ../views/career_office/career_jobann.php");
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Incorrect credentials!')
        window.location.href='../login.php';
        </SCRIPT>");
        
    }
}

?>