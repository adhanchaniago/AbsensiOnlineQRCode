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
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'matkul.php',
                data :  'id_makul='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
</body>

</html>
