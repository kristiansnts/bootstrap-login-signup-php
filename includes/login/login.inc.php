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
            $errors["form-pasword"] = "Password is required!";
        } else if(is_not_match($pwd, $hashedPwd)) {
            $errors["form-pasword"] = "Username or Password not match!";
        }
        
        

    } catch (PDOException $e) {
        die("Query failed : " . $e->getMessage());
    }
}