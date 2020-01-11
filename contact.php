<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="987340446430-vegj2p2fa82vq2uergjgo5j26mvra3ac.apps.googleusercontent.com">
    <title> Bhopal's Venue &amp; Wedding booking system | OurVenues</title>
    <!-- Stylesheets -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="includes/fonts/fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <link href="includes/fonts/fontello/css/fontello.css" rel="stylesheet">
    <link href="includes/css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="includes/css/summernote-bs4.css" rel="stylesheert">
    <link href="includes/css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
    <link href="includes/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="includes/css/offcanvas.css" rel="stylesheet">

</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header -->
    <!-- contact-form -->
    <div class="content">
        <div class="site-section">
            <div class="container">
                <div class="row block-9">
                    <div class="col-md-6 pr-md-5">
                        <?php
                        if(isset($_GET['error'])) {
                            if($_GET['error'] == 'emptyfields') {
                                echo '<div class="alert alert-danger">Please fill all the fields to submit!</div>';
                            }
                            elseif($_GET['error'] == 'senderror') {
                                echo '<div class="alert alert-danger">Ooops! There is some error in sending mail.<br> Please try again in some time.</div>';
                            }
                        }
                        elseif(isset($_GET['msg'])) {
                            if($_GET['msg'] == 'send') {
                                echo '<div class="alert alert-success">Mail successfully sent!</div>';
                            }
                        }
                        ?>
                    <form action="includes/sendmail.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control px-3 py-3" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="mobile" class="form-control px-3 py-3" placeholder="Your Mobile">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control px-3 py-3" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control px-3 py-3" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="contact" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    </div>

                    <!-- Map Start-->
                    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                    <script>
                    (function () {var setting = {"height":420,"width":560,"zoom":14,"queryString":"Ourvenues, Near Pipal Square, Murli Nagar, Bhanpur, Bhopal, Madhya Pradesh, India","place_id":"ChIJHbKfnfVofDkRn5C0NkKcAgI","satellite":false,"centerCoord":[23.300488753015237,77.40449969636462],"cid":"0x2029c4236b4909f","cityUrl":"/india/bhopal-35725","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"111860"};var d = document;var s = d.createElement('script');s.src = 'https://1map.com/js/script-for-user.js?embed_id=111860';s.async = true;s.onload = function (e) {window.OneMap.initMap(setting)};var to = d.getElementsByTagName('script')[0];to.parentNode.insertBefore(s, to);})();
                    </script>
                    <a href="https://1map.com/map-embed?embed_id=111860">1map.com</a>
                    </div>
                    <!-- Map end -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.contact-form -->
    <?php
    include_once "footer.php";
    ?>
    <script src="includes/js/summernote-bs4.js"></script>
</body>

</html>