<?php
include 'includes/db.php';

function createUsersTable() {
    $connection = connectDatabase();

    $query = "CREATE TABLE IF NOT EXISTS users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role ENUM('user', 'admin') DEFAULT 'user'
    )";

    if ($connection->query($query) === TRUE) {
        echo "Users table created successfully!";
    } else {
        echo "Error creating table: " . $connection->error;
    }

    $connection->close();
}

createUsersTable();
?>
