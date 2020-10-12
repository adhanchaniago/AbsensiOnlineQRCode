<?php 

	include "koneksi.php";
	$sqlNama = mysqli_query($konek, "SELECT * FROM Absen WHERE id_makul='SI301'");
  $vvv = mysqli_fetch_array($sqlNama);
  echo $vvv['kode_absen'];

?>
<img src=<?php echo $vvv['kode_absen']; ?> >
<img src="bukti/1.png">
