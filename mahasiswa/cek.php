<?php
    session_start();
    $id = $_SESSION['id'];
    $nim = $_SESSION['username'];
    $id_makul = $_GET['id_matkul'];
    $i = 1;
    include "../koneksi.php";
    $kode_absen = $_POST['kode_absen'];
    $query = mysqli_query($konek,"SELECT * FROM Absen WHERE id_makul='$id_makul'");
    $cocoklogi = mysqli_fetch_array($query);
    if ($kode_absen==$cocoklogi['kode_absen']) {
        $query = mysqli_query($konek,"SELECT * FROM Kehadiran WHERE nim='$nim' AND id_matkul='$id_makul'");
        $kolom = mysqli_fetch_array($query);
        while ($i<14) {
            if ($kolom[$i]=="-") {
                break;
            }else{
            $i=$i+1;
        }
        }
        $query = mysqli_query($konek,"UPDATE `Kehadiran` SET `$i` = 'Y', kondisi = 'false' WHERE `Kehadiran`.`nim` = '$nim' AND `Kehadiran`.`id_matkul` = '$id_makul'");

        echo "  <!DOCTYPE html>
                <html>
                    <head>
                        <title>Dialog Alert</title>
                    <meta http-equiv='refresh' content='0;url=../'>
                    </head>
                    <body>
                    <script>
                        alert('Berhasil');
                    </script>
                    </body>
                </html>";
    }else{
        echo "  <!DOCTYPE html>
                <html>
                    <head>
                        <title>Dialog Alert</title>
                        <meta http-equiv='refresh' content='0;url=../'>
                    </head>
                    <body>
                    <script>
                        alert('Gagal');
                    </script>
                    </body>
                </html>";
    }

?>