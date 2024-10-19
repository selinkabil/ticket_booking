<?php
function connectDatabase() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'movie_booking';

    $connection = new mysqli($host, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    return $connection;
}
?>
