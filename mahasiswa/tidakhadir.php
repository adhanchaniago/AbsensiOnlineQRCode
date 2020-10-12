<?php

  include "header.php";
  include "sidebar.php";
  $id_matkul = base64_decode($_GET['id_matkul']);
  $query = mysqli_query($konek,"SELECT * FROM Matkul WHERE id_matkul='$id_matkul'");
  $datamatkul = mysqli_fetch_array($query);

?>

<div id="content-wrapper">

  <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $datamatkul['matkul']; ?></li>
    </ol>
    
    <!-- Modal jika sudah absen -->
    <div id="mdl" class="modal fade" data-backdrop="false" data-keyboard="false" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="text-center modal-title">Peringatan</h4>
          </div>
          <div class="modal-body">
            <p>Anda sudah melakukan absensi.</p>
          </div>
          <div class="modal-footer">
            <a href="index.php" type="button" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card card-login mx-auto mt-5" style="margin-bottom: 30px;">
      <div class="card-header">Form Ketidakhadiran</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <p>Silakan mengisi Form Ketidahadiran dibawah dengan benar dan lengkap.</p>
        </div>
        <hr> 
        <form action="prosestdkhdr.php" method="post" enctype="multipart/form-data">
            <div class="form-group">          	
              <input type="text" name="idmatkul" class="form-control" <?php echo "placeholder='$id_matkul' value='$id_matkul'"; ?> readonly>
            </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputketeranagan" name="keterangan" class="form-control" placeholder="Keterangan" required="required" autofocus="autofocus">
              <label for="inputketeranagan">Keterangan</label>
            </div>
          </div>
          <div class="form-label-group-group" style="margin-bottom: 30px;">
          	<label for="bukti">Upload Bukti Pendukung</label>
          	<input type="file" name="bukti" id="bukti" class="form-control-file" required="required">
          </div>
          <hr>
          <input type="submit" name="submit" value="proses bukti" class="btn btn-primary">
        </form>
    </div>

  </div>

</div>
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © SIBOMA UTM 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- modal insert -->
 <div class="example-modal">
  <div id="ubahpwModal" class="modal fade" role="dialog" style="display:none;">
    <div class="modal-dialog"> 
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-secondary">Ganti password</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
        </div>
        <div class="modal-body">

        <form method="post" action="../function.php?act=gantipw" role="form">
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputpwlama" name="pwlama" class="form-control" required="required" autofocus="autofocus">
              <label for="inputpwlama">Password Lama</label>
              <input type="checkbox" onclick="myFunction1()"><span class="text-secondary">Lihat Password</span>
              <script>
              function myFunction1() {
                var x = document.getElementById("inputpwlama");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
              }
             </script>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="pwbaru" id="inputpwbaru" class="form-control" required="required" autofocus="autofocus">
              <label for="inputpwbaru">Password Baru</label>
              <input type="checkbox" onclick="myFunction2()"><span class="text-secondary">Lihat Password</span>
              <script>
              function myFunction2() {
                var x = document.getElementById("inputpwbaru");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
              }
             </script>
            </div>
          </div>
            
            <div class="modal-footer">
              <button id="nosave" type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Batal</button>
              <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 </div><!-- modal insert close -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <?php 
    $que = mysqli_query($konek,"SELECT * FROM Kehadiran WHERE nim='$nim' AND id_matkul='$id_matkul'");
    $dataque = mysqli_fetch_array($que);
    if ($dataque['kondisi']=='false') {
        echo "<script>
              $('#mdl').modal('show');
              </script>";
    }
  ?>
</body>

</html>
