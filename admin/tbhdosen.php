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
            <a href="dosen.php">Data Dosen</a>
          </li> 
          <li class="breadcrumb-item active">Tambah Data Dosen</li>      
        </ol>

        <form  method="post" class="col-6" action="proses.php">
          <h3 class="text">Tambah Data Dosen</h1>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="nip" class="form-control" placeholder="NIP" name="nip" required="required" autofocus="autofocus">
              <label for="nip">NIP</label>
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
              <input type="text" id="alamat" class="form-control" placeholder="Alamat" name="alamat" required="required">
              <label for="alamat">Alamat</label>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" name="dosen" class="btn btn-lg btn-primary btn-block" value="Submit"/>
          </div>
        </form>

      </div>
      <!-- /.container-fluid -->

<?php 
include "footer.php";
?>