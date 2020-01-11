<?php
session_start();
if(isset($_SESSION['id'])) {
    header("Location: ../index.php");
    exit();
}
elseif(isset($_POST['login'])) {
    require 'config.php';

    $user = $_POST['uid'];
    $pass = $_POST['password'];

    if(empty($user) || empty($pass)) {
        echo '<script>localStorage.setItem("openModal", "#loginmodal")</script>';
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    $query = "SELECT * FROM `vendors` WHERE `vendorauth` = '$user'";
    $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $password = $row['vendor_password'];
                if (password_verify($pass, $password)) {
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['id'] = $row['vendorid'];
                    $_SESSION['name'] = $row['vendor_first'];
                    header("Location: ../index.php?login=sucess");
                    exit();
                }
            }
        }
        else {
            echo '<script>localStorage.setItem("openModal", "#loginmodal")</script>';
            header("Location: ../index.php?error=nouser");
            exit();
        }
}
else {echo '<script>localStorage.setItem("openModal", "#loginmodal")</script>';
    header("Location: ../index.php#login");
    exit();
}
?>