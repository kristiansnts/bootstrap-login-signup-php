<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["form-username"];
    $email = $_POST["form-email"];
    $pwd = $_POST["form-password"];
    $pwdConfirm = $_POST["form-confirm-password"];
    $about = $_POST["form-about-yourself"];

    try {
        
        require_once "../dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        // Error Handling
        $errors = [];

        if(is_empty_username($username)){
            $errors["form_username"] = "Username is required!";
        } else if (is_username_taken($pdo, $username)){
            $errors["form_username"] = "Username already taken";
        }

        if(is_empty_email($email)){
            $errors["form_email"] = "Email is required!";
        } else if (is_email_invalid($email)){
            $errors["form_email"] = "Input valid email!";
        } else if (is_email_registered($pdo, $email)){
            $errors["form_email"] = "Email already registered";
        }

        if(is_empty_pwd($pwd)){
            $errors["form_pwd"] = "Password is required!";
        } else if(is_password_not_match($pwd, $pwdConfirm)){
            $errors["form_pwd"] = "Password not match";
        }

        require_once "../config_session.inc.php";

        if($errors) {
            $_SESSION["signup_errors"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];

            $_SESSION["signup_data"] = $signupData;

            header("Location: ../../index.php");
            die();
        }

        create_user($pdo, $username, $email, $pwd);

        $pdo = null;
        $stmt = null;

        header("Location: ../../index.php?signup=success");
        die();

    } catch (PDOException $e) {
        die("Query failed : " . $e->getMessage());
    }
}