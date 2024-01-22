<?php 

declare(strict_types=1);

function is_empty_username(string $username) {
    if(empty($username)) {
        return true;
    } else {
        return false;
    }
}

function is_empty_email(string $email) {
    if(empty($email)) {
        return true;
    } else {
        return false;
    }
}

function is_empty_pwd(string $pwd) {
    if(empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function is_email_invalid(string $email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_password_not_match(string $pwd, string $pwdConfirm) {
    if($pwd !== $pwdConfirm) {
        return true;
    } else {
        return false;
    }
}

function is_username_taken(object $pdo, string $username) {
    if(get_username($pdo, $username)){
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email) {
    if(get_email($pdo, $email)){
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $username, string $email, string $pwd) {
    set_user($pdo, $username, $email, $pwd);
}