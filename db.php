<?php
$host = 'bd-pfe.cpqcim2iglj9.eu-west-3.rds.amazonaws.com';
$db   = 'flight_booking';
$user = 'admin';
$pass = 'Str0ngPas$MAR!a';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}
?>
