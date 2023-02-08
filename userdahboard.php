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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="popUpLogin.css">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <header class="navigationBar">
        <ul id="navbar">
            <form action="homeButton.php" method="POST">
            <div id="logoblock">
                <a href="mainpage.php" class="link" >
                    <p id="logoMovie">
                        SKYNET

                    </p>
                </a>
            </form>

            </div>
            <div id="linksblock">
                <li class="navbaritem"><a class="link" href="filmPage.html">Films</a></li>
                <li class="navbaritem"><a class="link" href="cinemasPage.html">Cinemas</a></li>
                <li class="navbaritem"><a class="link" href="" class="myacount-link" class="link">Experiences</a></li>
                <li class="navbaritem"><a class="link" href="membershipPage.html">Offers & Membership</a></li>
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

        </ul>
        </div>
        </ul>
    </header>
    

    <div class="bodyContainer">
        <div class="userIconContainer">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi-bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <span>&nbsp&nbsp&nbsp Hey, <span>
                    <?php
                    if (isset($_SESSION['firstname'])) {
                        echo $_SESSION['firstname'];
                    } else {
                        echo "notFound";
                    }
                    ?>
                </span> !</span>
        </div>
        <script>
            function booking(){
            document.getElementById("myid").style.display = "none"
        }


        </script>

        <div class="myaccountContainer">
            <div class="myaccount-pagelist">

                <div class="myaccount-overview" style="border-top: 0.5px solid gray;">
                    <a href="" class="myacount-link" class="link">
                        <h3>Overview</h3>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>
                <div class="myaccount-membership">
                    <a href="" class="myacount-link" class="link">
                        <h3>Membership</h3>

                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>
                <div class="myaccount-bookings">
                    <a href="" class="myacount-link" class="link" onclick="booking()">
                        <h3 onclick="booking()">My Bookings</h3>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>
                <div class="myaccount-friends">
                    <a href="" class="myacount-link" class="link">
                        <h3>My Friends</h3>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>
                <div class="myaccount-payments">
                    <a href="" class="myacount-link" class="link">
                        <h3>My Payments</h3>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>
                <div class="myaccount-achievements">
                    <a href="" class="myacount-link" class="link">
                        <h3>My Achievements</h3>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>
                <div class="myaccount-perferences">
                    <a href="" class="myacount-link" class="link">
                        <h3>My Preferences</h3>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>
                <div class="myaccount-help">
                    <a href="" class="myacount-link" class="link">
                        <h3>Help</h3>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>
                <div class="myaccount-offersandrewars" style="border-bottom:1px solid gray ;">
                    <a href="" class="myacount-link" class="link">
                        <h3>Offers and Rewards</h3>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                    </svg>
                </div>

            </div>
            <div class="myacount-detailscontainer" id="myid">

                <div class="myacount-subdetailscontainer">
                    <div class="myacount-details">
                        <div class="details-container">
                            <p>First Name</p>
                            <h6> <?php
                                    if (isset($_SESSION['firstname'])) {
                                        echo $_SESSION['firstname'];
                                    } else {
                                        echo "notFound";
                                    }
                                    ?> </h6>
                        </div>
                        <div class="details-container">
                            <p>Date of Birth</p>
                            <h6>
                                <?php
                                if (isset($_SESSION['dateofbirth'])) {
                                    echo $_SESSION['dateofbirth'];
                                } else {
                                    echo "notFound";
                                }
                                ?>
                            </h6>
                        </div>
                        <div class="details-container">
                            <p>Address</p>
                            <h6> <?php
                                    if (isset($_SESSION['address'])) {
                                        echo $_SESSION['address'];
                                    } else {
                                        echo "notFound";
                                    }
                                    ?></h6>
                        </div>
                    </div>
                    <div class="myacount-details">
                        <div class="details-container">
                            <p>Last Name</p>
                            <h6> <?php
                                    if (isset($_SESSION['lastname'])) {
                                        echo $_SESSION['lastname'];
                                    } else {
                                        echo "notFound";
                                    }
                                    ?></h6>
                        </div>
                        <div class="details-container">
                            <p>Primary Cinema </p>
                            <h6> <?php
                                    if (isset($_SESSION['primarycinema'])) {
                                        echo $_SESSION['primarycinema'];
                                    } else {
                                        echo "";
                                    }
                                    ?></h6>
                        </div>
                        <div class="details-container">
                            <p>Primary Cinema</p>
                            <h6> <?php
                                    if (isset( $_SESSION['primarycinema'])) {
                                        echo  $_SESSION['primarycinema'];
                                    } else {
                                        echo "notFound";
                                    }
                                    ?> </h6>
                        </div>
                    </div>

                </div>
                <div class="myacount-subdetailscontainer-2">
                    <h3> Sign In Details</h3>
                    <div class="myacount-signInDetails">
                        <div class="details-email">
                            <p>Email</p>
                            <h6> <?php
                                    if (isset($_SESSION['email'])) {
                                        echo $_SESSION['email'];
                                    } else {
                                        echo "notFound";
                                    }
                                    ?></h6>
                        </div>
                        <div class="details-password">
                            <p>Password</p>
                            <h6> <?php
                                    if ($_SESSION['password']) {
                                        echo $_SESSION['password'];
                                    } else {
                                        echo "notFound";
                                    }
                                    ?></h6>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>


</body>

</html>