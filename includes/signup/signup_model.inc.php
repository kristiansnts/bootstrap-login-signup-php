<?php 

declare(strict_types=1);

function get_username(object $pdo, string $username) {
    $query = "SELECT username from users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_email(object $pdo, string $email) {
    $query = "SELECT email from users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $username, string $email, string $pwd) {
    $query = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd);";
    $stmt = $pdo->prepare($query);

    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->execute();
}