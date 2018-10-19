<?php 

session_start();

if( !isset($_SESSION["login"])) {
  header('Location:login.php');
  exit;
}

include('function.php');

$nama = htmlspecialchars(ucwords($_POST['nama']));
$email = htmlspecialchars($_POST['email']);
$no = htmlspecialchars($_POST['no_hp']);
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = htmlspecialchars($_POST['alamat']);
$jenis_kelamin = $_POST['jenis_kelamin'];

$insert = mysqli_query($connect, "INSERT INTO santri SET 
							nama='$nama', 
							email='$email', 
							no_hp='$no', 
							tanggal_lahir='$tanggal_lahir', 
							alamat='$alamat', 
							jenis_kelamin='$jenis_kelamin' ");


if ($insert) {
	echo "<script>
				alert('Data berhasil di tambahkan');
				document.location= 'read.php';
			</script>";

} else {
	echo 	"<script>
				alert('Input Data gagal');
				document.location= 'form-create.php';
			</script>";
}

 ?>