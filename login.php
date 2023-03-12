<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='../assets/image/1087815.png' rel='shortcut icon'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
    <style type="text/css">
	/* Required for proper centering */
	html, body{
    height:100vh;
    width:100vw;
	background: rgb(3,221,226);
	background: radial-gradient(circle, rgba(3,221,226,1) 0%, rgba(22,96,222,1) 35%, rgba(236,116,231,1) 100%);
	}
	</style>
</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh">	
<div class="row d-flex align-items-center" style="overflow:hidden">
<input type=button onClick="location.href='../beranda.php'"  class="btn btn-success" value='Beranda'></br></br>
<h3 align="center">Login</h3></br>
    <form action="process_login.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="input_username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="NIS/NISN Anda" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkRemember">
                <label class="form-check-label" for="checkRemember">Remember me</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
		</br></br>
	<input type=button onClick="location.href='register.php'"  class="btn btn-success" value='Belum Registrasi'>
    </form>
	
</div>
</div>
</body>
</html>