<?php
// session_start();
// include '../includes/db.php';
// $connection = connectDatabase();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     // WARNING: This is vulnerable to SQL injection!
//     $query = "SELECT * FROM users WHERE username = '$username'";
//     $result = $connection->query($query);

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row['password'])) {
//             $_SESSION['username'] = $username;
//             $_SESSION['role'] = $row['role'];
//             header('Location: dashboard.php');
//             exit();
//         } else {
//             echo "Invalid password.";
//         }
//     } else {
//         echo "No user found.";
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
    <style>
        /* Styles for form consistency */
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        a {
            color: white;
            text-decoration: none;
        }

        .top {
            position: static;
            width: 100vw;
            height: auto;
        }

        .wrapper {
            position: relative;
            width: 100%;
            height: auto;
        }

        .image-hero {
            max-width: 100%;
            /* Responsive image */
            width: 100vw;
            height: auto;
            /* Maintains aspect ratio */

            z-index: 0;
            object-fit: cover;
            display: block;
        }

        .hero-section {
            content: " ";
            position: absolute;
            z-index: 1;
            background-color: black;
            opacity: 50%;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .visible {
            position: absolute;
            /* Positioned within the wrapper */
            z-index: 2;
            padding: 10px;
            /* Optional padding */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            color: white;
            padding-top: 4em;

        }

        .logo-name {
            font-family: "Alata", sans-serif;
            font-weight: 700;
            font-family: "Josefin Sans", sans-serif;
            font-optical-sizing: auto;
            font-size: 2.5em;
            padding-left: 10%;
        }

        .pages-names {
            display: flex;
            gap: 2em;
            font-family: "Alata", sans-serif;
            font-weight: 500;
            font-style: normal;
            padding-right: 10%;
            align-items: center;
        }

        .hero-text {
            color: white;
            margin-left: 10%;
            margin-top: 5%;
            padding: 0.5em;
            font-family: "Quicksand", sans-serif;
            font-size: 4vw;
            border: 3px solid white;
            width: 30vw;

        }

        .visible {
            position: absolute;
            z-index: 2;
            padding: 10px;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            color: white;
            padding-top: 4em;
        }

        .logo-name {
            font-family: "Josefin Sans", sans-serif;
            font-size: 2.5em;
            padding-left: 10%;
        }

        .pages-names {
            display: flex;
            gap: 2em;
            padding-right: 10%;
            align-items: center;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #4d4ae842;
            padding: 2rem;
            border-radius: 8px;
            width: 30vw;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .button-20 {
            margin-top: 20px;
        }

        .form-title {
            margin-bottom: 1rem;
            font-size: 2rem;
        }

        .error-message {
            color: #FF4C4C;
            background-color: rgba(255, 76, 76, 0.1);
            border: 1px solid #FF4C4C;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }

        p {
            text-align: center;
            margin-top: 15px;
        }

        p a {
            color: black;
            text-decoration: underline;
        }

        .button-20 {
            appearance: button;
            background-color: #4D4AE8;
            background-image: linear-gradient(180deg, rgba(255, 255, 255, .15), rgba(255, 255, 255, 0));
            border: 1px solid #4D4AE8;
            border-radius: 1rem;
            box-shadow: rgba(255, 255, 255, 0.15) 0 1px 0 inset, rgba(46, 54, 80, 0.075) 0 1px 1px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, sans-serif;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5;
            margin: 0;
            padding: .5rem 1rem;
            text-align: center;
            text-transform: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
            margin: 5%;
        }

        .button-20:focus:not(:focus-visible),
        .button-20:focus {
            outline: 0;
        }

        .button-20:hover {
            background-color: #3733E5;
            border-color: #3733E5;
        }

        .button-20:focus {
            background-color: #413FC5;
            border-color: #3E3BBA;
            box-shadow: rgba(255, 255, 255, 0.15) 0 1px 0 inset, rgba(46, 54, 80, 0.075) 0 1px 1px, rgba(104, 101, 235, 0.5) 0 0 0 .2rem;
        }

        .button-20:active {
            background-color: #3E3BBA;
            background-image: none;
            border-color: #3A38AE;
            box-shadow: rgba(46, 54, 80, 0.125) 0 3px 5px inset;
        }

        .button-20:active:focus {
            box-shadow: rgba(46, 54, 80, 0.125) 0 3px 5px inset, rgba(104, 101, 235, 0.5) 0 0 0 .2rem;
        }

        .button-20:disabled {
            background-image: none;
            box-shadow: none;
            opacity: .65;
            pointer-events: none;
        }

        footer {
            height: 100px;
            background-color: black;
            margin-top: 50px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="top">
        <div class="wrapper">
            <img class="image-hero" src="../assets/image-hero.jpg"
                alt="Description of the hero image">
            <div class="hero-section">
            </div>
            <div class="visible">
                <div class="top-bar">
                    <div class="logo-name">
                        loopstudios
                    </div>
                    <div class="pages-names">
                        <a href="home.php">
                            <span>
                                Home
                            </span>
                        </a>
                        <a href="movies.php">
                            <span>
                                Movies
                            </span>
                        </a>
                        <a href="contacts.php">
                            <span>
                                Contacts
                            </span>
                        </a>
                        <a href="login.php">
                            <span>
                                Sign in
                            </span>
                        </a>
                        <!-- Admin link (hidden for regular users) -->
                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                            <span><a href="admin_dashboard.php">Admin</a></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="hero-text">

                    Reserve Your Seat for the Latest Movies!

                </div>
            </div>
        </div>


        <div class="form-container">
            <form action="login_handler.php" method="POST">
                <div class="form-title"><b>Login</b></div>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="button-20" type="submit">Login</button>
                <!-- Error message section -->
                <?php if (isset($errorMessage)): ?>
                    <div class="error-message">
                        <?php echo $errorMessage; ?>
                    </div>
                <?php endif; ?>

                <!-- Link to sign up page if user doesn't have an account -->
                <p>Don't have an account? <a href="signup.php">Sign up</a>.</p>

            </form>
        </div>
        <footer>
            <p>&copy; 2024 Movie Theater. All rights reserved.</p>
        </footer>
</body>

</html>