<?php
ob_start();
session_start();
if(!isset($_SESSION['login'])){
  header('location:../login.php');
}elseif ($_SESSION['level']=='admin') {
  header('location:../admin');
}elseif ($_SESSION['level']=='mahasiswa') {
  header('location:../mahasiswa');
}
include "../koneksi.php";
$idd = $_SESSION['id'];
$sqlNama = mysqli_query($konek, "SELECT * FROM dosen WHERE id=$idd");
$d = mysqli_fetch_array($sqlNama);
$nama = $d['nama'];
$nip = $d['nip'];
$id_matkul = $_GET['id_matkul'];

?>
<html>
<head>
<title>Cetak Absensi Mahasiswa</title>
<link href="cetak.css" rel="stylesheet" type="text/css" title="Default" />
<link href="cetak1.css" rel="stylesheet" type="text/css" title="Default" />
</head>
<body onLoad="window.print()">
  <div class="page">
   <div class="page-potrait">
      <div class="nobreak">
         <!-- xx patTemplate:link name="kop_print" src="kop_print" / -->

         <img style="float:left; margin:0 10px 0 0; padding:0;" src="logo-utm.png" alt="logo" />
         <h1>Universitas Trunojoyo Madura</h1>
               <h3>FAKULTAS TEKNIK</h3><br />
        <?php 
        $sql = mysqli_query($konek, "SELECT * FROM matkul WHERE id_matkul='$id_matkul'");
        $c = mysqli_fetch_array($sql); 
        ?>
         <h2 align="center">ABSENSI MAHASISWA</h2>     
         <h3 align="center">Semester : Gasal 2019 / 2020</h3>    <br />

         <table width="100%">
         <tr>
            <td  nowrap ="nowrap" width="15%">Mata Kuliah</td>
            <td width="2%">:</td>
            <td  nowrap ="nowrap" width="38%"><?php echo($c['matkul']); ?></td>
         </tr>
         <tr>
            <td nowrap ="nowrap" >SKS</td>
            <td nowrap ="nowrap" >:</td>
            <td nowrap ="nowrap" ><?php echo($c['sks']); ?></td>
         </tr>
         <tr>
            <td nowrap ="nowrap" >Pengampu</td>
            <td nowrap ="nowrap" >:</td>
            <td nowrap ="nowrap" ><?php echo "$nama"; ?></td>
         </tr>
         <tr>
            <td nowrap ="nowrap" >NIP</td>
            <td nowrap ="nowrap" >:</td>
            <td nowrap ="nowrap" ><?php echo "$nip"; ?></td>
         </tr>
         <tr>
            <td nowrap ="nowrap" >Program Studi</td>
            <td nowrap ="nowrap" >:</td>
            <td nowrap ="nowrap" >SISTEM INFORMASI - S1 Reguler</td>
         </tr>
      </table>
      <br>
          <table class="tabel-common" width="100%">
            <thead>
            <tr>
              <th>NIM</th>
              <th>NAMA</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>7</th>
              <th>8</th>
              <th>9</th>
              <th>10</th>
              <th>11</th>
              <th>12</th>
              <th>13</th>
              <th>14</th>
            </tr>
            </thead>
            <tbody>
            <?php
              $sqlKelas = mysqli_query($konek,"SELECT * FROM Kehadiran WHERE id_matkul='$id_matkul' ORDER BY nim");
              while ($data = mysqli_fetch_assoc($sqlKelas)) {
                echo "<tr>";
                echo "<td>$data[nim]</td>";
                echo "<td>$data[nama]</td>";
                echo "<td>$data[1]</td>";
                echo "<td>$data[2]</td>";
                echo "<td>$data[3]</td>";
                echo "<td>$data[4]</td>";
                echo "<td>$data[5]</td>";
                echo "<td>$data[6]</td>";
                echo "<td>$data[7]</td>";
                echo "<td>$data[8]</td>";
                echo "<td>$data[9]</td>";
                echo "<td>$data[10]</td>";
                echo "<td>$data[11]</td>";
                echo "<td>$data[12]</td>";
                echo "<td>$data[13]</td>";
                echo "<td>$data[14]</td>";
                echo "</tr>";
              }
            ?>                                       
            </tbody>
          </table>
</div>
</div>
</div>
</body>

</html>
<?php mysqli_close($konek); ?>