<?php 
    session_start();
    error_reporting(E_ALL ^ E_NOTICE); 
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
    <script src="js/stickyFooter.js"></script>
    <style>
        .cardButton {
            border: none;
            background-color: rgba(26, 25, 25, 0);
            margin: 0%;
            padding: 0%;
        }
    </style>
</head>
<!-- font-family: 'Staatliches', cursive; -->
<!-- font-family: 'Russo One', sans-serif; -->


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
                <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search" style="font-size: xx-large;"></i> </a></li>
        </ul>
        </div>
        </ul>
    </header>

    <section class="bannerContainer">
        

        <div class="slider-frame">
            <div class="slide-images">
                <div class="img-container">
                    <img src="img/slideshowImage1.jpg" alt="" class="bannerImages" name="bannerImages">
                </div>
                <div class="img-container">
                    <img src="img/slideshowImage2.jpg" alt="" class="bannerImages" name="bannerImages">
                </div>
                <div class="img-container" style="height: 780px; width: 980px; ;">
                    <img src="img/slideshowImage3.jpg" alt="" class="bannerImages" name="bannerImages">
                </div>
                <div class="img-container" style="height: 780px; width: 980px; ;">
                    <img src="img/slideshowImage4.jpg" alt="" class="bannerImages" name="bannerImages">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="bannerTextContainer">

            <p id="bannerText">

                BOOK YOUR TICKETS TODAY FOR YOUR FAVOURITE MOVIES
                <a href="filmPage.html"> <button class="linkButton">Book tickets</button>
                </a>
            </p>
        </div>
    </section>

    <h2 id="filmCarousal__heading">
        TOP FILMS
    </h2>





    <form action="filmDetails.php" method="get">
        <section class="container">
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="1">
                        <img src="img/badguys.jpg" alt="">
                        <h3 class="title">The Bad Guys</h3>
                    </button>
                </div>
            </div>

            </div>
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="2">
                        <img src="img/Poster..jpg" alt="">
                        <h3 class="title">Doctor Strange in the Multiverse of Madness</h3>
                    </button>
                </div>

            </div>
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="3">
                        <img src="img/fantasticBeast.jpg" alt="">
                        <h3 class="title">Fantastic Beasts: The Secrets of Dumbledore</h3>
                    </button>
                </div>

            </div>
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="4">
                        <img src="img/Dwontown.jpg" alt="">
                        <h3 class="title">Downton Abbey: A New Era</h3>
                    </button>
                </div>

            </div>
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="5">
                        <img src="img/jurassicworld.jpg " alt="">
                        <h3 class=" title">Jurassic World: Dominion
                        </h3>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="6">
                        <img src="img/morbius.jpg" alt="">
                        <h3 class=" title">Morbius
                        </h3>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="7">
                        <img src="img/northman.jpg" alt="">
                        <h3 class=" title">The Northman
                        </h3>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="8">
                        <img src="img/OperationMinceMeat..jpg" alt="">
                        <h3 class=" title">The Operation Mince Meat
                        </h3>
                    </button>

                </div>
            </div>
            </button>
            <div class="card">
                <button class="cardButton" name="movie" type="submit" value="9">
                    <div class="cardImage">
                        <img src="img/theLostCity.jpg" alt="">
                        <h3 class=" title">The Lost City
                        </h3>
                    </div>
                </button>
            </div>
            <div class="card">
                <div class="cardImage">
                    <button class="cardButton" name="movie" type="submit" value="10">
                        <img src="img/sonicTheHedgeHog.jpg" alt="">
                        <h3 class=" title">Sonic The Hedgehog 2
                        </h3>
                    </button>
                </div>
            </div>
        </section>
    </form>

    </section>


    <section id="movieBanner">

        <img src="img/jurassicworldbanner.jpg" alt="">

        <div class="discriptionBanner">
            <div class="discriptionBanner__heading">
                <h2>Jurassic World: Dominion</h2>

            </div>
            <div class="discriptionBanner__description">
                <h6>
                    With old faces, new heroes and a hungrier-than-ever lineup of dinos, <strong>Jurassic World Dominion </strong> is the
                    most anticipated chomp romp since Spielberg’s original.
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    This is a movie where the viewing experience has to measure up to the monsters, so make a beeline
                    for the biggest screen you can find.</h6>
            </div>
            <div class="discriptionBanner__link">
                <a class="link" href="">Book Tickets <span style="color: #0281ff; font-size: larger;">&#8594;</span></a>
            </div>
        </div>
    </section>


    <section class="safetyContainer">


        <img src="img/safety.jpg" alt="">



    </section>

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
    <form action="quick-book.php" method="$_GET">
        <footer class="quickBook" class="sticky">
            <div class="quickBook__heading">
                Quick Book
            </div>

            <div class="quickBook__ticketBooking">
                <select name="QLocation" id="quickBook__location" class="quickBook__option">
                    <option value="" disabled selected hidden>Select a cinema</option>
                    <option value="Birmingham">Birmingham</option>
                    <option value="London">London</option>
                    <option value="Manchester">Manchester</option>
                </select>
                <select name="QFilm" id="quickBook__film" class="quickBook__option">
                    <option value="" disabled selected hidden>Select a Film</option>
                    <option value="1">The Bad Guys</option>
                    <option value="2">Doctor Strange in the Multiverse of Madness</option>
                    <option value="3">Fantastic Beasts: The Secrets of Dumbledore</option>
                    <option value="4">Downton Abbey: A New Era</option>
                    <option value="5">Jurassic World: Dominion</option>
                    <option value="6">Morbius</option>
                    <option value="7">The Northman</option>
                    <option value="8">The Operation Mince Meat</option>
                    <option value="9">The Lost City</option>
                    <option value="10">Sonic The Hedgehog 2</option>
                </select>
                <input type="date" name="Qdate" id="quickBook__date" class="quickBook__option">
                <input type="time" name="Qtime" id="quickBook__time" class="quickBook__option">
            </div>

            <div>
                <button class="quickBook__button" class="linkButton">Book Ticket</button>
            </div>
        </footer>
    </form>



</body>

</html>