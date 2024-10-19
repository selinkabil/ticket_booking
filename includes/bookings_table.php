<?php
include 'includes/db.php';

function createBookingsTable() {
    $connection = connectDatabase();

    $query = "CREATE TABLE IF NOT EXISTS bookings (
        booking_id INT AUTO_INCREMENT PRIMARY KEY,
        movie_id INT,
        user_id INT,
        seat_number VARCHAR(10),
        showtime VARCHAR(50),
        FOREIGN KEY (movie_id) REFERENCES movies(movie_id),
        FOREIGN KEY (user_id) REFERENCES users(user_id)
    )";

    if ($connection->query($query) === TRUE) {
        echo "Bookings table created successfully!";
    } else {
        echo "Error creating table: " . $connection->error;
    }

    $connection->close();
}

createBookingsTable();
?>
