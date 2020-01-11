<?php
$hostname = "localhost";
$username = "arpitpat_venuedb";
$password = "@0^7+bI~;5CJ";
$database = "arpitpat_ourvenues";

// Trying connection
$conn = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    //If there is error with conn, stop the script and display error.
    die("Connection failed: ".mysqli_connect_error());
}
?>