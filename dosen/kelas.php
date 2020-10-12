<?php 
	include "header.php";
	include "sidebardosen.php";
	$id_matkul = $_GET["id"];
	$sqlKelas = mysqli_query($konek,"SELECT * FROM Matkul WHERE id_matkul='$id_matkul'");
	$l=mysqli_fetch_array($sqlKelas);
	$matkul = $l['matkul'];

?>

		<div class="container-fluid">

			<h1 class="h3 mb-2 text-gray-800"><?php echo $matkul; ?></h1>
			<div class="my-2"></div>
                <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#qrModal">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Tampilkan QR Code</span>
                </a>
                <a class="btn btn-success btn-icon-split" href='#hModal' data-toggle='modal' data-target='#hModal' <?php echo "data-id='$id_matkul'"; ?>>
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Aktifkan Absensi</span>
                </a>
            <div class="my-2"></div>

            <div class="modal fade" id="hModal" role="dialog">
              <div class="modal-dialog" role="document">
                  <div class="fetched-data"></div>
              </div>
            </div>

            <div class="modal fade" id="qrModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
            	<div class="modal-content">
            		<div class="modal-header">
            			<h5 class="modal-title">QR Code</h5>
            			<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            		</div>
            		<div class="modal-body">
            			<div id="isiqr" align="center"><span class="spinner-border spinner-border-lg"></span></div>
            		</div>
            		<div class="modal-footer">
            			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            		</div>
            	</div>
            </div>
        	</div>

          	<div class="card shadow mb-4">
            <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa:</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead  class="thead-light">
                    <tr style="text-align: center;">
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>Prodi</th>
                      <th>Angkatan</th>
                      <th>Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
              			$sqlKelas = mysqli_query($konek,"SELECT * FROM Kehadiran WHERE id_matkul='$id_matkul' ORDER BY nim");
              			while ($data = mysqli_fetch_assoc($sqlKelas)) {
                      $querymahasiswa =mysqli_query($konek,"SELECT * FROM Mahasiswa WHERE nim='$data[nim]'");
                      $exe = mysqli_fetch_array($querymahasiswa);
                			echo "<tr>";
                			echo "<td>$exe[nim]</td>";
                			echo "<td>$exe[nama]</td>";
                      echo "<td>$exe[prodi]</td>";
                      echo "<td>$exe[angkatan]</td>";
                      echo "<td>$exe[alamat]</td>";
                			echo "</tr>";
              			}
             			?>                 
                  </tbody>
                </table>
              </div>
            </div>
          	</div>

        </div>

<?php
	include "footer.php";
?>