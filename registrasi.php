<?php 
// session_start();

// if( !isset($_SESSION["login"])) {
//   header('Location:login.php');
//   exit;
// }

require 'function.php';

if(isset($_POST['register'])) {

	if( registrasi($_POST) > 0 ) {
		echo "<script> 
					alert('register berhasil');
					document.location='login.php';
			  </script>";
	} else {
		echo mysqli_error($connect);
	}
}

 ?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="img/register.png">
	<title>Registrasi</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link rounded shadow bg-warning text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      </ul>

	  </div>
	</nav>

	<div class="container">
		<br>
		<h1 class="bg-info text-light text-center shadow rounded"><a class="nav-link text-light" href="registrasi.php">Registrasi</a></h1>
		<hr>
		
		<form action="" method="post">
		  <div class="form-group">	
			<label for="1"><b>Username <small class="text-danger">*</small></b></label>
				<input class="form-control" type="text" name="username" id="1" required autofocus autocomplete="off" placeholder="Username">
				<small id="emailHelp" class="form-text text-muted text-success">Minimal 6 karakter, tidak menerima selain angka dan huruf</small>
			</div>

			<div class="form-group">
			<label for="2"><b>Password <small class="text-danger">*</small></b></label>
				<input class="form-control" type="password" name="password" id="2" required autocomplete="off" placeholder="Password">
				<small id="emailHelp" class="form-text text-muted text-success">Minimal 6 karakter</small>
			</div>

			<div class="form-group">
			<label for="3"><b>Confirm Password <small class="text-danger">*</small></b></label>
				<input class="form-control" type="password" name="password2" id="3" required autocomplete="off" placeholder="Confirm Password">
				<small id="emailHelp" class="form-text text-muted text-success">Pastikan sama seperti di atas</small>
			</div>
			
			<div class="btn-group">
				<button class="btn btn-primary" type="submit" name="register">Register</button>
			</div>
			<!-- <p class="float-right"><i>Sudah punya akun, Login</i> <a href="login.php"><b>disini</b></a></p> -->
			<small id="1" class="form-text text-muted float-right">Sudah memiliki akun, Login <a href="login.php"><i>disini</i></a></small>
		  </div>
		</form>
	</div>
</body>
</html>
