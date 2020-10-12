<?php 
include "../koneksi.php";

if(isset($_POST['dosen'])) {
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
      $pesan = "Field Nama Hanya Huruf dan spasi yang diizinkan";
      echo "  <!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=tbhdosen.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
	}elseif(!preg_match("/^[0-9]*$/",$nip)) {
      $pesan = "NIP tidak valid";
      echo "  <!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=tbhdosen.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
	}else{
		$queryuser = mysqli_query($konek,"INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES (NULL, '$nip', MD5('$nip'), 'dosen');");
		$queryuser = mysqli_query($konek,"SELECT * FROM user WHERE username='$nip'");
		$data = mysqli_fetch_array($queryuser);
		$query = mysqli_query($konek,"INSERT INTO `dosen` (`id`, `nip`, `nama`, `alamat`) VALUES ($data[id], '$nip', '$nama', '$alamat');");
		$pesan = "Entry Data Sukses";
		echo "  <!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=dosen.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
	}
}



if(isset($_POST['mahasiswa'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$prodi = $_POST['prodi'];
	$angkatan = $_POST['angkatan'];
	$alamat = $_POST['alamat'];

	if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
      $pesan = "Field Nama Hanya Huruf dan spasi yang diizinkan";
      echo "<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=tbhmhs.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
	}elseif (!preg_match("/^[a-zA-Z ]*$/",$prodi)) {
      $pesan = "Field Prodi Hanya Huruf dan spasi yang diizinkan";
      echo "<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=tbhmhs.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
		}elseif(!preg_match("/^[0-9]*$/",$angkatan)) {
      $pesan = "Field Angkatan tidak valid";
      echo "  <!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=tbhmhs.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
	}elseif(!preg_match("/^[0-9]*$/",$nim)) {
      $pesan = "NIM tidak valid";
      echo "  <!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=tbhmhs.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
		}else{
		$queryuser = mysqli_query($konek,"INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES (NULL, '$nim', MD5('$nim'), 'mahasiswa');");
		$queryuser = mysqli_query($konek,"SELECT * FROM user WHERE username='$nim'");
		$data = mysqli_fetch_array($queryuser);
		$query = mysqli_query($konek,"INSERT INTO `mahasiswa` (`id`, `nim`, `nama`,`prodi`,`angkatan`, `alamat`) VALUES ($data[id], '$nim', '$nama','$prodi','$angkatan', '$alamat');");
		$pesan = "Entry Data Sukses";
		echo "<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=mahasiswa.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
	}
}



if(isset($_POST['matkul'])){
	$kodemk = $_POST['kodemk'];
	$mk = $_POST['mk'];
	$nip = $_POST['nip'];
	$hari = $_POST['hari'];
	$jam = $_POST['jam'];
	$ruang = $_POST['ruang'];
	$sks = $_POST['sks'];

	if (!preg_match("/^[a-zA-Z0-9]*$/",$kodemk)) {
      $pesan = "Kode Mata Kuliah Tidak Valid";
      echo "<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=tbhmk.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
  	}elseif (!preg_match("/^[a-zA-Z ]*$/",$mk)) {
  		$pesan = "Nama Mata Kuliah Tidak Valid";
  		echo "<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=tbhmk.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
  	}else{
  		$query = mysqli_query($konek,"INSERT INTO `matkul` (`id_matkul`, `nip`, `matkul`, `hari`, `jam`, `ruang`, `sks`) VALUES ('$kodemk', '$nip', '$mk', '$hari', '$jam', '$ruang', '$sks');");
  		$query = mysqli_query($konek,"INSERT INTO `absen` (`id_makul`, `kode_absen`) VALUES ('$kodemk', '');");
  		$pesan = "Entry Data Sukses";
  		echo "<!DOCTYPE html>
			<html>
			<head>
			    <title>Dialog Alert</title>
			    <meta http-equiv='refresh' content='0;url=matkul.php'>
			</head>
			<body>
			<script>
			    alert('$pesan');
			</script>
			</body>
			</html>";
  	}


}

?>