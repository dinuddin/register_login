<?php
    session_start();

    unset($_SESSION['username']);
    unset($_SESSION['firstname']);
    unset($_SESSION['password']);
    unset($_SESSION['usertype']);

    session_destroy();

    echo "<script>alert('Logout completed'); window.location='login.php'; </script>";