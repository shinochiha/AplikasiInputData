<?php 

session_start();

if( isset($_SESSION["login"])) {
  // header('Location:read.php');
	echo "<script>
			alert('Loguot dulu Cuy!'); 
			document.location='read.php';	
		</script>";
  exit;
}


require 'function.php';



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

		<?php if(isset($error)) : ?>
			<p class="text-danger">Username/Password Salah</p>
		<?php endif; ?>	

			<form action="" method="post">
				<label for="1">Username</label>
				<input class="form-control" type="text" name="username" id="1" required>
				<br>
				<label for="2">Password</label>
				<input class="form-control" type="password" name="password" id="2" required>
				<br>

				<button class="btn btn-success shadow" type="submit" name="login">Login</button>
				<p class="float-right"><i>Belum punya akun register</i> <a href="registrasi.php"><b>disini</b></a></p>
				
			</form>
	</div>
</body>
</html>