<?php
require 'db.php';

$sql = "SELECT f.id, a1.name AS from_airport, a2.name AS to_airport, f.departure_time
        FROM flights f
        JOIN airports a1 ON f.departure_airport_id = a1.id
        JOIN airports a2 ON f.arrival_airport_id = a2.id";

$stmt = $pdo->query($sql);
$flights = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book a Flight - Moroccan Airports</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f4f4f4; }
        h2 { color: #333; }
        form, table { background: #fff; padding: 20px; border-radius: 8px; }
        select, input { padding: 8px; margin-top: 10px; width: 100%; }
        button { padding: 10px 20px; background: #0284c7; color: white; border: none; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>Available Flights</h2>
    <form method="post" action="book.php">
        <label>Select a flight to book:</label>
        <select name="flight_id">
            <?php foreach ($flights as $flight): ?>
                <option value="<?= $flight['id'] ?>">
                    <?= $flight['from_airport'] ?> ➔ <?= $flight['to_airport'] ?> at <?= $flight['departure_time'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <label>Your Name:</label>
        <input type="text" name="passenger_name" required />
        <button type="submit">Book Flight</button>
    </form>
</body>
</html>
