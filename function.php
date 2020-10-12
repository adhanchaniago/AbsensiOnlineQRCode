<?php 
include "koneksi.php";
session_start();
$id = $_SESSION['id'];
if($_GET['act']== 'gantipw'){
    $pwlama = md5($_POST['pwlama']);
    $pwbaru = md5($_POST['pwbaru']);

    //query
    $query =  mysqli_query($konek, "SELECT * FROM User WHERE id = '$id'");
    $q = mysqli_fetch_array($query);
    if ($pwlama==$q['password']) {
        $query = mysqli_query($konek,"UPDATE User SET password='$pwbaru' WHERE id='$id'");
        echo "  <!DOCTYPE html>
                <html>
                    <head>
                        <title>Dialog Alert</title>
                        <meta http-equiv='refresh' content='0;url=index.php'>
                    </head>
                    <body>
                    <script>
                        alert('Berhasil');
                    </script>
                    </body>
                </html>";
    }
    else{
        echo "<!DOCTYPE html>
                <html>
                    <head>
                        <title>Dialog Alert</title>
                        <meta http-equiv='refresh' content='0;url=index.php'>
                    </head>
                    <body>
                    <script>
                        alert('Gagal, pastikan password lama benar!');
                    </script>
                    </body>
                </html>";

    }
}
?>