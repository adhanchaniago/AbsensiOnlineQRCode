<?php 

include "header.php";
include "sidebar.php";
$kodemk = base64_decode($_GET['kodemk']);
$query1=mysqli_query($konek,"SELECT * FROM matkul WHERE id_matkul='$kodemk'");
$data1=mysqli_fetch_array($query1);

?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>   
          <li class="breadcrumb-item">
            <a href="matkul.php">Data Mata Kuliah</a>
          </li> 
          <li class="breadcrumb-item active">Edit Data Mata Kuliah</li>      
        </ol>

        <form  method="post" class="col-6" action="edit.php">
          <h3 class="text">Edit Data Mata Kuliah</h1>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="kodemk" class="form-control" <?php echo "placeholder='$data1[id_matkul]' value='$data1[id_matkul]'"; ?> name="kodemk" autofocus="autofocus" readonly>
              <label for="nim">Kode MK</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="mk" class="form-control" placeholder="Mata Kuliah" name="mk" required="required" autofocus="autofocus">
              <label for="mk">Mata Kuliah</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <select id="nip" name="nip" class="form-control">
                <option>NIP Pengampu</option>
              <?php 
                  $query = mysqli_query($konek,"SELECT * FROM dosen ORDER BY nip");
                  while ($data = mysqli_fetch_array($query)) {
                      echo "<option>$data[nip]</option>";
                  }
              ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <select id="hari" name="hari" class="form-control">
              <option>Senin</option>
              <option>Selasa</option>
              <option>Rabu</option>
              <option>Kamis</option>
              <option>Jum'at</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="time" name="jam" id="jam"  class="form-control" placeholder="Jam" required="required">
              <label for="jam">Jam</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="ruang" class="form-control" placeholder="Ruang" name="ruang" required="required">
              <label for="ruang">Ruang</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="number" id="sks" class="form-control" placeholder="SKS" name="sks" required="required">
              <label for="sks">SKS</label>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" name="matkul" class="btn btn-lg btn-primary btn-block" value="Submit"/>
          </div>
        </form>

      </div>
      <!-- /.container-fluid -->

<?php 
include "footer.php";
?>