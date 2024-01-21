<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["form-username"];
    $email = $_POST["form-email"];
    $pwd = $_POST["form-password"];
    $pwdConfirm = $_POST["form-confirm-password"];
    $abput = $_POST["form-about-yourself"];

    try {
        
        require_once "../dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";


    } catch (PDOException $e) {
        die("Query failed : " . $e->getMessage());
    }
}