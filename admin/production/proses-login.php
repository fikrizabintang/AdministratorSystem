<?php
session_start();

include('konekgo.php');

//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	header('location:login.php?hayo=kosong');
} else if (empty($username)) {
	//kalau username saja yang kosong
	header('location:login.php?hayo=user');
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:login.php?hayo=pass');
}

$sql = "select * from tb_admin where username = '$username' and password='$password'";
$hasil = $conn->query($sql);

if($hasil->num_rows == 1) {
	$_SESSION['username'] = $username;
	header('location: index.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?hayo=salah');
}
?>