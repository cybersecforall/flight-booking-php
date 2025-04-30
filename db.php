<?php
$host = 'your-rds-endpoint.rds.amazonaws.com';
$db   = 'flight_booking';
$user = 'admin';
$pass = 'yourpassword';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}
?>
