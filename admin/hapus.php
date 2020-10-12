<?php 
include "../koneksi.php";
if(isset($_GET['mk'])){
	$kodemk = base64_decode($_GET['kodemk']);
	$query = mysqli_query($konek,"DELETE FROM `matkul` WHERE `matkul`.`id_matkul` = '$kodemk'");
	$query = mysqli_query($konek,"DELETE FROM `absen` WHERE `absen`.`id_makul` = '$kodemk'");
	echo "	<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=matkul.php'>
			</head>
			<body>
			<script>
			    alert('Sukses');
			</script>
			</body>
			</html>";
}

if(isset($_GET['mhs'])){
	$nim = base64_decode($_GET['nim']);
	$query = mysqli_query($konek,"DELETE FROM `mahasiswa` WHERE `mahasiswa`.`nim` = '$nim'");
	$query = mysqli_query($konek,"DELETE FROM `user` WHERE `user`.`username` = '$nim'");
	echo "	<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=mahasiswa.php'>
			</head>
			<body>
			<script>
			    alert('Sukses');
			</script>
			</body>
			</html>";
}

if(isset($_GET['dsn'])){
	$nip = base64_decode($_GET['nip']);
	$query = mysqli_query($konek,"DELETE FROM `dosen` WHERE `dosen`.`nip` = '$nip'");
	$query = mysqli_query($konek,"DELETE FROM `user` WHERE `user`.`username` = '$nip'");
	echo "	<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=dosen.php'>
			</head>
			<body>
			<script>
			    alert('Sukses');
			</script>
			</body>
			</html>";
}

?>