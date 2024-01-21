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

        // Error Handling
        $errors = [];

        if(is_empty_field($username, $email, $pwd)){
            $errors["empty_field"] = "Fill all the field!";
        }
        if(is_email_invalid($email)){
            $errors["invalid_email"] = "Input valid email!";
        }
        if(is_password_not_match($pwd, $pwdConfirm)){
            $errors["not_match_password"] = "Password not match";
        }
        if(is_username_taken($pdo, $username)){
            $errors["taken_username"] = "Username already taken";
        }
        if(is_email_registered($pdo, $email)){
            $errors["registered_email"] = "Email already registered";
        }

        if($errors) {
            $_SESSION["signup_errors"] = $errors;

            header("Location: ../../index.php");
            die();
        }

    } catch (PDOException $e) {
        die("Query failed : " . $e->getMessage());
    }
}