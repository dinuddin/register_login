<?php
    session_start();
    if(!isset($_SESSION['username'])) {
 
        echo "<script>alert('ACCESS DENIED! Only logged in users can access this page'); window.location='login.php'; </script>";
        die();
    }

    if($_SESSION['usertype'] != 'siswa') {
        echo "<script>alert('ACCESS DENIED! Only clients can access this page'); window.location='homepage_admin.php'; </script>";
        die();
    }
    
    $username = $_SESSION['username'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Projects : <?php echo $username; ?></title>
    
	<link rel="stylesheet" id="theme_link" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>
    
	<link rel="stylesheet" href="navbar-fixed-right.min.css">
    <link rel="stylesheet" href="navbar-fixed-left.min.css">
    <link rel="stylesheet" href="docs.css">
    
    <script src="docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href><img src="../assets/favicon_io/favicon.ico" class="img-circle" alt="Myprojects"> My Projects</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="beranda.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="siswa">Siswa</a>
                    <a class="dropdown-item" href="guru">Guru</a>
                    <a class="dropdown-item" href="kepsek">Kepsek</a>
                    <div class="dropdown-divider" href="#"></div>
                    <a class="dropdown-item" href="admin">Administrator</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-left">
                    <i class="fa fa-arrow-left"></i>
                    Fixed Left
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-top">
                    <i class="fa fa-arrow-up"></i>
                    Fixed Top
                    <small>(original)</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-class="fixed-right">
                    <i class="fa fa-arrow-right"></i>
                    Fixed Right
                </a>
            </li>
			<li>
			<li class="nav-item">
			<a class="nav-link" href="logout.php">Logout</a>
			</li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="jumbotron">
        <h4 class="display-4">
            <h3>Welcome to Client Homepage. <?php echo $firstname . " " . $lastname; ?></h3>
    <a href="logout.php">Logout </a>
            <br>
            <small>Fixed to Left or Right</small>
        </h4>
    </div>

    <footer>
        Repository maintained by <a href="https://github.com/mladenplavsic">mladenplavsic</a>
    </footer>

</div>

</body>
</html>
