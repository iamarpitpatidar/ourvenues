<?php
if(isset($_POST['fckin'])) {
    header("Location: ../index.php?error=authdenied");
    exit();
}
?>
<!-- header-top -->
<div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                    <div class="header-text">
                        <p class="wlecome-text">Welcome to Ourvenues.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                    <div class="header-text text-right">
                        <p>Are You a vendor? <a href="https://partner.ourvenues.in" class="text-white">Grab your free listing!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.header-top -->
    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                    <div class="header-logo">
                        <a href="index.php"><img src="includes/images/logo-dark.svg" alt="Bhopal's Venue &amp; Wedding booking system | OurVenues"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div id="navigation">
                    <ul>
                            <li><a href="#" title="#">Venues</a>
                                <ul>
                                    <li><a href="" title="">Wedding garden</a></li>
                                    <li><a href="" title="">Hall</a></li>
                                    <li><a href="" title="">Cafe and lounge</a></li>
                                    <li><a href="" title="">Meeting area</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="#">Vendors</a>
                                <ul>
                                    <li><a href="" title="">Photographers</a></li>
                                    <li><a href="" title="">Videographers</a></li>
                                    <li><a href="" title="">Planners</a></li>
                                     <li><a href="" title="">DJs</a></li>
                                     <li><a href="" title="">Florist</a></li>
                                     <li><a href="" title="">Bands</a></li>
                                     <li><a href="" title="">Decor</a></li>
                                     <li><a href="" title="">Cakes</a></li>
                                     <li><a href="" title="">Musicians</a></li>
                                     <li><a href="" title="">Cards</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="#">Packages</a>
                            </li>
                            <li><a href="#" title="#">Deals</a>
                            </li>
                            <?php
                            if(isset($_SESSION['id'])) {
                                echo '
                            <li><a href="vdash.php" title="">User Panel</a>
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
                            </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-2 col-sm-12 col-12 d-xl-block d-lg-block">
                    <div class="header-btn">
                        <?php
                        if(isset($_SESSION['id'])) {
                        echo '<a href="includes/logout.php" class="btn btn-primary btn-sl">Logout</a>';
                        }
                        else {
                            echo '<a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-sl">Login</a>
                            <a href="auth.php"  data-toggle="modal" data-target="#signupmodal" class="btn btn-primary btn-sl">SignUp</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.header -->
        <!-- login Modal -->
        <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="vendor-form-title">
                            <h3 class="mb-2">Welcome Back Vendor</h3>
                            <p>Please login to check your awesome stats!</p>
                            <?php include_once 'includes/errorhandlers.php'; ?>
                        </div>
                        <div class="justify-content-center d-flex">
                            <div id="glogin"></div>
                        </div>
                        <h4 class="text-center mt-2">OR</h4>
                        <form action="includes/login.inc.php" method="POST">
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
                        <div class="justify-content-center d-flex">
                            <div id="gsignup"></div>
                        </div>
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