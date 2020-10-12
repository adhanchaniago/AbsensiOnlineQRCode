<?php 

include "header.php";
include "sidebar.php";

?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>          
        </ol>

        <div class="card text-center">
            <h2 class="card-header bg-gray-100 text-gray-800">Selamat Datang!!!</h2>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Selamat datang <?php echo $dataadmin['nama']; ?> di aplikasi Absensi Online Mahasiswa berbasis web. Ini adalah halaman khusus Admin.</p>
              </blockquote>
            </div>
          </div>

      </div>
      <!-- /.container-fluid -->

<?php 
include "footer.php";
?>