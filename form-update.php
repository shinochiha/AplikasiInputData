<?php 
session_start();

if( !isset($_SESSION["login"])) {
  header('Location:login.php');
  exit;
}

include('function.php');

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM santri WHERE id='$id' ");
$db = mysqli_fetch_all($query, MYSQLI_ASSOC);


 ?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="img/update.png">
	<title>Update Data</title>
</head>
<body>
	<div class="container">
		<br>
		<h1 class="bg-info text-light text-center shadow rounded"><a class="nav-link text-light" href="">Update Data</a></h1>
		<hr>
		<form action="update.php" method="post">
			
			<input type="hidden" name="id" value="<?= $db[0]['id']; ?>">

			<label for="1"><b>Nama</b></label>
			<input class="form-control" type="text" name="nama" id="1" value="<?= $db[0]['nama']; ?>" required autofocus autocomplete="off">
			<br>
			<label for="2"><b>Email</b></label>
			<input class="form-control" type="eamil" name="email" id="2" value="<?= $db[0]['email']; ?>" required autocomplete="off">
			<br>
			<label for="3"><b>No.Hp</b></label>
			<input class="form-control" type="number" name="no_hp" id="3" value="<?= $db[0]['no_hp']; ?>" required autocomplete="off"> 
			<br>
			<label for="4"><b>Tanggal Lahir</b></label>
			<input class="form-control" type="date" name="tanggal_lahir" id="4" value="<?= $db[0]['tanggal_lahir']; ?>" required>
			<br>
			<label for="5"><b>Kota/Kab</b></label>
			
			<select class="form-control" name="alamat" id="5">
				<option value="Bekasi" <?= $db[0]['alamat'] == 'Bekasi' ? 'selected' : '-'; ?>>Bekasi</option>
				<option value="Jakarta" <?= $db[0]['alamat'] == 'Jakarta' ? 'selected' : '-'; ?> >Jakarta</option>
				<option value="Yogyakarta" <?= $db[0]['alamat'] == 'Yogyakarta' ? 'selected' : '-'; ?>>Yogyakarta</option>
				<option value="Bantul" <?= $db[0]['alamat'] == 'Bantul' ? 'selected' : '-'; ?> >Bantul</option>
				<option value="Medan" <?= $db[0]['alamat'] == 'Medan' ? 'selected' : '-'; ?>>Medan</option>
				<option value="Tegal" <?= $db[0]['alamat'] == 'Tegal' ? 'selected' : '-'; ?>>Tegal</option>
				<option value="Temanggung" <?= $db[0]['alamat'] == 'Temanggung' ? 'selected' : '-'; ?>>Temanggung</option>
				<option value="Indramayu" <?= $db[0]['alamat'] == 'Indramayu' ? 'selected' : '-'; ?>>Indramayu</option>
				<option value="Makasar"<?= $db[0]['alamat'] == 'Indramayu' ? 'selected' : '-'; ?>>Makasar</option>
				<option value="Tanggerang" <?= $db[0]['alamat'] == 'Tanggerang' ? 'selected' : '-'; ?>>Tanggerang</option>
				<option value="Bogor" <?= $db[0]['alamat'] == 'Bogor' ? 'selected' : '-'; ?>>Bogor</option>
				<option value="Depok"<?= $db[0]['alamat'] == 'Depok' ? 'selected' : '-'; ?>>Depok</option>
				<option value="Bandung" <?= $db[0]['alamat'] == 'Bandung' ? 'selected' : '-'; ?>>Bandung</option>
				<option value="Manado" <?= $db[0]['alamat'] == 'Manado' ? 'selected' : '-'; ?>>Manado</option>
				<option value="Bengkulu" <?= $db[0]['alamat'] == 'Bengkulu' ? 'selected' : '-'; ?>>Bengkulu</option>
				<option value="Ngawi" <?= $db[0]['alamat'] == 'Ngawi' ? 'selected' : '-'; ?>>Ngawi</option>
				<option value="Klaten" <?= $db[0]['alamat'] == 'Klaten' ? 'selected' : '-'; ?>>Klaten</option>
				<option value="Surakarta" <?= $db[0]['alamat'] == 'Surakarta' ? 'selected' : '-'; ?>>Surakarta</option>
				<option value="Palembang" <?= $db[0]['alamat'] == 'Palembang' ? 'selected' : '-'; ?>>Palembang</option>
				<option value="Surabaya" <?= $db[0]['alamat'] == 'Surabaya' ? 'selected' : '-'; ?>>Surabaya</option>
				<option value="Kupang" <?= $db[0]['alamat'] == 'Kupang' ? 'selected' : '-'; ?>>Kupang</option>
				<option value="Tulungagung" <?= $db[0]['alamat'] == 'Tulungagung' ? 'selected' : '-'; ?>>Tulungagung</option>
				<option value="Cirebon" <?= $db[0]['alamat'] == 'Cirebon' ? 'selected' : '-'; ?>>Cirebon</option>
			</select>
			<br>
			<label for="6"><b>Jenis Kelamin</b></label>
			<select class="form-control" name="jenis_kelamin" id="6" required="">
				<option value="-">-</option>
				<option value="Pria" <?= $db[0]['jenis_kelamin'] == 'Pria' ? 'selected' : '-'; ?>>Pria</option>
				<option value="Wanita" <?= $db[0]['jenis_kelamin'] == 'Wanita' ? 'selected' : '-'; ?>>Wanita</option>
			</select>
			<br>
			<button class="btn btn-success" type="submit">Update Data</button>
			<a class="btn btn-info float-right" href="read.php">Kembali</a>
		</form>
	</div>

	
</body>
</html>