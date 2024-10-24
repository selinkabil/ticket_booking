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
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
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

        .contact-form {
            padding: 20px;
            background-color: #4d4ae842;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 50vw;
        }

        .contact-form {
            width: 70vw;
        }

        .contact-form h2 {
            margin-bottom: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-info {
            padding: 20px;
        }

        .map {
            margin: 20px 0;
            width: 70vw;
        }

        .map iframe {
            width: 100%;
            height: 400px;
        }

        h1,
        h2 {
            text-align: center;
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

    </div>
    <header>
        <h1>Contact Us</h1>
    </header>
    <center>
        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form id="contact-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <center><button class="button-20" type="submit">Send Message</button></center>
            </form>
        </section>
    </center>
    <center>
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Address:</strong> 123 Movie Theater St, Film City, FC 12345</p>
            <p><strong>Phone:</strong> (123) 456-7890</p>
            <p><strong>Email:</strong> info@movietheater.com</p>

        </section>

        <section class="map">
            <h2>Find Us</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509668!2d144.9537353153155!3d-37.81627997975188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0b5b0121%3A0xf4b7090d5850244a!2s123%20Movie%20Theater%20St%2C%20Film%20City%2C%20FC%2012345!5e0!3m2!1sen!2sau!4v1631234567890!5m2!1sen!2sau"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </center>
    <footer>
        <p>&copy; 2024 Movie Theater. All rights reserved.</p>
    </footer>
</body>

</html>