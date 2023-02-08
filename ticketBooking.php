<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Dynamically change your shopping cart total</title>
    <link rel="stylesheet" href="mainPage.css">
    <link rel="stylesheet" href="ticketBooking.css">
    <style>
        .item {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-pay {
            background-color: rgba(200, 0, 218, 0);
            border: 1px solid white;
            box-shadow: 1px 1px 3px black;
            color: #fff;
            font-weight: 600;
        }

        .btn-pay:hover {
            background-color: white;
            border: 1px solid white;

        }

        .fa-ticket {
            color: #0e1fa1;
        }
    </style>
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

                <li><a style="color:white" class="link" href="loginPage.html">
                        <?php
                        if (isset($_SESSION['passed']) == true) {
                            include 'person.svg';
                        } else {
                            echo "Sign In";
                        }
                        ?>
                    </a></li>
                <li><a class="link" href="mainpage copy.php">
                        <?php
                        if (isset($_SESSION['passed']) == true) {
                            echo "Sign Out";
                        } else {
                            echo "Sign Up";
                        }
                        ?>
                    </a></li>
                <br>
                <br>
                <li><a class="searchLogo" class="link" href=""> <i class="fa fa-search" style="font-size: xx-large;"></i> </a></li>
        </ul>
        </div>
        </ul>
    </header>

    <div class="mainContainer">


        <div class="imageContainer">
            <?php
            if (isset($IMG)) {
                echo $IMG;
            } else {
                echo "NOT FOUND";
            }
            ?>
            <div class="movie-heading">
                <h2> <?php
                        if (isset($MOVIENAME)) {
                            echo $MOVIENAME;
                        } else {
                            echo "NOT FOUND";
                        }
                        ?></h2>
            </div>


        </div>
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-7">
                    <div class="border border-gainsboro p-3">

                        <h2 class="h6 text-uppercase mb-0">Cart Total (2 Items): <strong class="cart-total"></strong>
                        </h2>
                    </div>

                    <div class="border border-gainsboro p-3 mt-3 clearfix item">
                        <div class="text-lg-left">
                            <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-5 col-5 text-lg-left">
                            <h3 class="h6 mb-0">SKYNET Flex ticket<br>
                                <small>Cost: $10.00/ea</small>
                            </h3>
                        </div>
                        <div class="product-price d-none">10.00</div>
                        <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
                            <label for="pass-quantity" class="pass-quantity">Quantity</label>
                            <input class="form-control" type="number" value="1" min="1">
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
                            <span class="product-line-price">10.00
                            </span>
                        </div>
                        <div class="remove-item pt-4">
                            <button class="remove-product btn-light">
                                <i><i class="fa fa-close" aria-hidden="true"></i></i>
                            </button>
                        </div>
                    </div>
                    <div class="border border-gainsboro p-3 mt-3 clearfix item">
                        <div class="text-lg-left">
                            <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-5 col-5 text-lg-left">
                            <h3 class="h6 mb-0">SKYNET Senior Flex ticket<br>
                                <small>Cost: $12.00/ea</small>
                            </h3>
                        </div>
                        <div class="product-price d-none">12.00</div>
                        <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
                            <label for="pass-quantity" class="pass-quantity">Quantity</label>
                            <input class="form-control" type="number" value="1" min="1">
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
                            <span class="product-line-price">12.00
                            </span>
                        </div>
                        <div class="remove-item pt-4">
                            <button class="remove-product btn-light">
                                <i><i class="fa fa-close" aria-hidden="true"></i></i>

                            </button>
                        </div>
                    </div>

                    <div class="border border-gainsboro p-3 mt-3 clearfix item">
                        <div class="text-lg-left">
                            <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-5 col-5 text-lg-left">
                            <h3 class="h6 mb-0">SKYNET Kids Flex ticket<br><small><small>Cost: $15.00/ea</small></small>
                            </h3>
                        </div>
                        <div class="product-price d-none">15.00</div>
                        <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
                            <label for="pass-quantity" class="pass-quantity">Quantity</label>
                            <input class="form-control" type="number" value="1" min="1">
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
                            <span class="product-line-price">15.00</span>
                        </div>
                        <div class="remove-item pt-4">
                            <button class="remove-product btn-light">
                                <i><i class="fa fa-close" aria-hidden="true"></i></i>
                            </button>
                        </div>
                    </div><!-- item -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-5 totals">
                    <div class="border border-gainsboro px-3">
                        <div class="border-bottom border-gainsboro">
                            <p class="text-uppercase mb-0 py-3"><strong>Order Summary</strong></p>
                        </div>
                        <div class="totals-item d-flex align-items-center justify-content-between mt-3">
                            <p class="text-uppercase">Subtotal</p>
                            <p class="totals-value" id="cart-subtotal"></p>
                        </div>
                        <div class="totals-item d-flex align-items-center justify-content-between">
                            <p class="text-uppercase">Estimated Tax</p>
                            <p class="totals-value" id="cart-tax"></p>
                        </div>
                        <div class="totals-item totals-item-total d-flex align-items-center justify-content-between mt-3 pt-3 border-top border-gainsboro">
                            <p class="text-uppercase"><strong>Total</strong></p>
                            <p class="totals-value font-weight-bold cart-total"></p>
                        </div>
                    </div>
                    <form action="checkoutform.php" method="get">
                        <button href="#" name="payButton" type="submit" value=" <?php
                                                                                if (isset($MOVIENAME)) {
                                                                                    echo $MOVIENAME;
                                                                                } else {
                                                                                    echo "NOT FOUND";
                                                                                }
                                                                                ?>" class="mt-3 btn btn-pay w-100 d-flex justify-content-between btn-lg rounded-0">Pay Now
                            <span class="totals-value cart-total"></span></button>
                </div>
            </div>
        </div><!-- container -->



    </div>

    <script>
        $(document).ready(function() {

            /* Set rates + misc */
            var taxRate = 0.04;
            var fadeTime = 500;

            $('.pass-quantity input').change(function() {
                updateQuantity(this);
            });

            $('.remove-item button').click(function() {
                removeItem(this);
            });


            /* Recalculate cart */
            function recalculateCart() {
                var subtotal = 0;

                /* Sum up row totals */
                $('.item').each(function() {
                    subtotal += parseFloat($(this).children('.product-line-price').text());
                });

                /* Calculate totals */
                var tax = subtotal * taxRate;
                var total = subtotal + tax;

                /* Update totals display */
                $('.totals-value').fadeOut(fadeTime, function() {
                    $('#cart-subtotal').html(subtotal.toFixed(2));
                    $('#cart-tax').html(tax.toFixed(2));
                    $('.cart-total').html(total.toFixed(2));
                    if (total == 0) {
                        $('.checkout').fadeOut(fadeTime);
                    } else {
                        $('.checkout').fadeIn(fadeTime);
                    }
                    $('.totals-value').fadeIn(fadeTime);
                });
            }

            /* Update quantity */
            function updateQuantity(quantityInput) {
                /* Calculate line price */
                var productRow = $(quantityInput).parent().parent();
                var price = parseFloat(productRow.children('.product-price').text());
                var quantity = $(quantityInput).val();
                var linePrice = price * quantity;

                /* Update line price display and recalc cart totals */
                productRow.children('.product-line-price').each(function() {
                    $(this).fadeOut(fadeTime, function() {
                        $(this).text(linePrice.toFixed(2));
                        recalculateCart();
                        $(this).fadeIn(fadeTime);
                    });
                });
            }

            /* Remove item from cart */
            function removeItem(removeButton) {
                /* Remove row from DOM and recalc cart total */
                var productRow = $(removeButton).parent().parent();
                productRow.slideUp(fadeTime, function() {
                    productRow.remove();
                    recalculateCart();
                });
            }

        });
    </script>

    <section class="footerMenu" style="padding-top:40px ;">
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
</body>

</html>