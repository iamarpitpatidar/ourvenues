<?php
if(isset($_POST['submit'])) {
    require 'config.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $passwordrepeat = $_POST['passwordrepeat'];

echo $firstname, $lastname, $mobile, $email, $password, $passwordrepeat;
    //error check
    if (empty($firstname) || empty($lastname) || empty($mobile) || empty($password) || empty($passwordrepeat)) {
        header("location: ../index.php?error=emptyfields");
        exit();
    }
    elseif ($password !== $passwordrepeat) {
        header("location: ../index.php?error=passwdchk");
        exit();       
    }
    else {
        $sql = "SELECT vendorauth FROM vendors WHERE vendorauth=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $mobile);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck > 0 ) {
                echo '<script>localStorage.setItem("openModal", "#signupmodal")</script>';
                header("location: ../index.php?error=usrtaken");
                exit();                
            }
            else {
                $str = str_shuffle("mijsyg");
                $vendorid = date("S$str");
                
                $sql = "INSERT INTO vendors (`vendorid`, `vendorauth`, `vendor_first`, `vendor_last`, `vendor_mobile`, `vendor_password`) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    echo '<script>localStorage.setItem("openModal", "#signupmodal")</script>';
                    header("location: ../index.php?error=sqlerror");
                    exit();              
                }
                else {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    $sqld = mysqli_stmt_bind_param($stmt, "ssssss", $vendorid, $mobile, $firstname, $lastname, $mobile, $hashedpwd);
                    mysqli_stmt_execute($stmt);
                    echo '<script>localStorage.setItem("openModal", "#signupmodal")</script>';
                    header("location: ../index.php?reg=sucess");
                    exit();
                }
            }
        }


    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}