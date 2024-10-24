<?php
// session_start();
// include '../includes/db.php';
// include '../includes/user_crud.php';
// include '../includes/movie_crud.php';
// include '../includes/booking_crud.php';

// if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
//     header("Location: ../pages/login.php");
//     exit();
// }

// // Fetch movies for display
// $movies = getAllMovies(); // Function to retrieve all movies from the database

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="./../assets/favicon-32x32.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Frontend Mentor | Loopstudios landing page</title>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: black;
            color:white;
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
            mask-image: linear-gradient(
    to bottom, 
    rgba(0, 0, 0, 1) 60%,  /* Fully visible at 60% */
    rgba(0, 0, 0, 0) 100%  /* Fully transparent at the bottom */
  );
        }

        .hero-section {
            content: " ";
            position: absolute;
            z-index: 1;
            opacity: 40%;
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

        .middle {
            position: static;
            margin: 10em;
            height: auto;
            width: auto;
        }

        .middle-wrapper {
            position: relative;
            height: auto;
            width: auto;
        }

        .mid-img {

            max-width: 100%;
            /* Make the image take up to 100% of its container */
            height: auto;
            /* Maintain the aspect ratio */
            border-radius:5%;
        }

        .mid-text {
            position: absolute;
            top: 45%;
            left: 45%;
            background-color: white;
            font-family: "Quicksand", sans-serif;
            font-size: 1.5vw;
            padding: 4vw;
            text-wrap: wrap;
            height: auto;
            color:black;
            border-radius:5%;
        }

        .header {
            font-family: "Quicksand", sans-serif;
            font-size: 4vw;
            text-transform: uppercase;
        }

        .bottom {
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 30vh;
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
            border-top: solid 2px white;
        }
    </style>
</head>

<body>
    <?php
    // session_start();  // Start the session

    // if (!isset($_SESSION['user_id'])) {
    //     header("Location: login.php");
    //     exit();
    // }

    ?>
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

    </div>

    <div class="middle">
        <div class="middle-wrapper">
            <img class="mid-img" src="../assets/image-interactive.jpg" alt="">
            <div class="mid-text">
                <div class="header">The leader in interactive VR</div>

                Founded in 2011, Loopstudios has been producing world-class virtual reality
                projects for some of the best companies around the globe. Our award-winning
                creations have transformed businesses through digital experiences that bind
                to their brand.
            </div>


        </div>
    </div>
    <div class="bottom">
        <a href="movies.php">
            <center><button class="button-20"> See All Movies</button></center>
        </a>
    </div>
    <footer>
        <center> © 2024 Loopstudios. All rights reserved.
        </center>
    </footer>

</body>

</html>
