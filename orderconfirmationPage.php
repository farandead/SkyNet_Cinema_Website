<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie -Your One Stop Source of Unlimited Movies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="mainPage.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <link rel="stylesheet" href="orderconfirmation.css">

    <script src="js/stickyFooter.js"></script>
</head>

<body>
    <header class="navigationBar">
        <ul id="navbar">
            <div id="logoblock">
                <a href="mainpage.php" class="link">
                    <p id="logoMovie">
                        SKYNET

                    </p>
                </a>

            </div>
            <div id="linksblock">
                <li class="navbaritem"><a class="link" href="filmPage.html">Films</a></li>
                <li class="navbaritem"><a class="link" href="#">Cinemas</a></li>
                <li class="navbaritem"><a class="link" href="#">Experiences</a></li>
                <li class="navbaritem"><a class="link" href="#">Offers & Membership</a></li>
            </div>

            <div id="membershipblock">
                <?php

                ?>

                <li style="width:150px ;"><a href="userdahboard.php" class="link"> <?php
                                                                                    if ($_SESSION['firstname']) {
                                                                                        echo "<span style='width:100px'><img style='margin-right:16px' r' src='person.svg' alt=''></span>";
                                                                                        echo "Hey " . $_SESSION['firstname'];
                                                                                        echo "<li><a href='sessionkiller.php' class='link'>Log Out</a></li>";
                                                                                    } else {
                                                                                        echo "<li><a class='link' href='signUpPage.html'>Sign up</a></li>
                        <li><a class='link' href='loginPage.html'>Sign in</a></li>";
                                                                                    }
                                                                                    ?></a></li>
                <br>
                <br>
                <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search" style="font-size: xx-large;"></i> </a></li>
        </ul>
        </div>
        </ul>
    </header>
    <div class="orderconfirmation-maincontainer">
        <div class="confirmationContainer ">
            <div class="confirmation-icon">
                <div class="confirmation-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" style="color:green" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </div>
            </div>
            <div class="confirmation-text">

                <h1>HEY <span id="confirmation-name"><?php
                                                        if (isset($firstname)) {
                                                            echo $firstname;
                                                        } else {
                                                            echo " NOT FOUND";
                                                        } ?></span> ! YOUR TICKETS HAVE BEEN BOOKED </h1>


            </div>
        </div>

        <div class="confirmationContainer-2">

            <h2>Your tickets have been booked, your booking number is <span id="booking-number"><?php
                                                                                                echo "#100" . rand(1, 100);  ?> </span></h2>
            <h3>Your booking details have been sent to this email: <span id="booking-email"><?php
                                                                                            if (isset($email)) {
                                                                                                echo $email;
                                                                                            } else {
                                                                                                echo " NOT FOUND";
                                                                                            } ?></span></h3>
        </div>

        <div class="confirmationButton">

            <a href="mainpage.php" class="link">
                <button class="confirmationButton-button">Home</button>
            </a>

        </div>
    </div>

    <section class="footerMenu">
        <div class="footerMenu__container">
            <ul class="footerMenu__list">
                <li class="footerMenu__listItem">
                    <a href="" class="link">Cookie Policy</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Privacy and Legal</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Corporate Responsibility</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Modern Slavery Statement</a>
                </li>
            </ul>
        </div>
        <div class="footerMenu__container">
            <ul class="footerMenu__list">
                <li class="footerMenu__listItem">
                    <a href="" class="link">Contact Us</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Help</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Accessibility</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Allergen and Nutritional Information</a>
                </li>

            </ul>
        </div>
        <div class="footerMenu__container">
            <ul class="footerMenu__list">
                <li class="footerMenu__listItem">
                    <a href="" class="link">About us</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Careers</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Corporate Events</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link"><strong>SKYNET</strong> Scene</a>
                </li>

            </ul>
        </div>
        <div class="footerMenu__container">
            <ul class="footerMenu__list">
                <li class="footerMenu__listItem">
                    <a href="" class="link">iOS App</a>
                </li>
                <li class="footerMenu__listItem">
                    <a href="" class="link">Android App</a>
                </li>
            </ul>
        </div>
    </section>

    <footer class="legalFooter">
        <div class="legalFooter__description">
            <p>© <STrong>SKYNET</STrong> Cinemas Limited 2019 to 2022. All rights reserved</p>
        </div>
        <div class="legalFooter_socialIcons">
            <img src="img/facebook.png" alt="">
            <img src="img/instagram.png" alt="">
        </div>

    </footer>

</body>

</html>