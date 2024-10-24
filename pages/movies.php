<?php
// session_start();
// include 'includes/db.php';

// $connection = connectDatabase();

// if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
//     header('Location: login.php');
//     exit();
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

        .bottom {
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 30vh;
        }

        .title-text {
            margin-bottom: 5%;
            font-size: 40pt;
            text-transform: uppercase;
            margin-top: 5%;
            text-align: center;
        }

        .movies-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 5%;
        }

        .elements {

            padding: 20px;
            /* Padding for items */
            text-align: center;
            /* Center text */
            flex: 1 1 calc(20% - 10px);
            /* 4 items per row */

        }

        .elements>.text {

            font-family: "Quicksand", sans-serif;
            font-size: 20pt;
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
    <main>
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

        <div class="title-text">Our Movies</div>
        <div class="movies-grid">
            <div class="elements">
                <img src="../assets/image-deep-earth.jpg" alt="Deep earth">
                <div class="text">Deep earth</div>
                <p>Short description of the movie.</p>
                <button class="button-20" role="button">Book now</button>
            </div>
            <div class="elements">
                <img src="../assets/image-night-arcade.jpg" alt="Night arcade">
                <div class="text">Night arcade</div>
                <p>Short description of the movie.</p>
                <button class="button-20" role="button">Book now</button>
            </div>
            <div class="elements">
                <img src="../assets/image-soccer-team.jpg" alt="Soccer team VR">
                <div class="text">Soccer team VR</div>
                <p>Short description of the movie.</p>
                <button class="button-20" role="button">Book now</button>
            </div>
            <div class="elements">
                <img src="../assets/image-grid.jpg" alt="The grid">
                <div class="text">The grid</div>
                <p>Short description of the movie.</p>
                <button class="button-20" role="button">Book now</button>
            </div>
            <div class="elements">
                <img src="../assets/image-from-above.jpg" alt="From up above VR">
                <div class="text">From up above VR</div>
                <p>Short description of the movie.</p>
                <button class="button-20" role="button">Book now</button>
            </div>
            <div class="elements">
                <img src="../assets/image-pocket-borealis.jpg" alt="Pocket borealis">
                <div class="text">Pocket borealis</div>
                <p>Short description of the movie.</p>
                <button class="button-20" role="button">Book now</button>
            </div>
            <div class="elements">
                <img src="../assets/image-curiosity.jpg" alt="The curiosity">
                <div class="text">The curiosity</div>
                <p>Short description of the movie.</p>
                <button class="button-20" role="button">Book now</button>
            </div>
            <div class="elements">
                <img src="../assets/image-fisheye.jpg" alt="Make it fisheye">
                <div class="text">Make it fisheye</div>
                <p>Short description of the movie.</p>
                <button class="button-20" role="button">Book now</button>
            </div>

    </main>
    <footer>
        <center> © 2024 Loopstudios. All rights reserved.
        </center>
    </footer>
</body>

</html>