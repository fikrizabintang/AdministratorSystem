<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
	include('konekgo.php');

	if(isset($_POST['edit'])){

				$id_admin		= $_POST['id_admin'];
				$nama_admin 	= $_POST['nama_admin'];
				$username		= $_POST['username'];
				$password 		= $_POST['password'];

				$catat = "UPDATE `tb_admin` SET `nama_admin` = '$nama_admin', `username` = '$username',`password` = '$password' WHERE `tb_admin`.`id_admin` = $id_admin";

				$hasil = $conn->query($catat);
				
				if ($hasil) {
					header('Location: kelola_admin.php?cekgo=ubah');
				} else {
					header('Location: kelola_admin.php?cekgo=error');
				}
		}
	?>
</body>
</html>
