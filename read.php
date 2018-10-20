<?php 

session_start();

if( !isset($_SESSION["login"])) {
	// header('Location:login.php');
	echo "<script>
			alert('Silahkan Login terlebih dahulu'); 
			document.location='login.php';	
		</script>";
	exit;
}

include('function.php');

// pagination
// konfigurasi
 $jumlahDataPerhalaman = 4;
 $result = mysqli_query($connect, "SELECT * FROM santri");
 $jumlahData = mysqli_num_rows($result);
 $jumlahHalaman = ceil($jumlahData) / $jumlahDataPerhalaman;
 
 
// ternary operator

 $halamanAktif = ( isset($_GET['halaman']) ) ? $_GET['halaman'] : 1;
 $awalData = ( $jumlahDataPerhalaman * $halamanAktif ) - $jumlahDataPerhalaman;

//  if (isset($_GET['halaman']) ) {
//  	$halamanAktif = $_GET['halaman'];

// } else {
// 	$halamanAktif = 1;
// }



$query = mysqli_query($connect, "SELECT * FROM santri ORDER BY id DESC  LIMIT $awalData, $jumlahDataPerhalaman");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
$jumlah = mysqli_num_rows($query);

 ?>

 <html>
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="img/daftar.png">
 	<title>Daftar Santri</title>
 </head>
 <body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	      <!--   <a class="nav-link rounded shadow bg-warning text-light" href="index.php">Home <span class="sr-only">(current)</span></a> -->
	      </li>
	      </ul>

	      <a class="nav-link rounded shadow mr-sm-2 bg-primary text-light" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');">Logout</a>
	  </div>
	</nav>




		<br>
 	<!-- <div class="container"> -->
 	<div class="container">	
 		
 		<h1 class="bg-info text-center shadow rounded"><a class='text-light nav-link' href="read.php">Daftar Santri Pondok Programmer</a></h1><br>
 			<center><a class="btn btn-outline-info shadow" href="form-create.php">Tambah Data [+]</a></center><br>
 				
			<form method="get" action="search.php" class="form-inline">
    			<input class="form-control mr-sm-2 shadow" type="search" placeholder="Search" aria-label="Search" name="keyword" autofocus autocomplete="off" required>
    			<button class="btn btn-outline-primary my-2 my-sm-0 shadow" type="submit" name="search">Search</button>
  			</form>

 				<table  border='1' cellpadding="13" class="border border-light shadow">
	 				<tr class="bg-primary text-light">
	 					<th>Nama</th>
	 					<th>Email</th>
	 					<th>No.Hp</th>
	 					<th>Tgl Lahir</th>
	 					<th>Kota/Kab</th>
	 					<th>JK</th>
	 					<th class="text-center">Aksi</th>
	 				</tr>

				<?php foreach ($data as $db) : ?>
	 				<tr>
	 					<td><?= $db['nama']; ?></td>
	 					<td><?= $db['email']; ?></td>
	 					<td><?= $db['no_hp']; ?></td>
	 					<td><?= $db['tanggal_lahir']; ?></td>
	 					<td><?= $db['alamat']; ?></td>
	 					<td><?= $db['jenis_kelamin']; ?></td>
	 					<td>
	 						<a class="btn btn-info shadow" href="detail.php?id=<?= $db['id']; ?>">Detail</a>
	 						<a class="btn btn-warning text-white shadow" href="form-update.php?id=<?= $db['id']; ?>">Update</a>
	 						<a class="btn btn-danger shadow" href="delete.php?id=<?= $db['id']; ?>" onclick="return confirm('Apakah Anda Yakin ingin Hapus?')">Delete</a>	

	 					</td>
	 				</tr>
	 			<?php endforeach; ?>
	 			
	 			</table>
	 			<hr>
	 			<h6><b><i>Jumlah Santri</i></b> : <?= $jumlah ?> </h6>

		<!-- navigasi -->

			<nav aria-label="">
				<ul class="pagination shadow">
					<li class="page-item">
				<?php if($halamanAktif > 1) : ?>
				 	<a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">Previous</a>
				<?php endif; ?>
				 	</li>

	 			<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>

					<li class="page-item">	


	 			  	<?php if( $i == $halamanAktif ) : ?>	 
						<a class="page-link  bg-primary text-light" href="?halaman=<?= $i; ?>" class='text-danger'><?= $i; ?></a>
				  	<?php else : ?>
				  		<a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
				  	<?php endif; ?>

	 				</li>
	 			<?php endfor; ?>

				
				<li class="page-item">
	 			<?php if($halamanAktif < $jumlahHalaman) : ?>
				 	<a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">Next</a>
				 <?php endif; ?>
				</li>	
				 </ul>

			</nav>
	
 	</div>
 	
 </body>
 </html>