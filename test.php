<?php
$listingtype = "Cake";

require 'config.php';
$stmt = "SELECT * FROM `listings` WHERE `listing_type`= '$listingtype'";
$result = $conn->query($stmt);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo $row['listing_id'], $row['listing_location'];
        
    }
}
?>