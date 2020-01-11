<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bhopal's Venue &amp; Weddings booking system | OurVenues</title>
    <!-- Stylesheets -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="includes/fonts/fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <link href="includes/fonts/fontello/css/fontello.css" rel="stylesheet">
    <link href="includes/css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="includes/css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
    <link href="inclues/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>

<body>
<div class="header header-transparent fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                    <div class="header-logo">
                        <a href="index.php"><img src="includes/images/logo-white.svg" alt="Bhopal's Venue &amp; Website booking system | OurVenues"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div id="navigation">
                        <ul>
                            <li><a href="listings.php?searchtype=Venue&searchloc=Bhopal&submit=Search" title="#">Venues</a>
                                <!--<ul>
                                    <li><a href="" title="">Wedding garden</a></li>
                                    <li><a href="" title="">Hall</a></li>
                                    <li><a href="" title="">Cafe and lounge</a></li>
                                    <li><a href="" title="">Meeting area</a></li>
                                </ul>-->
                            </li>
                            <li><a href="#" title="#">Vendors</a>
                                <ul>
                                    <li><a href="listings.php?searchtype=Photographer&searchloc=Bhopal&submit=Search" title="">Photographers</a></li>
                                    <li><a href="listings.php?searchtype=Videographer&searchloc=Bhopal&submit=Search" title="">Videographers</a></li>
                                    <li><a href="listings.php?searchtype=Planners&searchloc=Bhopal&submit=Search" title="">Planners</a></li>
                                     <li><a href="listings.php?searchtype=DJ&searchloc=Bhopal&submit=Search" title="">DJs</a></li>
                                     <li><a href="listings.php?searchtype=Florist&searchloc=Bhopal&submit=Search" title="">Florist</a></li>
                                     <li><a href="listings.php?searchtype=Band&searchloc=Bhopal&submit=Search" title="">Bands</a></li>
                                     <li><a href="listings.php?searchtype=Decor&searchloc=Bhopal&submit=Search" title="">Decor</a></li>
                                     <li><a href="listings.php?searchtype=Cake&searchloc=Bhopal&submit=Search" title="">Cakes</a></li>
                                     <li><a href="listings.php?searchtype=Musician&searchloc=Bhopal&submit=Search" title="">Musicians</a></li>
                                     <li><a href="listings.php?searchtype=Card&searchloc=Bhopal&submit=Search" title="">Cards</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="#">Packages</a>
                            </li>
                            <li><a href="#" title="#">Deals</a>
                            <!--<li><a href="dashboard.php" title="">User Panel</a>
                                <ul>
                                    <li><a href="couple-dashboard-overview.html" title="">Dashboard</a></li>
                                    <li><a href="couple-dashboard-mywishlist.html" title="">My Listing</a></li>
                                    <li><a href="couple-dashboard-todolist" title="">To Do List</a></li>
                                    <li><a href="couple-dashboard-budget.html" title="">Budget</a></li>
                                    <li><a href="couple-dashboard-guest-manager.html" title="">Guest Manager</a></li>
                                    <li><a href="couple-dashboard-add-new-guest.html" title="">Add New Guest</a></li>
                                    <li><a href="couple-dashboard-table-planner.html" title="">Seating Table</a></li>
                                    <li><a href="couple-dashboard-profile.html" title="">   Profile</a></li>
                                    <li><a href="couple-rsvp-page.html" title="">RSVP</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-2 col-sm-12 col-12 d-xl-block d-lg-block">
                    <?php
                    if(isset($_SESSION['id'])) {
                        echo '<a href="includes/logout.php" class="btn btn-primary btn-sl">LogOut</a>';
                    }
                    else {
                        echo '<div class="header-btn">
                                <a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-sl">Login</a>
                                <a href="#"  data-toggle="modal" data-target="#signupmodal" class="btn btn-primary btn-sl">Signup</a>
                              </div>';
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- login Modal -->
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="vendor-form-title">
                            <h3 class="mb-2">Welcome Back Vendor</h3>
                            <p>Please login to check your awesome stats!</p>
                            <?php include 'includes/errorhandlers.php'; ?>
                        </div>
                        <!--<div class="justify-content-center d-flex">
                            <div id="glogin"></div>
                        </div>
                        <h4 class="text-center mt-2">OR</h4>-->
                        <form action="includes/login.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="uid" placeholder="Registered Mobile Number" class="auth-form-control" required>
                                    <input type="password" name="password" placeholder="Password" class="auth-form-control" required>
                                </div>
                                <input type="submit" name="login" value="Login" class="btn btn-secondary">
                                <a href="#" class="btn btn-primary ml-1" data-dismiss="modal">Close</a>
                        </form>
                        <p class="mt-2"> Are you new couple? Create a New Account.<a href="https://ourvenues.in/auth.php#register" target="_blank" class="wizard-form-small-text"> Click here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login Modal -->
    <!-- Signup Modal -->
    <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="vendor-form-title">
                            <h3 class="mb-2">Business Register</h3>
                            <p>Join Ourvenues to get your business listed and to claim your listing for FREE!</p>
                        </div>
                        <!--<div class="justify-content-center d-flex">
                            <div id="gsignup"></div>
                        </div>-->
                        <div class="btn-g text-center btn-primary mt-2" id="regbymobile">Signup with Mobile</div>
                        <?php include 'includes/errorhandlers.php'; ?>
                        <div id="mobilereg"  style="display: none">
                            <form action="includes/signup.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                        <div class="form-group">
                                            <input type="text" name="firstname" placeholder="First Name" class="auth-form-control" required>
                                            <input type="text" name="lastname" placeholder="Last Name" class="auth-form-control">
                                            <input type="text" name="mobile" placeholder="Mobile Number" class="form-control mt-1" maxlength="10" required>
                                            <input type="password" name="password" placeholder="Password" class="auth-form-control mt-1" required>
                                            <input type="password" name="passwordrepeat" placeholder="Password Again" class="auth-form-control mt-1" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                        <input type="submit" name="submit" value="Sign up" class="btn btn-default mr-2"></input>
                                            <a href="index.php" class="btn btn-default">Go Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="mt-2"> Are you new couple? Create a New Account.<a href="https://ourvenues.in/auth.php#register" target="_blank" class="wizard-form-small-text"> Click here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Signup Modal -->
    <!-- search section -->
    <div class="hero-section-third">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="">
                        <div class="text-center search-head">
                            <h2 class="search-head-title text-white">Let us Plan your Dream Wedding</h2>
                            <p class="d-xl-block d-lg-block d-sm-block text-white">Browse over 1000 trusted Professionals</p>
                        </div>
                        <div class="search-form">
                            <form class="form-row" action="listings.php" method="GET">
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <select class="wide" name="searchtype">
                                        <option>Vendor Type</option>
                                        <option value="Venue">Venue</option>
                                        <option value="Photographer">Photographer</option>
                                        <option value="Cake">Cake</option>
                                        <option value="Decoration">Decoration</option>
                                        <option value="DJ">DJ</option>
                                        <option value="Singers">Singers</option>
                                    </select>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <select class="wide" name="searchloc">
                                        <option value="Bhopal">ALL Locations</option>
                                        <option value="MP-Nagar">MP Nagar</option>
                                        <option value="Lalghati">Lalghati</option>
                                        <option value="New-market">New market</option>
                                        <option value="Bairagarh">Bairagarh</option>
                                        <option value="Kolar">Kolar</option>
                                        <option value="Ayodhya-Bypass">Ayodhya Bypass</option>
                                        <option value="Karond">Karond</option>
                                        <option value="Indrapuri">Indrapuri</option>
                                        <option value="BHEL">BHEL</option>
                                        <option value="Idgah-Hills">Idgah Hills</option>
                                        <option value="Koh-e-Fiza">Koh-e-Fiza</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <input name="submit" class="search btn btn-primary btn-block" value="Search" type="submit"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="feature-left">
                            <div class="feature-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="text-white mb-1">1000+</h3>
                                <p class="text-white">Vendor Listing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="feature-left">
                            <div class="feature-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="text-white mb-1">600+</h3>
                                <p class="text-white">Happy Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="feature-left">
                            <div class="feature-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="text-white mb-1">18+</h3>
                                <p class="text-white">Locations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="feature-left">
                            <div class="feature-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="text-white mb-1">200+</h3>
                                <p class="text-white">Real Weddings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Search section -->
    <!-- venue-categoris-section-->
    <div class="space-small bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h2 class="mb10">Stunning Services at your Budget</h2>
                        <p>Photographers, Makeup Artist, Planners, Decorators, Venues</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=Venue&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-back-venue.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=Venue&searchloc=Bhopal&submit=Search" class="vendor-categories-title">Venues</a></h4>
                                <p class="vendor-categories-numbers">57</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=Photographers&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-back-photographers.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=Photographers&searchloc=Bhopal&submit=Search" class="vendor-categories-title">Photographers</a></h4>
                                <p class="vendor-categories-numbers">128</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=Videographers&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-back-videographers.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=Videographers&searchloc=Bhopal&submit=Search" class="vendor-categories-title">Videographers</a></h4>
                                <p class="vendor-categories-numbers">142</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=Makeup&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-img-4.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=Makeup&searchloc=Bhopal&submit=Search" class="vendor-categories-title">Makeup Artist</a></h4>
                                <p class="vendor-categories-numbers">26</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=Decorators&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-back-decor.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=Decorators&searchloc=Bhopal&submit=Search" class="vendor-categories-title">Decorators</a></h4>
                                <p class="vendor-categories-numbers">105</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=DJs&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-img-5.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=DJs&searchloc=Bhopal&submit=Search" class="vendor-categories-title">DJs</a></h4>
                                <p class="vendor-categories-numbers">97</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=Flowerist&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-img-3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=Flowerist&searchloc=Bhopal&submit=Search" class="vendor-categories-title">Flowirst</a></h4>
                                <p class="vendor-categories-numbers">95</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=Cards&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-back-cards.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=Cards&searchloc=Bhopal&submit=Search" class="vendor-categories-title">Invitation Cards</a></h4>
                                <p class="vendor-categories-numbers">98</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="vendor-categories-block zoomimg">
                        <div class="vendor-categories-img"> <a href="listings.php?searchtype=Cake&searchloc=Bhopal&submit=Search"><img src="includes/images/vendor-cat-back-cake.jpg" alt="" class="img-fluid"></a></div>
                        <div class="vendor-categories-overlay">
                            <div class="vendor-categories-text">
                                <h4 class="mb0"><a href="listings.php?searchtype=Cake&searchloc=Bhopal&submit=Search" class="vendor-categories-title">Cakes</a></h4>
                                <p class="vendor-categories-numbers">92</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt20"><a href="#" class="btn btn-primary btn-lg">Browse all category</a></div>
            </div>-->
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h2 class="mb10 text-white">How it Works</h2>
                        <p>Simple and easy step to get started your wedding planning.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 text-center text-white">
                    <div class="feature">
                        <div class="feature-icon bg-transparent text-default mr-auto ml-auto">
                            <img src="includes/fonts/iconfonts/browse.png">
                        </div>
                        <div class="feature-content mt30">
                            <h3 class="text-white">Browse Vendors</h3>
                            <p>Browse over 1000 trusted professionals as per your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 text-center text-white">
                    <div class="feature">
                        <div class="feature-icon bg-transparent text-default mr-auto ml-auto">
                            <i class="icon-026-letter fa-5x"></i>
                        </div>
                        <div class="feature-content mt30">
                            <h3 class="text-white">Request Quote</h3>
                            <p>Meet the Vendors with our expert and Request a Quote.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 text-center text-white">
                    <div class="feature">
                        <div class="feature-icon bg-transparent text-default mr-auto ml-auto">
                            <i class="icon-046-crown fa-5x"></i>
                        </div>
                        <div class="feature-content mt30">
                            <h3 class="text-white">Book A Vendor</h3>
                            <p>Book our recommended vendors and get upto 30% discount.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 text-center text-white">
                    <div class="feature">
                        <div class="feature-icon bg-transparent text-default mr-auto ml-auto">
                            <i class="icon-013-calendar fa-5x"></i>
                        </div>
                        <div class="feature-content mt30">
                            <h3 class="text-white">Manage your wedding</h3>
                            <p>Use our advanced tools and manage everything in just a few clicks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h2 class="mb10">Real Testimonials</h2>
                        <p>Find out what about real couple have to say about related.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="testimonial-block testimonial-second">
                        <div class="testimonial-content">
                            <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                            <h3 class="testimonial-name"> Megha Seth</h3>
                            <p class="testimonial-text">“Good Team.”</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-pic circle-lg"><img src="images/testimonial-1.jpg" class="rounded-circle" alt=""></div>
                            <div class="testimonial-meta-text">
                                <h5 class="mb0">ShutterMagic Photography</h5>
                                <p class="testimonial-small-text mb0">Kolar</p>
                            </div>
                            <div class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star-half rated"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="testimonial-block testimonial-second">
                        <div class="testimonial-content">
                            <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                            <h3 class="testimonial-name">Ramesh Pall</h3>
                            <p class="testimonial-text">Awesome food and service. I love the DJ too.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-pic circle-lg"><img src="images/testimonial-2.jpg" class="rounded-circle" alt=""></div>
                            <div class="testimonial-meta-text">
                                <h5 class="mb0">Grrek Food</h5>
                                <p class="testimonial-small-text mb0">MP Nagar</p>
                            </div>
                            <div class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="testimonial-block testimonial-second">
                        <div class="testimonial-content">
                            <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                            <h3 class="testimonial-name">Ramesh Pall</h3>
                            <p class="testimonial-text">Awesome food and service. I love the DJ too.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-pic circle-lg"><img src="images/testimonial-2.jpg" class="rounded-circle" alt=""></div>
                            <div class="testimonial-meta-text">
                                <h5 class="mb0">Grrek Food</h5>
                                <p class="testimonial-small-text mb0">MP Nagar</p>
                            </div>
                            <div class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_SESSION['id'])) {
        echo "";
    }
    else {
        echo '<div class="space-xs-small bg-default text-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <h1 class="text-white mb10">Are you a Vendor?   </h1>
                    <p>Join 1000+ vendors to boost your Business with out advance tools.</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 text-center mt-3">
                    <a href="https://partner.ourvenues.in" class="btn btn-white btn-lg">Join Now</a>
                </div>
            </div>
        </div>
    </div>';
    }
    ?>
    <?php
    include_once "footer.php";
    ?>
</body>

</html>