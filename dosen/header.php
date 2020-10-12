<?php
ob_start();
session_start();
if(!isset($_SESSION['login'])){
  header('location:../login.php');
}elseif ($_SESSION['level']=='admin') {
  header('location:../admin');
}elseif ($_SESSION['level']=='mahasiswa') {
  header('location:../mahasiswa');
}
$idd = $_SESSION['id'];
include "../koneksi.php";
$sqlNama = mysqli_query($konek, "SELECT * FROM dosen WHERE id=$idd");
$d = mysqli_fetch_array($sqlNama);
$nama = $d['nama'];
$nip = $d['nip'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Dosen | Absensi Online Mahasiswa</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  

</head>