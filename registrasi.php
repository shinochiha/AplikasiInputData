<?php 
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
	<title>Registrasi</title>
</head>
<body>

	<div class="container">
		<br>
		<h1 class="bg-secondary text-light text-center shadow rounded">Registrasi</h1>
		<hr>
		
		<form action="" method="post">
		  <div class="form-group">	
			<label for="1"><b>Username</b></label>
				<input class="form-control" type="text" name="username" id="1" required autofocus autocomplete="off">
				<br>
			<label for="2"><b>Password</b></label>
				<input class="form-control" type="password" name="password" id="2" required autocomplete="off">
				<br>
			<label for="3"><b>Confirm Password</b></label>
				<input class="form-control" type="password" name="password2" id="3" required autocomplete="off">
				<br>
			<button class="btn btn-primary" type="submit" name="register">Register</button>
			<p class="float-right"><i>Sudah punya akun, Login</i> <a href="login.php"><b>disini</b></a></p>
		  </div>
		</form>
		
	
	</div>
</body>
</html>