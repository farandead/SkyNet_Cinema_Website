<?php 

session_start();
?>

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
    <link rel="stylesheet" href="mainPage.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="slidshow.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="carousal.css">
    <link rel="stylesheet" href="movieBanner.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <link rel="stylesheet" href="popUpLogin.css">
    <link rel="stylesheet" href="loginPage.css">
    <script src="js/stickyFooter.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="filmDetails.css">
    <style>
        .subparagraph {
            font-weight: 500;
            font-size: medium;
        }

        .subcontainer-2-heading {
            font-size: 40px;
        }

        .subcontainer-2-ticketButton {
            margin-top: 100px;

        }

        .ticketButton {
            background-color: #0355a779;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 10px;
            margin-left: 10px;
            padding-bottom: 10px;
            border: 1px solid rgba(255, 255, 255, 0.452);
            border-radius: 8px;
            box-shadow: 2px 2px 16px black;
        }

        .ticketButton:hover {
            border: 1px solid #0355a7;
            background-color: #0355a7;

            box-shadow: 8px 8px 16px black;
        }
    </style>
</head>

<header class="navigationBar">
    <ul id="navbar">
        <div id="logoblock">
            <a href="/mainpage.html" class="link">
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


        <li style="width:150px ;"><a href="userdahboard.php" class="link"> <?php 
                    if($_SESSION['firstname']){
                        echo "<span style='width:100px'><img style='margin-right:16px' r' src='person.svg' alt=''></span>";
                        echo "Hey ".$_SESSION['firstname'];
                        echo "<li><a href='sessionkiller.php' class='link'>Log Out</a></li>";

                        
                    } else{
                        echo "<li><a class='link' href='signUpPage.html'>Sign up</a></li>
                        <li><a class='link' href='loginPage.html'>Sign in</a></li>";

                    }                 
                    ?></a></li>
            <br>
            <br>
            <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search" style="font-size: xx-large;"></i>
                </a></li>



    </ul>
    </div>
    </ul>
</header>

<body>
    <div class="trailerContainer">
        <?php
        if (isset($trailer)) {
            echo $trailer;
        } else {
            echo "NOT FOUND";
        };
        ?>
    </div>


    <div class="mainContainer" style="height: fit-content;">
        <div class="subContainer-1">
            <?php
            if (isset($IMG)) {
                echo $IMG;
            } else {
                echo "NOT FOUND";
            };
            ?>

            <div class="subcontainer-2-ticketButton">
                <div class="ticketButton-container">

                    <form action="filmTickets.php" method="get">
                        <button class="ticketButton" name="movie" type="submit" value="<?php if (isset($MOVIENAME)) {
                                                                                            echo $MOVIENAME;
                                                                                        }else{
                                                                                            echo "not found";
                                                                                        } ?>">
                            Buy tickets
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="subcontainer-2">
            <div class="subcontainer-2-heading">
                <h1><?php
                    if (isset($MOVIENAME)) {
                        echo $MOVIENAME;
                    } else {
                        echo "NOT FOUND";
                    };
                    ?></h1>
            </div>
            <div class="subcontainer-2-directorblock">
                <h3 class="subparagraph-heading">DIRECTORS</h3>
                <p class="subparagraph"><?php
                                        if (isset($DIRECTORS)) {
                                            echo $DIRECTORS;
                                        } else {
                                            echo "NOT FOUND";
                                        };
                                        ?></p>

            </div>
            <div class="subcontainer-2-castblock">
                <h3 class="subparagraph-heading">CAST</h3>
                <p class="subparagraph"><?php
                                        if (isset($CAST)) {
                                            echo $CAST;
                                        } else {
                                            echo "NOT FOUND";
                                        };
                                        ?></p>

            </div>
            <div class="subcontainer-2-synopsisBlock">
                <h3 class="subparagraph-heading">SYNOPSIS</h3>
                <p class="subparagraph"><?php
                                        if (isset($SYNOPSIS)) {
                                            echo $SYNOPSIS;
                                        } else {
                                            echo "NOT FOUND";
                                        };
                                        ?></p>

            </div>



        </div>
        <div class="subContainer-3">
            <div class="subcontainer-2-castblock">
                <h3 class="subparagraph-heading"> RELEASE DATE</h3>
                <p class="subparagraph"><?php
                                        if (isset($RELEASEDATE)) {
                                            echo $RELEASEDATE;
                                        } else {
                                            echo "NOT FOUND";
                                        };
                                        ?></p>
            </div>
            <div class="subcontainer-2-catagoryblock">
                <h3 class="subparagraph-heading">CATAGORY</h3>
                <p class="subparagraph"><?php
                                        if (isset($CATAGORY_2)) {
                                            echo $CATAGORY_2;
                                        } else {
                                            echo "NOT FOUND";
                                        };
                                        ?></p>
            </div>

        </div>




    </div>


    <section class="footerMenu" style="margin: 0%;">
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