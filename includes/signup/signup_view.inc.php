<?php 

function check_errors_username() {
    if(isset($_SESSION["signup_errors"]["form_username"])){
        echo $_SESSION["signup_errors"]["form_username"];
    }
    unset($_SESSION["signup_errors"]["form_username"]);
}

function check_errors_email() {
    if(isset($_SESSION["signup_errors"]["form_email"])){
        echo $_SESSION["signup_errors"]["form_email"];
    }
    unset($_SESSION["signup_errors"]["form_email"]);
}

function check_errors_pwd() {
    if(isset($_SESSION["signup_errors"]["form_pwd"])){
        echo $_SESSION["signup_errors"]["form_pwd"];
    }
    unset($_SESSION["signup_errors"]["form_pwd"]);
}

function check_signup() {
    if(isset($_GET["signup"]) && $_GET["signup"] == "success") {
        unset($_SESSION["signup_data"]);
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Signup Success</strong> You can login now!.</div>';
    }
}

