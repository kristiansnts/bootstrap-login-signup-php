<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["form-username"];
    $pwd = $_POST["form-password"];

    try {
        
        require_once "../dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

        // Error Handler
        $errors = [];

        $result = get_user($pdo, $username);
        $hashedPwd = $result["pwd"];

        if(is_empty_username($username)) {
            $errors["form-username"] = "Username is required!";
        } else if(is_user_not_registered($result)) {
            $errors["form-username"] = "Username is not registered!";
        }
        if(is_empty_pwd($pwd)) {
            $errors["form-password"] = "Password is required!";
        } else if(!is_user_not_registered($result) && is_not_match($pwd, $hashedPwd)) {
            $errors["form-password"] = "Username or Password not match!";
        }

        require_once "../config_session.inc.php";

        if($errors) {
            $_SESSION["login_errors"] = $errors;

            header("Location: ../../index.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . '_' . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regenerate"] = time();


        header("Location: ../../index.php?signin=success");
        $pdo = null;
        $stmt = null;

        die();
        

    } catch (PDOException $e) {
        die("Query failed : " . $e->getMessage());
    }
}