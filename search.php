<?php 

session_start();

if( !isset($_SESSION["login"])) {
  header('Location:login.php');
  exit;
}

include('function.php');
$keyword = $_GET['keyword'];
$query = mysqli_query($connect, "SELECT * FROM santri WHERE nama LIKE'%$keyword%' OR email='$keyword' ");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

 ?>

 <html>
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/daftar.png">
 	<title>Daftar Santri</title>
 </head>
 <body>
 	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <!-- <a class="nav-link rounded shadow bg-warning text-light" href="index.php">Home <span class="sr-only">(current)</span></a> -->
	      </li>
	      </ul>

	      <a class="nav-link rounded shadow mr-sm-2 bg-primary text-light" href="#">Logout</a>
	  </div>
	</nav>
 	<!-- <div class="container"> -->
 	<div class="container">	
 		<br>
 		<h1 class="bg-secondary text-light text-center shadow rounded"><a class='text-light'  style="text-decoration: none;" href="read.php">Daftar Santri Pondok Programmer</a></h1><br>
 			<center><a class="btn btn-info shadow" href="form-create.php">Tambah Data [+]</a></center><br>
 				
			<form method="get" action="search.php" class="form-inline">
    			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" value="<?= $_GET['keyword']; ?>" required>
    			<button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search">Search</button>
  			</form>

 				<table  border='1' cellpadding="12" class="border border-light shadow">
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
	 						<a class="btn btn-info" href="detail.php?id=<?= $db['id']; ?>">Detail</a>
	 						<a class="btn btn-warning" href="form-update.php?id=<?= $db['id']; ?>">Update</a>
	 						<a class="btn btn-danger" href="delete.php?id=<?= $db['id']; ?>" onclick="return confirm('Apakah Anda Yakin ingin Hapus?')">Delete</a>	

	 					</td>
	 				</tr>
	 			<?php endforeach; ?>
	 			
	 			</table>
	 			<hr>
	 			<nav aria-label="...">
				  <ul class="pagination">
				    <li class="page-item">
				      <a class="page-link" href="#" tabindex="-1">Previous</a>
				    </li>

				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item ">
				      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
				    </li>

				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#">Next</a>
				    </li>
				  </ul>
				</nav>
	 			<hr>
 	</div>
 	
 </body>
 </html>