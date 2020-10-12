<?php 

	include "../koneksi.php";
	$id_matkul = $_POST['id_matkul'];
	$q = mysqli_query($konek,"UPDATE Kehadiran SET kondisi = 'true' WHERE id_matkul = '$id_matkul'")

?>


<div class="alert alert-success">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Absensi Telah Diaktifkan, Klik Tampilkan QR Code!
</div>