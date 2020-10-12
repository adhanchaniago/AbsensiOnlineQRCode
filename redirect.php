<?php
ob_start();
session_start();
if($_SESSION['level']=='dosen'){
  header('location:dosen');
}elseif ($_SESSION['level']=='admin') {
  header('location:admin');
}elseif ($_SESSION['level']=='mahasiswa') {
  header('location:mahasiswa');
}
?>