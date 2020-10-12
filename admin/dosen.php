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
          <li class="breadcrumb-item active">Data Dosen</li>
        </ol>
        <div class="my-2"></div>
        <a href="tbhdosen.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Data</span>
        </a>
        <div class="my-2"></div>
        <!-- Tabel Dosen -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            DataDosen</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $sqlKelas = mysqli_query($konek,"SELECT * FROM dosen ORDER BY nip");
                    while ($data = mysqli_fetch_array($sqlKelas)) {
                      $dt = base64_encode($data['nip']);
                      echo "<tr>";
                      echo "<td>$data[nip]</td>";
                      echo "<td>$data[nama]</td>";
                      echo "<td>$data[alamat]</td>";
                      echo "<td>
                      <a href='hapus.php?dsn=jjnh&&nip=$dt'><i class='fas fa-trash-alt text-danger'></i></a>&#8195;  
                      <a href='editdos.php?nip=$dt'><i class='fas fa-edit'></i></i></a>
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