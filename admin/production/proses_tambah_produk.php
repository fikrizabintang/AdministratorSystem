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

</body>
</html>
<?php
//Buat konfigurasi upload
//Folder tujuan upload file
include('konekgo.php');
$eror		= false;
$folder		= './produk/';
//type file yang bisa diupload
$file_type	= array('jpg','jpeg','png','gif','bmp');
//tukuran maximum file yang dapat diupload
$max_size	= 1000000000; // 1MB
if(isset($_POST['simpan'])){
	//Mulai memorises data
	$file_name	= $_FILES['data_upload']['name'];
	$file_size	= $_FILES['data_upload']['size'];
	
	//catat nama file ke database
		if($_FILES['data_upload']['tmp_name'] == ""){
				$data_upload = "";
			}
		$judul_artikel = $_POST['judul_artikel'];
		$artikel = $_POST['artikel'];
		

		move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name);

		$catat = "INSERT INTO tb_artikel (judul_artikel,artikel,gambar) VALUES ('$judul_artikel','$artikel','$file_name')";

		$hasil = $conn->query($catat);

		//jika query input sukses
		if($hasil){
			header('Location: kelola_produk.php?cekgo=nambah');
		}else{
			header('Location: kelola_produk.php?cekgo=errror');
		}
	} else{
		//echo "Proses upload eror";
	}
?>