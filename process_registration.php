<?php

    include("../database.php");

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $usertype = $_POST['usertype'];

    $sql = "SELECT `username` FROM accounts WHERE `username` = '$username'";
    $checkUser = mysqli_num_rows(mysqli_query($connection, $sql));

    if($checkUser == 1) {
        echo "<script>alert('Username already exists, please input another username'); window.location='register.php'; </script>";
    } else {
        $sql = "INSERT INTO `accounts` (`username`, `password`, `firstname`, `lastname`, `usertype`) ";
        $sql .= " VALUES ('$username', '$password', '$firstname', '$lastname', '$usertype') ";

        if(mysqli_query($connection, $sql)) {
            echo "<script>alert('Account registration completed successfully.'); window.location='login.php'; </script>";
        } else {
            echo "<script>alert('Account registration failed, please try again.'); window.location='register.php'; </script>";
        }
    }

    

?>