<?php 
include('function.php');

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM santri WHERE id='$id'");
$details = mysqli_fetch_all($query, MYSQLI_ASSOC);

 ?>

 <html>
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 	<title>Detail</title>
 </head>
 <body>
 	<div class="container">
 		<br>
 		<h1 class="bg-secondary text-light text-center shadow rounded">Detail Santri</h1>
 		<br>
	 	<table class="table table-scriped border-light shadow">
	 	<?php foreach($details as $detail ) : ?>
	 		<tr>
	 			<th>Nama</th>
	 			<td><?= $detail['nama'];  ?></td>
	 		</tr>
	 		<tr>
	 			<th>Email</th>
	 			<td><?= $detail['email'] ?></td>
	 		</tr>
	 		<tr>
	 			<th>No.Hp</th>
	 			<td><?= $detail['no_hp'] ?></td>
	 		</tr>
	 		<tr>
	 			<th>Tanggal Lahir</th>
	 			<td><?= $detail['tanggal_lahir'] ?></td>
	 		</tr>
	 		<tr>
	 			<th>Alamat</th>
	 			<td><?= $detail['alamat'] ?></td>
	 		</tr>
	 		<tr>
	 			<th>Jenis Kelamin</th>
	 			<td><?= $detail['jenis_kelamin'] ?></td>
	 		</tr>
	 	<?php endforeach; ?>
	 		
	 	</table>
	 	<a class="btn btn-primary" href="read.php">Kembali</a>
 	</div>
 	
 </body>
 </html>