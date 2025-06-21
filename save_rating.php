<?php

$host = 'localhost';
$db   = 'tasks';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$developer_id = (int)$_POST['developer_id'];
$deadline = (int)$_POST['deadline'];
$quality = (int)$_POST['quality'];
$communication = (int)$_POST['communication'];

$sql = "INSERT INTO developer_ratings (developer_id, deadline_rating, quality_rating, communication_rating)
        VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiii", $developer_id, $deadline, $quality, $communication);

if ($stmt->execute()) {
    echo "Rating submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();



// CREATE TABLE developer_ratings (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     developer_id INT NOT NULL,
//     deadline_rating INT NOT NULL,
//     quality_rating INT NOT NULL,
//     communication_rating INT NOT NULL,
//     rated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );

