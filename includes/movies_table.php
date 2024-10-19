<?php
include 'includes/db.php';

function createMoviesTable() {
    $connection = connectDatabase();

    $query = "CREATE TABLE IF NOT EXISTS movies (
        movie_id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        poster_url VARCHAR(255),
        showtimes VARCHAR(255),
        duration TIME
    )";

    if ($connection->query($query) === TRUE) {
        echo "Movies table created successfully!";
    } else {
        echo "Error creating table: " . $connection->error;
    }

    $connection->close();
}

createMoviesTable();
?>
