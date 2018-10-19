<?php 

include('function.php');

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM santri WHERE id='$id' ");

if ($delete)
	header('Location:read.php');
else
	echo "Delete Gagal";

 ?>