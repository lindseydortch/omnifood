<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnifood</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/queries.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/resources/fav-icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/resources/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/resources/fav-icon/favicon-16x16.png">
    <link rel="manifest" href="/resources/fav-icon/site.webmanifest">
    <link rel="mask-icon" href="/resources/fav-icon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/resources/fav-icon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/resources/fav-icon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healthy meals to as many people as possible.">
</head>
<body>

    <header>
        <nav>
            <div class="row">
                <img src="resources/img/logo-white.png" alt="Omnifood Logo" class="logo">
                <img src="resources/img/logo.png" alt="Omnifood Logo" class="logo-black">
                <ul class="main-nav js--main-nav">
                    <li><a href="#features">Food Delivery</a></li>
                    <li><a href="#works">How it works</a></li>
                    <li><a href="#cities">Our Cities</a></li>
                    <li><a href="#plans">Sign Up</a></li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><ion-icon name="menu-outline" class="nav-icon"></ion-icon></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Goodbye junk food.<br>Hello super healthy meals. </h1>
            <a href="#" class="btn btn-full js--scroll-to-plans">I’m hungry</a>
            <a href="#" class="btn btn-ghost js--scroll-to-start">Show me more</a>
        </div>
    </header>

    <section class="section-features js--section-features" id="features">
        <div class="row">
            <h2>Get food fast &mdash; not fast food.</h2>
            <p class="long-copy">
                Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
            </p>
        </div>

        <div class="row js--wp-1">
            <div class="col span-1-of-4 box">
                <ion-icon name="infinite-outline" class="icon-big"></ion-icon>
                <h3>Up to 365 days/year</h3>
                <p>
                    Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon name="stopwatch-outline" class="icon-big"></ion-icon>
                <h3>Ready in 20 minutes</h3>
                <p>
                    You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon name="nutrition-outline" class="icon-big"></ion-icon>
                <h3>100% organic</h3>
                <p>
                    All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon name="cart-outline" class="icon-big"></ion-icon>
                <h3>Order anything</h3>
                <p>
                    We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                </p>
            </div>
        </div>
    </section>
    
    <section class="section-meals">
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
    </section>
    
    <section class="section-steps" id="works">
        <div class="row">
            <h2>How it works &mdash; Simple as 1, 2, 3</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 steps-box">
                <img src="resources/img/app-iPhone.png" alt="Omnifood App on iPhone" class="app-screen js--wp-2">
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="works-step">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                </div>
                <div class="works-step">
                    <div>2</div>
                    <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                </div>
                <div class="works-step">
                    <div>3</div>
                    <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                </div>

                <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
            </div>
        </div>
    </section>

    <section class="section-cities" id="cities">
        <div class="row">
            <h2>We're currently in these cities</h2>
        </div>
        <div class="row js--wp-3">
            <div class="col span-1-of-4 box">
                <img src="resources/img/lisbon-3.jpg" alt="Lisbon">
                <h3>Lisbon</h3>
                <div class="city-feature">
                    <ion-icon name="person-outline" class="icon-small"></ion-icon>
                    1600+ happy eaters
                </div>
                <div class="city-feature">
                    <ion-icon name="star-outline" class="icon-small"></ion-icon>
                    60+ top chefs
                </div>
                <div class="city-feature">
                    <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                    <a href="#">@omnifood_lx</a>
                </div>   
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/san-francisco.jpg" alt="Lisbon">
                <h3>San Francisco</h3>
                <div class="city-feature">
                    <ion-icon name="person-outline" class="icon-small"></ion-icon>
                    3700+ happy eaters
                </div>
                <div class="city-feature">
                    <ion-icon name="star-outline" class="icon-small"></ion-icon>
                    160+ top chefs
                </div>
                <div class="city-feature">
                    <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                    <a href="#">@omnifood_sf</a>
                </div> 
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/berlin.jpg" alt="Lisbon">
                <h3>Berlin</h3>
                <div class="city-feature">
                    <ion-icon name="person-outline" class="icon-small"></ion-icon>
                    2300+ happy eaters
                </div>
                <div class="city-feature">
                    <ion-icon name="star-outline" class="icon-small"></ion-icon>
                    6110+ top chefs
                </div>
                <div class="city-feature">
                    <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                    <a href="#">@omnifood_berlin</a>
                </div> 
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/london.jpg" alt="Lisbon">
                <h3>London</h3>
                <div class="city-feature">
                    <ion-icon name="person-outline" class="icon-small"></ion-icon>
                    1200+ happy eaters
                </div>
                <div class="city-feature">
                    <ion-icon name="star-outline" class="icon-small"></ion-icon>
                    50+ top chefs
                </div>
                <div class="city-feature">
                    <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                    <a href="#">@omnifood_london</a>
                </div> 
            </div>
        </div>
    </section>

    <section class="section-testimonials">
        <div class="row">
            <h2>Our customers can't live without us</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                </blockquote>
                <cite><img src="resources/img/customer-1.jpg" alt="Customer Photo">Alberto Duncan</cite>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                </blockquote>
                <cite><img src="resources/img/customer-2.jpg" alt="Customer Photo">Joana Silva</cite>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                </blockquote>
                <cite><img src="resources/img/customer-3.jpg" alt="Customer Photo">Milton Chapman</cite>
            </div>
        </div>
    </section>

    <section class="section-plans js--section-plans" id="plans">
        <div class="row">
            <h2>Start eating healthy today</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box js--wp-4">
                    <div>
                        <h3>Premium</h3>
                        <p class="plan-price">$399 <span>/ month</span></p>
                        <p class="plan-price-meal">That’s only $13.30 per meal</p>
                    </div>
                    <div>
                        <ul>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal every day</li>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order 24/7</li>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Access to newest creations</li>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-full">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Pro</h3>
                        <p class="plan-price">$149 <span>/ month</span></p>
                        <p class="plan-price-meal">That’s only $14.90 per meal</p>
                    </div>
                    <div>
                        <ul>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal 10 days/month</li>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order 24/7</li>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Access to newest creations</li>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">$19 <span>/ meal</span></p>
                        <p class="plan-price-meal">&nbsp;</p>
                    </div>
                    <div>
                        <ul>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>1 meal</li>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Order from 8 am to 12 pm</li>
                            <li><ion-icon name="checkmark-outline" class="icon-small"></ion-icon>Free delivery</li>
                            <li>&nbsp;</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-form" id="form">

        <div class="row">

            <?php

            if($_GET['success'] == 1) {
                echo "<div class=\"form-messages success\">
                Thank you! Your message has been sent.
                </div>";
            } 

            if($_GET['success'] == -1) {
                echo "<div class=\"form-messages error\">
                Oops! Something went wrong. Please try again!
                </div>";
            } 
            
            ?>

        </div>
        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        <div class="row">
            <form method="post" action="mailer.php" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="find-us" id="find-us">
                            <option value="#" selected>&nbsp;</option>
                            <option value="friends">Friends</option>
                            <option value="search">Search engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="newsletter">Newsletter?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name="newsletter" id="newsletter" checked> Yes, please
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="message">Drop us a line</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" id="message" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        &nbsp;
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" value="Send it!">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Android App</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="#"><ion-icon name="logo-facebook" class="facebook"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-twitter" class="twitter"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-google" class="google"></ion-icon></a></li>
                    <li><a href="#"><ion-icon name="logo-instagram" class="instagram"></ion-icon></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <p>
                Copyright &copy; 2020 by Omnifood. All rights reserved.
            </p>
        </div>
    </footer> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/scripts.js"></script>
</body>



</html>