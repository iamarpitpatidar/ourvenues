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
    <link href="includes/css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
    <link href="includes/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">Meet The Team</h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="mb30 mt60">
                        <h2>Leadership</h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card-group mb-4">
                        <div class="card rounded-0 card-shadow-none">
                            <img src="./images/team-member-small-1.jpg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Sonu Sagar</h4>
                                <small>Chief Executive Officer</small>
                            </div>
                        </div> 
                        <div class="card rounded-0 card-shadow-none ml-3">
                            <img src="./images/team-member-small-2.jpg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Adarsh Sharma</h4>
                                <small>Chief Operating Officer</small>
                            </div>
                        </div>
                        <div class="card rounded-0 card-shadow-none ml-3">
                            <img src="./images/team-member-small-3.jpg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Nikhil Sahu</h4>
                                <small>Chief Financial Officer</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card rounded-0 card-shadow-none">
                            <img src="./images/team-member-small-3.jpg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Arpit Patidar</h4>
                                <small>Chief Technology Officer</small>
                            </div>
                        </div>
                        <div class="card rounded-0 card-shadow-none ml-3">
                            <img src="includes/images/team/shakir.jpeg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Md Shakir</h4>
                                <small>Chief Marketing  Officer</small>
                            </div>
                        </div>
                        <div class="card rounded-0 card-shadow-none ml-3">
                            <img src="./images/team-member-small-3.jpg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Yashwant Verma</h4>
                                <small>Chief Product Officer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>

</html>