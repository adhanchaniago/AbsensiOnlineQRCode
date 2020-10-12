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
          <li class="breadcrumb-item">
            <a href="mahasiswa.php">Data Mahasiswa</a>
          </li> 
          <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>      
        </ol>

        <form  method="post" class="col-6" action="proses.php">
          <h3 class="text">Tambah Data Mahasiswa</h1>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="nim" class="form-control" placeholder="NIM" name="nim" required="required" autofocus="autofocus">
              <label for="nim">NIM</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="nama" class="form-control" placeholder="Nama" name="nama" required="required">
              <label for="nama">Nama</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="prodi" class="form-control" placeholder="Prodi" name="prodi" required="required">
              <label for="prodi">Prodi</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="angkatan" class="form-control" placeholder="Angkatan" name="angkatan" required="required">
              <label for="angkatan">Angkatan</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="alamat" class="form-control" placeholder="Asal" name="alamat" required="required">
              <label for="alamat">Asal</label>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" name="mahasiswa" class="btn btn-lg btn-primary btn-block" value="Submit"/>
          </div>
        </form>

      </div>
      <!-- /.container-fluid -->

<?php 
include "footer.php";
?>