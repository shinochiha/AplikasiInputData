<?php 

// koneksi ke database
$connect = mysqli_connect('localhost', 'fitradev', 'jakarta123', 'ngulang');


function registrasi($data) {
	global $connect;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($connect, $data["password"]);
	$password2 = mysqli_real_escape_string($connect, $data['password2']);

// cek konfirmasi password
if($password !== $password2 ) {
	echo "<script>
			alert('konfirmasi password tidak sesuai');
		 </script>";
	return false;
}

//vcek username sudah ada atau belum
$result = mysqli_query($connect, "SELECT username FROM users WHERE username = '$username' ");

if( mysqli_fetch_assoc($result) ) {
	echo "<script> alert('username sudah terdaftar!');</script>";
	return false;
}

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// tambahkan user baru ke database
mysqli_query($connect, "INSERT INTO users SET username='$username', password='$password' ");

return mysqli_affected_rows($connect); 

}




 ?>