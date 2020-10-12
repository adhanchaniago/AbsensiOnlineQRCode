<?php

  include "header.php";
  $id_matkul = base64_decode($_GET['id_matkul']);
  include "sidebar.php";
  


?>


<div id="content-wrapper">

  <div class="container-fluid">

    <div class="card text-center" style="margin-bottom: 10px;">
        <h5 class="card-header bg-gray-100 text-secondary">SCAN QRCode Kelas</h2>
        <div class="card-body">
        	<canvas class="col-lg"></canvas>
        	<hr>
        	<form>
		        <select class="form-control"></select>
	    	</form>
        </div>
    </div>

  </div>

</div>

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
<!-- /.container-fluid -->
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
  <script type="text/javascript" src="js/qrcodelib.js"></script>
  <script type="text/javascript" src="js/webcodecamjquery.js"></script>
<?php 
$que = mysqli_query($konek,"SELECT * FROM Kehadiran WHERE nim='$nim' AND id_matkul='$id_matkul'");
  $dataque = mysqli_fetch_array($que);
  if ($dataque['kondisi']=='false') {
      echo "<script>
            $('#mdl').modal('show');
            </script>";
  }
  else{
    echo "
  <script type='text/javascript'>
    var arg = {
        resultFunction: function(result) {
            var redirect = 'cek.php?id_matkul=$id_matkul';
            $.redirectPost(redirect, {kode_absen: result.code});
        }
    };
    
    var decoder = $('canvas').WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery;
    decoder.buildSelectMenu('select');
    decoder.play();
    $('select').on('change', function(){
        decoder.stop().play();
    });
    $.extend(
    {
        redirectPost: function(location, args)
        {
            var form = '';
            $.each( args, function( key, value ) {
                form += '<input type=\"hidden\" name=\"'+key+'\" value=\"'+value+'\">';
            });
            $('<form action=\"'+location+'\" method=\"POST\">'+form+'</form>').appendTo('body').submit();
        }
    });

  </script>";
  }
?>
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
