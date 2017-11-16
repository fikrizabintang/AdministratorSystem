<?php
if(isset($_POST['simpan'])){
	
	include('konekgo.php');

	$nama_admin		= $_POST['nama_admin'];
	$username		= $_POST['username'];
	$password		= $_POST['password'];
	
	$input = "INSERT INTO tb_admin VALUES(NULL, '$nama_admin', '$username', '$password')";
	$hasil = $conn->query($input);
	//jika query input sukses
	if($hasil){
		header('Location: kelola_admin.php?cekgo=nambah');
	}else{
		header('Location: kelola_admin.php?cekgo=errror');
	}
}else{	//jika tidak terdeteksi tombol tambah di klik
	echo '<script>window.history.back()</script>';

}
?>