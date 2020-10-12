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
          <li class="breadcrumb-item active">Data User</li>
        </ol>
        
        <!-- Tabel User -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data User</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $sqlKelas = mysqli_query($konek,"SELECT * FROM user ORDER BY username");
                    while ($data = mysqli_fetch_array($sqlKelas)) {
                      echo "<tr>";
                      echo "<td>$data[id]</td>";
                      echo "<td>$data[username]</td>";
                      echo "<td>$data[level]</td>";
                      echo "<td>
                      <a href=''><i class='fas fa-edit'></i></i></a>
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