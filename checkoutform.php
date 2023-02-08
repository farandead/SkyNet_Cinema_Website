<?php

$MOVIENAME = $_GET['payButton'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">

    <script src="js/stickyFooter.js"></script>
    <link rel="stylesheet" href="checkoutForm.css">
</head>

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
            <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search" style="font-size: xx-large;"></i>
                </a></li>
    </ul>
    </div>
    </ul>
</header>




<div class="mainCheckoutContainer">

    <h2 id="checkoutHeading">SKYNET: ONE STOP SOURCE OF ULTIMATE MOVIES</h2>
    <h3>Movie: <span id="checkoutmoviename">
            <?php

            if (isset($MOVIENAME)) {
                echo $MOVIENAME;
            } else {
                echo " NOT FOUND";
            }
            ?>
        </span></h3>
    <p></p>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="orderconfimation.php" method="POST">

                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com" required>
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New York" required>

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="NY" required>
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:rgb(9, 105, 248);"></i>
                                <i class="fa fa-cc-amex" style="color:rgb(243, 243, 243);"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018 " required>
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>
                    <button type="submit" name="moviename" value="<?php
                                                                    if (isset($MOVIENAME)) {
                                                                        echo $MOVIENAME;
                                                                    } else {
                                                                        echo " NOT FOUND";
                                                                    } ?>" class="btn" name="moviename">Place Order</button>
                </form>
            </div>
        </div>

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


</html>