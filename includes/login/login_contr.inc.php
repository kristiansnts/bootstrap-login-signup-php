<?php 

declare(strict_types=1);

function is_empty_username(string $username) {
    if(empty($username)) {
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

function is_user_not_registered(bool|array $result) {
    if(!$result) {
        return true;
    } else {
        return false;
    }
}

function is_not_match($pwd, $hashedPwd) {
    if(!password_verify($pwd, $hashedPwd)) {
        return true;
    } else {
        return false;
    }
}

