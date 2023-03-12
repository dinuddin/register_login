<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='../assets/image/1087815.png' rel='shortcut icon'>
		<title>Registration</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
<h3 align="center">Registrasi</h3></br>
    <form action="process_registration.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="input_username">Username</label>
			<input type="text" name="username" class="form-control" placeholder="NIS/NISN Anda" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
		<div class="mb-3">
            <label class="form-label" for="input_namadepan">Nama Depan</label>
            <input type="text" class="form-control" name="firstname" placeholder="Nama Depan" required>
			<input type="hidden" class="form-control" name="usertype" value="siswa" required>
        </div>
		<div class="mb-3">
            <label class="form-label" for="input_namabelakang">Nama Belakang</label>
            <input type="text" class="form-control" name="lastname" placeholder="Nama Belakang" required>
			<input type="hidden" class="form-control" name="usertype" value="siswa" required>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
		</br></br>
	<input type=button onClick="location.href='login.php'"  class="btn btn-success" value='Sudah Registrasi'>
    </form>
</div>
</div>
</body>
</html>