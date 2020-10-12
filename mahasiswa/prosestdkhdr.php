<?php
session_start();
$nim = $_SESSION['username'];
include "../koneksi.php";

if(isset($_POST['submit'])){
	$id_matkul = $_POST['idmatkul'];
	$id_matkul_enc = base64_encode($id_matkul);
	$ket = htmlentities(strip_tags(trim($_POST['keterangan'])));
	$i = 1;
	$querymhs = mysqli_query($konek,"SELECT * FROM Mahasiswa WHERE nim='$nim'");
	$datamhs = mysqli_fetch_array($querymhs);
	$nama = $datamhs['nama'];
	$query = mysqli_query($konek,"SELECT * FROM Kehadiran WHERE nim='$nim' AND id_matkul='$id_matkul'");
	$kolom = mysqli_fetch_array($query);
    while ($i<14) {
        if ($kolom[$i]=="-") {
                break;
        }else{
            $i=$i+1;
        }
    }
    $error = $_FILES['bukti']['error']; // Menyimpan jumlah error ke variabel $error
 
    // Validasi error
    if($error == 0){
        $ukuran_file = $_FILES['bukti']['size']; // Menyimpan ukuran file ke variabel $ukuran_file
 
        // Validasi ukuran file
        if($ukuran_file <= 2000000){
            $nama_file = $_FILES['bukti']['name']; // Menyimpan nama file ke variabel $nama_file
            $format = pathinfo($nama_file, PATHINFO_EXTENSION); // Mendapatkan format file
 
            // Validasi format
            if( ($format == "jpg") or ($format == "pdf") or ($format == "jpeg") ){
                $file_asal = $_FILES['bukti']['tmp_name'];
                $file_tujuan = "../bukti/".$_FILES['bukti']['name'];
                $upload = move_uploaded_file($file_asal, $file_tujuan); // Proses upload. Menghasilkan nilai true jika upload berhasil
 				
                // Validasi upload (hasil true jika upload berhasil)
                if($upload == true){
                	$queryupdate = mysqli_query($konek,"INSERT INTO `TidakHadir` (`nim`, `nama`, `id_matkul`, `pertemuan`, `keterangan`, `bukti`) VALUES ('$nim', '$nama', '$id_matkul', '$i', '$ket', '$nama_file');");
                	$query = mysqli_query($konek,"UPDATE `Kehadiran` SET `$i` = 'T', kondisi = 'false' WHERE `Kehadiran`.`nim` = '$nim' AND `Kehadiran`.`id_matkul` = '$id_matkul'");
                    $pesan = "Entry data berhasil!!";
                    echo "  <!DOCTYPE html>
			                <html>
			                    <head>
			                        <title>Dialog Alert</title>
			                    <meta http-equiv='refresh' content='0;url=../'>
			                    </head>
			                    <body>
			                    <script>
			                        alert('$pesan');
			                    </script>
			                    </body>
			                </html>";
                }else{ // else upload gagal
                    $pesan = "Entry data gagal!!";
                    echo "  <!DOCTYPE html>
			                <html>
			                    <head>
			                        <title>Dialog Alert</title>
			                    <meta http-equiv='refresh' content='0;url=tidakhadir.php?id_matkul=$id_matkul_enc'>
			                    </head>
			                    <body>
			                    <script>
			                        alert('$pesan');
			                    </script>
			                    </body>
			                </html>";
                }
 
            }else{ // else validasi format
                $pesan = "Format harus jpg atau pdf.";
                echo "  <!DOCTYPE html>
			                <html>
			                    <head>
			                        <title>Dialog Alert</title>
			                    <meta http-equiv='refresh' content='0;url=tidakhadir.php?id_matkul=$id_matkul_enc'>
			                    </head>
			                    <body>
			                    <script>
			                        alert('$pesan');
			                    </script>
			                    </body>
			                </html>";
            }
 
        }else{ // else validasi ukuran file
            $pesan = "Ukuran file kamu ".$ukuran_file.", file tidak boleh lebih dari (2MB)";
            echo "  <!DOCTYPE html>
			                <html>
			                    <head>
			                        <title>Dialog Alert</title>
			                    <meta http-equiv='refresh' content='0;url=tidakhadir.php?id_matkul=$id_matkul_enc'>
			                    </head>
			                    <body>
			                    <script>
			                        alert('$pesan');
			                    </script>
			                    </body>
			                </html>";
        }


 
    }else{ // else validasi error
        $pesan = 'Ada '.$error.' error. Gagal upload.';
        echo "  <!DOCTYPE html>
			                <html>
			                    <head>
			                        <title>Dialog Alert</title>
			                    <meta http-equiv='refresh' content='0;url=tidakhadir.php?id_matkul=$id_matkul_enc'>
			                    </head>
			                    <body>
			                    <script>
			                        alert('$pesan');
			                    </script>
			                    </body>
			                </html>";
    }
    
}
?>