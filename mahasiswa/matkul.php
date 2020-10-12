<?php
	session_start();
	$id_matkul = $_POST['id_makul'];
	include "../koneksi.php";
	$query = mysqli_query($konek,"SELECT * FROM Matkul WHERE id_matkul='$id_matkul'");
	$data_matkul = mysqli_fetch_array($query);
	$nip = $data_matkul['nip'];
	$id_matkul_enc = base64_encode($id_matkul);
?>
<div class="modal-content">
	<div class="modal-header">
		<h4 class="modal-title text-secondary">Detail Mata Kuliah</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	<div class="modal-body">
		<div class="table-responsive">
		<table class="table table-borderless">
			<tr>
				<td>Kode Matkul</td>
				<td>: <?php echo $data_matkul['id_matkul']; ?></td>
			</tr>
			<tr>
				<td>Matkul</td>
				<td>: <?php echo $data_matkul['matkul']; ?></td>
			</tr>
			<tr>
				<?php 
					$kueri = mysqli_query($konek,"SELECT * FROM Dosen WHERE nip='$nip'");
					$dosen = mysqli_fetch_array($kueri);
				?>
				<td>Pengampu</td>
				<td>: <?php echo $dosen['nama']; ?></td>
			</tr>
			<tr>
				<td>Hari</td>
				<td>: <?php echo $data_matkul['hari']; ?></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td>: <?php echo $data_matkul['jam']; ?></td>
			</tr>
			<tr>
				<td>Ruang</td>
				<td>: <?php echo $data_matkul['ruang']; ?></td>
			</tr>
			<tr>
				<td>SKS</td>
				<td>: <?php echo $data_matkul['sks']; ?></td>
			</tr>
		</table>
		</div>
	</div>
	<div class="modal-footer">
		<a <?php echo "href='tidakhadir.php?id_matkul=$id_matkul_enc'";?> class="btn btn-danger">Tidak Hadir</a>
		<a class="btn btn-primary"<?php echo "href='kelas.php?id_matkul=$id_matkul_enc'"; ?> >Scan QR</a> 
	</div>
</div>

