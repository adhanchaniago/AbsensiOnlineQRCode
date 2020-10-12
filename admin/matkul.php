<?php 

include "header.php";
include "sidebar.php";

?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Mata Kuliah</li>
        </ol>
        <div class="my-2"></div>
        <a href="tbhmk.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Data</span>
        </a>
        <div class="my-2"></div>
        <!-- Tabel Matkul -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Mata Kuliah</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Matkul</th>
                    <th>NIP Pengampu</th>
                    <th>Mata Kuliah</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Ruang</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $sqlKelas = mysqli_query($konek,"SELECT * FROM matkul ORDER BY nip");
                    while ($data = mysqli_fetch_array($sqlKelas)) {   
                      $kodemk = base64_encode($data['id_matkul']);                   
                      echo "<tr>";
                      echo "<td>$data[id_matkul]</td>";
                      echo "<td>$data[nip]</td>";
                      echo "<td>$data[matkul]</td>";
                      echo "<td>$data[hari]</td>";
                      echo "<td>$data[jam]</td>";
                      echo "<td>$data[ruang]</td>";
                      echo "<td>$data[sks]</td>";
                      echo "<td>
                      <a href='hapus.php?mk=dfdsf&&kodemk=$kodemk'><i class='fas fa-trash-alt text-danger'></i></a>&#8195;  
                      <a href='editmk.php?kodemk=$kodemk'><i class='fas fa-edit'></i></a>
                      </td>";
                      echo "</tr>";
                    }
                  ?>   
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

<?php 
include "footer.php";
?>