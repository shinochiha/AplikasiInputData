<?php 

include('function.php');

$id 			= $_POST['id'];
$nama 			= htmlspecialchars(ucwords($_POST['nama']));
$email 			= htmlspecialchars($_POST['email']);
$no  			= htmlspecialchars($_POST['no_hp']);
$tanggal_lahir	= $_POST['tanggal_lahir'];
$alamat			= htmlspecialchars($_POST['alamat']);
$jenis_kelamin	= $_POST['jenis_kelamin'];

$update = mysqli_query($connect, "UPDATE santri SET 
												nama='$nama', 
												email='$email', 
												no_hp='$no', 
												tanggal_lahir='$tanggal_lahir', 
												alamat='$alamat', 
												jenis_kelamin='$jenis_kelamin' WHERE id='$id' ");



if ($update) {
	echo "<script>
				alert('Data berhasil di update');
				document.location= 'read.php';
			</script>";

} else {
	echo 	"<script>
				alert('Update Data gagal');
				document.location= 'read.php';
			</script>";
}

 ?>