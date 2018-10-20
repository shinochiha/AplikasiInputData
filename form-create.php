<?php 
session_start();

if( !isset($_SESSION["login"])) {
  header('Location:login.php');
  exit;
}

include('function.php');

 ?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="img/tambah.png">
	<title>Tambah Data</title>
</head>
<body>
	<div class="container">
		<br>
		<h1 class="bg-info text-light text-center shadow rounded"><a class="nav-link text-light" href="">Tambah Data</a></h1>
		<hr>
		<form action="create.php" method="post">
			<label for="1"><b>Nama</b></label>
			<input class="form-control" type="text" name="nama" id="1" required autofocus autocomplete="off">
			<br>
			<label for="2"><b>Email</b></label>
			<input class="form-control" type="eamil" name="email" id="2" required autocomplete="off">
			<br>
			<label for="3"><b>No.Hp</b></label>
			<input class="form-control" type="number" name="no_hp" id="3" required autocomplete="off">
			<br>
			<label for="4"><b>Tanggal Lahir</b></label>
			<input class="form-control" type="date"  name="tanggal_lahir" id="4" required autocomplete="off">
			<br>
			<label for="5"><b>Kota/Kab</b></label>

			<select class="form-control" name="alamat" id="5">
				<option value="-">-</option>
				<option value="Bekasi">Bekasi</option>
				<option value="Jakarta">Jakarta</option>
				<option value="Yogyakarta">Yogyakarta</option>
				<option value="Bantul">Bantul</option>
				<option value="Medan">Medan</option>
				<option value="Tegal">Tegal</option>
				<option value="Temanggung">Temanggung</option>
				<option value="Indramayu">Indramayu</option>
				<option value="Makasar">Makasar</option>
				<option value="Tanggerang">Tanggerang</option>
				<option value="Bogor">Bogor</option>
				<option value="Depok">Depok</option>
				<option value="Bandung">Bandung</option>
				<option value="Manado">Manado</option>
				<option value="Bengkulu">Bengkulu</option>
				<option value="Ngawi">Ngawi</option>
				<option value="Klaten">Klaten</option>
				<option value="Surakarta">Surakarta</option>
				<option value="Palembang">Palembang</option>
				<option value="Surabaya">Surabaya</option>
				<option value="Kupang">Kupang</option>
				<option value="Tulungagung">Tulungagung</option>
				<option value="Cirebon">Cirebon</option>
			</select>
			<br>
			<label for="6"><b>Jenis Kelamin</b></label>
			<select class="form-control" name="jenis_kelamin" id="6" required="">
				<option value="-">-</option>
				<option value="Pria">Pria</option>
				<option value="Wanita">Wanita</option>
			</select>
			<br>
			<button class="btn btn-success" type="submit" name="tambahdata">Tambah Data</button>
			<a class="btn btn-info float-right" href="read.php">Kembali</a>
		</form>
	</div>

	
</body>
</html>