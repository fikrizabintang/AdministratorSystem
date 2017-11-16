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
	$eror		= false;
	$folder		= './produk/';
	//type file yang bisa diupload
	$file_type	= array('jpg','jpeg','png','gif','bmp');
	//tukuran maximum file yang dapat diupload
	$max_size	= 1000000000; // 1MB

	if(isset($_POST['edit'])){
	//Mulai memorises data
	if($_FILES['data_upload']['tmp_name'] == ""){
				$data_upload = "";
			}

	$file_name	= $_FILES['data_upload']['name'];
	if ($file_name == ""){
			$file_name = $_POST['inigo'];
		} else {
			$file_name	= $_FILES['data_upload']['name'];
			move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name);
		}

	$file_size	= $_FILES['data_upload']['size'];
	//cari extensi file dengan menggunakan fungsi explode
	$explode	= explode('.',$file_name);
	$extensi	= $explode[count($explode)-1];


				$id_artikel		= $_POST['id_artikel'];
				$judul_artikel 	= $_POST['judul_artikel'];
				$artikel		= $_POST['artikel'];;

				$catat = "UPDATE `tb_artikel` SET `judul_artikel` = '$judul_artikel', `artikel` = '$artikel',`gambar` = '$file_name' WHERE `tb_artikel`.`id_artikel` = $id_artikel";

				$hasil = $conn->query($catat);
				
				if ($hasil) {
					header('Location: kelola_produk.php?cekgo=ubah');
				} else {
					header('Location: kelola_produk.php?cekgo=error');
				}
		}
	?>
</body>
</html>