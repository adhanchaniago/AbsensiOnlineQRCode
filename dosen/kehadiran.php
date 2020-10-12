<?php 
	include "header.php";
	include "sidebardosen.php";
	$id_matkul = $_GET["id"];
	$sqlKelas = mysqli_query($konek,"SELECT * FROM Matkul WHERE id_matkul='$id_matkul'");
	$l=mysqli_fetch_array($sqlKelas);

?>		

		<div class="container-fluid">

			<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kehadiran</h1>
          <p class="mb-4">Pada halaman ini anda dapat melihat nama mahasiswa yang hadir atau tidak hadir dalam perkuliahan <?php echo $l['matkul']; ?> yang Anda ampu.</p>
          <?php echo "<a href=\"cetak.php?id_matkul=$id_matkul\" target=\"_blank\" class=\"btn btn-primary btn-icon-split\">" ?>
                <span class="icon text-white-50">
                    <i class="fas fa-print"></i>
                </span>
                <span class="text">Cetak Absen</span>
          </a>
          <div class="my-2"></div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kehadiran Mahasiswa:</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead class="thead-light">
                    <tr  style="text-align: center;">
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>5</th>
                      <th>6</th>
                      <th>7</th>
                      <th>8</th>
                      <th>9</th>
                      <th>10</th>
                      <th>11</th>
                      <th>12</th>
                      <th>13</th>
                      <th>14</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
              			$sqlKelas = mysqli_query($konek,"SELECT * FROM Kehadiran WHERE id_matkul='$id_matkul' ORDER BY nim");
              			while ($data = mysqli_fetch_assoc($sqlKelas)) {
                			echo "<tr>";
                			echo "<td>$data[nim]</td>";
                			echo "<td>$data[nama]</td>";
                			echo "<td>$data[1]</td>";
                			echo "<td>$data[2]</td>";
                			echo "<td>$data[3]</td>";
                			echo "<td>$data[4]</td>";
                			echo "<td>$data[5]</td>";
                			echo "<td>$data[6]</td>";
                			echo "<td>$data[7]</td>";
                			echo "<td>$data[8]</td>";
                			echo "<td>$data[9]</td>";
                			echo "<td>$data[10]</td>";
                			echo "<td>$data[11]</td>";
                			echo "<td>$data[12]</td>";
                			echo "<td>$data[13]</td>";
                			echo "<td>$data[14]</td>";
                			echo "</tr>";
              			}
             			?>                                       
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa yang Tidak Hadir:</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead  class="thead-light">
                    <tr  style="text-align: center;">
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>Pertemuan Ke-</th>
                      <th>Keterangan</th>
                      <th>Bukti</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
              			$sqlKelas = mysqli_query($konek,"SELECT * FROM TidakHadir WHERE id_matkul='$id_matkul' ORDER BY nim");
              			while ($data = mysqli_fetch_assoc($sqlKelas)) {
                			echo "<tr>";
                			echo "<td>$data[nim]</td>";
                			echo "<td>$data[nama]</td>";
                			echo "<td>$data[pertemuan]</td>";
                			echo "<td>$data[keterangan]</td>";
                			echo "<td><a href='../bukti/$data[bukti]' target='_blank'>Download</a></td>";
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
