<?php 

session_start();

require 'function.php';

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id

	$result = mysqli_query($connect, "SELECT username FROM users WHERE id =$id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan usernmae
	if ( $key === hash('sha256', $row['username']) ) {

		$_SESSION['login'] = true ;
	}


}



if( isset($_SESSION["login"])) {
  // header('Location:read.php');
	echo "<script>
			alert('Loguot dulu Cuy!'); 
			document.location='read.php';	
		</script>";
  exit;
}






if(isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' ");

	// cek usernmae
	if(mysqli_num_rows($result) === 1) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row['password']) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if (isset($_POST['remember'])) {
				// buat cookie

				setcookie('id', $row['id'], time() + 60);
				setcookie('key', hash('sha256', $row['username']), time() + 60);
			}

			header('Location: read.php');
			exit;

		}
	}

	$error = true;
}

 ?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="img/login.png">	
	<title>Login</title>
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
		<h1 class="bg-secondary text-light text-center shadow rounded">Login</h1>
		<hr>
		<?php if(isset($error)) : ?>
			<p class="text-danger alert alert-danger">Username/Password Salah</p>
		<?php endif; ?>	

			<form action="" method="post">
				<div class="form-group">
				<label for="1"><b>Username</b></label>
				<input class="form-control" type="text" name="username" id="1" placeholder="Enter username" required autofocus>
				<small id="1" class="form-text text-success">Pastikan kamu sudah memiliki akun</small>
			</div>

			<div class="form-group">
				<label for="2"><b>Password</b></label>
				<input class="form-control" type="password" name="password" id="2" required placeholder="Password" >
			</div>

			<div class="form-group form-check">
		  		  <input type="checkbox" class="form-check-input " id="exampleCheck1" name="remember">
		    		<label class="form-check-label" for="exampleCheck1"><small class="text-muted">Remember me</small></label>
		    		<small id="1" class="form-text text-muted float-right"><a href="#">Lupa Password</a></small>
		  	</div>

				<button class="btn btn-primary shadow" type="submit" name="login">Login</button>
				<!-- <p class="float-right"><i>Belum punya akun register</i> <a href="registrasi.php"><b>disini</b></a></p> -->
				<small id="1" class="form-text text-muted float-right">Belum memiliki akun, Register <a href="registrasi.php"><i>disini</i></a></small>

				
			</form>
	</div>
</body>
</html>