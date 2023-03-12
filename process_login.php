<?php

    session_start();

    include("../database.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM accounts WHERE username = '$username'";
    $account = mysqli_fetch_array(mysqli_query($connection, $sql));

    if(password_verify($password, $account['password'])) {
        $_SESSION['username'] = $account['username'];
        $_SESSION['firstname'] = $account['firstname'];
        $_SESSION['lastname'] = $account['lastname'];
        $_SESSION['usertype'] = $account['usertype'];

        if($account['usertype'] == 'admin') {
            echo "<script>window.location='homepage_admin.php'; </script>";
        } elseif($account['usertype'] == 'siswa') {
            echo "<script>window.location='siswa.php'; </script>";
        }
        
    } else {
        echo "<script>alert('Invalid username/password combination'); window.location='login.php'";
    }
?>