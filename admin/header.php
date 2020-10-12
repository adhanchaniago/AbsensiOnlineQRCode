<?php
  ob_start();
  session_start();
  if(!isset($_SESSION['login'])){
    header('location:../login.php');
  }elseif ($_SESSION['level']=='mahasiswa') {
    header('location:../mahasiswa');
  }elseif ($_SESSION['level']=='dosen') {
    header('location:../dosen');
  }
  include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin - SIBOMA UTM</title>

  <!-- Custom fonts for this template-->
  <link href="../mahasiswa/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../mahasiswa/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../mahasiswa/css/sb-admin.css" rel="stylesheet">

</head>