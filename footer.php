    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-right">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/ourvenues.in/" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->
    <!-- footer-section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- footer-widget -->
                    <div class="footer-widget">
                        <a href="index.php"><img src="includes/images/logo-white.svg" alt="Bhopal's Venue &amp; Wedding booking system | OurVenues" class="mb20"></a>
                        <p class="mb10">An initiative for Bhopali's for hassle free bookings and management for your upcoming events.</p>
                        <a class="btn btn-primary btn-sm" href="team.php">Meet The Team</a><span class="ml-2"></span><a class="btn btn-primary btn-sm" href="about-us.php">Read More</a>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            Contact Address
                        </h3>
                        <ul class="listnone">
                            <li class="mb-3"><i class="fas fa-fw fa-map-marker-alt text-default pr-3 pt-1"></i>49, Zone-2 MP Nagar,
                            <br> Bhopal 462021</li>
                            <li class="mb-3"><i class="fas fa-fw fa-phone-volume text-default pr-3 pt-1"></i><a href="tel:+91-846-2891-748">+91-846-2891-748</a></li>
                            <li class="mb-2"><i class="fas fa-fw fa-envelope text-default pr-3 pt-1 "></i><a href="mailto:support@ourvenues.in">support@OurVenues.in</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            About Company
                        </h3>
                        <ul class="listnone">
                            <li class="mb-2"><a href="contact.php">Contact us</a></li>
                            <li class="mb-2"><a href="privacy-policy.php">Privacy Policy</a></li>
                            <li class="mb-2"><a href="terms.php">Terms & Conditions</a></li>
                            <!--<li class="mb-2"><a href="careers.php">Work with us</a></li>-->
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="footer-widget">
                            <h3 class="widget-title">
                                Find out More
                            </h3>
                            <ul class="listnone">
                                <li class="mb-2"><a href="faq.php">Faq</a></li>
                                <li class="mb-2"><a href="#">Help</a></li>
                                <li class="mb-2"><a href="downloads.php">Download the App</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- tiny-footer-section -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <p>© 2019 OurVenues. All Rights Reserved | Developed By Arpit Patidar</p>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="includes/js/jquery.min.js"></script>
    <script src="includes/js/bootstrap.min.js"></script>
    <script src="includes/js/menumaker.min.js"></script>
    <script src="includes/js/owl.carousel.min.js"></script>
    <script src="includes/js/jquery.nice-select.min.js"></script>
    <script src="includes/js/fastclick.js"></script>
    <script src="includes/js/custom-script.js"></script>
    <script src="includes/js/return-to-top.js"></script>
    <script>
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".header-transparent").offset().top > 200) {
            $(".fixed-top").addClass("top-nav-collapse");
        } else {
            $(".fixed-top").removeClass("top-nav-collapse");    
        }
    });
    </script>
    <?php
    if(isset($_GET['error']) && $_GET['error'] !== "") {
        echo "<script>var modalId = localStorage.getItem('openModal');
                    if (modalId != null){
                        $(modalId).modal('show');
                    }</script>";
    }
    ?>
    <script>
        function onSignIn(googleUser) {
            var id_token = googleUser.getAuthResponse().id_token;
                console.log("ID Token: " + id_token);
                let form = document.createElement('form');
            form.action = 'includes/login.php';
            form.method = 'POST';
            form.innerHTML = '<input name="token" value="'+id_token+'"><input name="valid" value="tpZCI6ImNkMjM0OTg4ZT"><input name="send" value="id_tokn">';
            document.body.append(form);
            form.submit();
        }
        function onSignUp(googleUser) {
            var id_token = googleUser.getAuthResponse().id_token;
                console.log("ID Token: " + id_token);
                let form = document.createElement('form');
            form.action = 'includes/signup.php';
            form.method = 'POST';
            form.innerHTML = '<input name="token" value="'+id_token+'"><input name="valid" value="tpZCI6ImNkMjM0OTg4ZT"><input name="send" value="id_tokn">';
            document.body.append(form);
            form.submit();
        }
        function onFailure(error) {
            console.log(error);
        }
        function renderButton() {
            gapi.signin2.render('glogin', {
                'scope': 'profile',
                'width': 285,
                'height': 50,
                'longtitle': true,
                'theme': 'dark',    
                'onsuccess': onSignIn,
                'onfailure': onFailure
            });
            gapi.signin2.render('gsignup', {
                'scope': 'profile email',
                'width': 285,
                'height': 50,
                'longtitle': true,
                'theme': 'dark',    
                'onsuccess': onSignUp,
                'onfailure': onFailure
            });
        }
        
        //show divs on button click
        $(document).ready(function(){
            //toggle mobile
            $('#regbymobile').click(function() {
                $('#mobilereg').toggle("slide");
            });
        });
    </script>
    <!--<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>-->