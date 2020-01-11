<?php
session_start();
if(isset($_GET['submit'])) {
    $vendor_type = $_GET['searchtype'];
    $vendor_location = $_GET['searchloc'];
    if(empty($vendor_type) || empty($vendor_location)) {
        header("Location: index.php?error=falsequery");
        exit();
    }
    else{
        require 'config.php';

        $query = "SELECT * FROM `listings` WHERE `listing_type` = '$vendor_type' AND `listing_location` = '$vendor_location'";
        $result = $conn->query($query);
    }
}
else {
    header("Location: index.php?error=542");
    exit();
}
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
    <?php 
    include_once 'header.php';
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <!-- sidebar-section -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="filter-form">
                        <form class="form-row" method="GET" action="">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="widget-title">filter</h3>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <select class="wide" name="searchtype">
                                    <option>Vendor Type</option>
                                    <option value="Venue">Venue</option>
                                    <option value="Photographers">Photographers</option>
                                    <option value="Videographers">Videographers</option>
                                    <option value="Planners">Planners</option>
                                    <option value="DJs">DJs</option>
                                    <option value="Florist">Florist</option>
                                    <option value="Bands">Bands</option>
                                    <option value="Decor">Decor</option>
                                    <option value="Cake">Cakes</option>
                                    <option value="Musicians">Musicians</option>
                                    <option value="Cards">Invitaton Cards</option>
                                </select>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" hidden>
                                <select class="wide">
                                    <option value="Guest">Guest</option>
                                    <option value="1 - 100">1 - 100</option>
                                    <option value="1 - 200">100 - 200</option>
                                    <option value="1 - 500">200 - 500</option>
                                    <option value="1 - 1000">500 - 1000</option>
                                </select>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <select class="wide" name="searchloc">
                                    <option value="Bhopal">Price</option>
                                    <option value="Bhopal">₹100 to ₹500</option>
                                    <option value="Bhopal">₹500 to ₹2000</option>
                                    <option value="Bhopal">₹2000 to ₹3500</option>
                                    <option value="Bhopal">₹3500 to ₹4500</option>
                                    <option value="Bhopal">₹4500 to ₹5500</option>
                                </select>
                            </div>
                            <?php if($vendor_type == 'Venue') {
                                echo '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb20">
                                <!-- aminites -->
                                <div class="aminities">
                                    <h3 class="widget-title"> Amenities</h3>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"> Groom Lounge</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2"> Bridal Suite</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Table and chairs</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4"> Get Ready Rooms</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Event Rentals</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck6">Outside Vendors</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                                        <label class="custom-control-label" for="customCheck7"> Bar Services</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                                        <label class="custom-control-label" for="customCheck8"> Catering Services</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                                        <label class="custom-control-label" for="customCheck9"> Clean Up</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                                        <label class="custom-control-label" for="customCheck10">Event Planner</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                                        <label class="custom-control-label" for="customCheck11">Wifi</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck12">
                                        <label class="custom-control-label" for="customCheck12">Pet Friendly</label>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck13">
                                        <label class="custom-control-label" for="customCheck13">Accommodations</label>
                                    </div>
                                </div>
                                <!-- /.aminites -->
                            </div>';
                            } ?>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button class="btn btn-default btn-block" name="submit" type="submit">Find Vendor</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.sidebar-section -->
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                    <div class="vendor-thumbnail list-view">
                        <div class="row">
                            <?php
                            if($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 border-right pr-0">
                                <div class="vendor-img">
                                    <a href="#"><div class="zoomimg"><img src="https://partner.ourvenues.in/includes/images/vendors/listings/<?php echo $row['listing_avtaar']; ?>.jpg" alt="" class="img-fluid"></div></a>
                                    <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 pl-0">
                                <div class="vendor-content">
                                    <h2 class="vendor-title"><a href="#" class="title"><?php echo $row['listing_title']; ?></a></h2>
                                    <p class="vendor-address"><?php echo $row['listing_address']; ?>.</p>
                                    <div class="vendor-meta m-0">
                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                            <span class="vendor-price">
                                        <?php echo $row['listing_pricing']; ?>
                                            </span>
                                            <span class="vendor-text">Start From</span>
                                        </div>
                                        <?php if($vendor_type == 'Venue') {
                                            echo '<div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-guest">
                                                </span>
                                                <span class="vendor-text">Guest</span>
                                            </div>';
                                        }?>
                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                            <span class="rating-star">
                                        <i class="fa fa-star rate-mute"></i>
                                        <i class="fa fa-star rate-mute"></i>
                                        <i class="fa fa-star rate-mute"></i>
                                        <i class="fa fa-star rate-mute"></i>
                                        <i class="fa fa-star rate-mute"></i> 
                                        </span>
                                            <span class="rating-count vendor-text">(0)</span>
                                        </div>
                                    </div>
                                </div>
                            </div><?php }
                            }?>
                        </div>
                    </div>            
                    <!--<div class="pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link " href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>