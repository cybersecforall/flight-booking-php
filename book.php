<?php
require 'db.php';

$flight_id = $_POST['flight_id'];
$passenger_name = $_POST['passenger_name'];

$sql = "INSERT INTO bookings (flight_id, passenger_name) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$flight_id, $passenger_name]);

echo "✅ Booking confirmed for $passenger_name!";
?>
