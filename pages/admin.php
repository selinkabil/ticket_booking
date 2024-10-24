<?php
// include '../includes/db.php';

// if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
//     header('Location: login.php');
//     exit();
// }

// $movies = []; // Fetch movies from the database
// $users = []; // Fetch users from the database
// $bookings = []; // Fetch bookings from the database

// // Add logic to fetch data from the database

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="top">
        <div class="wrapper">
            <div class="top-bar">
                <div class="logo-name">Movie Theater Admin</div>
                <div class="pages-names">
                    <a href="movies.php">Movies</a>
                    <a href="contacts.php">Contacts</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            <h1>Admin Dashboard</h1>
        </div>
    </div>

    <div class="admin-section">
        <h2>Manage Movies</h2>
        <a href="add_movie.php">Add New Movie</a>
        <table>
            <thead>
                <tr>
                    <th>Movie Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $movie): ?>
                <tr>
                    <td><?php echo $movie['title']; ?></td>
                    <td>
                        <a href="edit_movie.php?id=<?php echo $movie['id']; ?>">Edit</a>
                        <a href="delete_movie.php?id=<?php echo $movie['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Manage Users</h2>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        <a href="edit_user.php?id=<?php echo $user['user_id']; ?>">Edit</a>
                        <a href="delete_user.php?id=<?php echo $user['user_id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Manage Bookings</h2>
        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>User</th>
                    <th>Movie</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking): ?>
                <tr>
                    <td><?php echo $booking['booking_id']; ?></td>
                    <td><?php echo $booking['user_id']; ?></td>
                    <td><?php echo $booking['movie_id']; ?></td>
                    <td><?php echo $booking['booking_date']; ?></td>
                    <td>
                        <a href="delete_booking.php?id=<?php echo $booking['booking_id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>