<?php 

declare(strict_types=1);

function is_empty_field(string $username, string $email, string $pwd) {
    if(empty($username) || empty($email) || empty($pwd)) {
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