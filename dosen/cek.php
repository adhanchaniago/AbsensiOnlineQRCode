<?php 
	
	include "../koneksi.php";
	include "../phpqrcode/qrlib.php";
	$kode = base64_encode(random_bytes(8));
	$idm = $_GET['id'];
	$queryku = mysqli_query($konek, "UPDATE `absen` SET `kode_absen` = '$kode' WHERE `Absen`.`id_makul` = '$idm'");
	 //isi qrcode jika di scan 
	$codeContents = $kode;    
	 //output gambar langsung ke browser, sebagai PNG
	QRcode::svg($codeContents,false,"H",10,1);

?>
