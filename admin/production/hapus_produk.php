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
		include('konekgo.php');
		
		$id = $_GET['id'];
		
		$cek = "SELECT id_artikel FROM tb_artikel WHERE id_artikel ='$id'";
		$result = $conn->query($cek);
		
		if($result->num_rows == 0){
			echo '<script>window.history.back()</script>';
		} else {
			$del = "DELETE FROM tb_artikel WHERE id_artikel='$id'";
			$godel = $conn->query($del);
			
			//jika query DELETE berhasil
			if($godel){
				header('Location: kelola_produk.php?cekgo=hapus');
			} else {
				header('Location: kelola_produk.php?cekgo=error');
			}
			
		}
?>