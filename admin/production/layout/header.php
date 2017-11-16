<?php
    include('konekgo.php');
    $cekgo = 0;

    session_start();
    
    //jika session username belum dibuat, atau session username kosong
    if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
        //redirect ke halaman login
        header('location: login.php?hayo=logout');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dinas Kelautan dan Perikanan Kota Semarang</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/img.png">