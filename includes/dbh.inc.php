<?php 

try {
    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase;", "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed : " . $e->getMessage());
}