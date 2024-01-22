<?php 

function check_login_errors_username() {
    if(isset($_SESSION["login_errors"]["form-username"])){
        echo $_SESSION["login_errors"]["form-username"];
    }
    unset($_SESSION["login_errors"]["form-username"]);
}

function check_login_errors_pwd() {
    if(isset($_SESSION["login_errors"]["form-password"])){
        echo $_SESSION["login_errors"]["form-password"];
    }
    unset($_SESSION["login_errors"]["form-password"]);
}

function check_signin() {
    if(isset($_GET["signin"]) && $_GET["signin"] == "success") {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Login Success</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}