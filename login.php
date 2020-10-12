<?php
ob_start();
session_start();
if(isset($_SESSION['login'])){
  header('location:dosen');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIBOMA UTM - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php 
        if($_SERVER['REQUEST_METHOD']=='POST'){
          $user = $_POST['username'];
          $pass = $_POST['password'];
          $p    = md5($pass);
          if($user=='' || $pass==''){
        ?>
        <div class="alert alert-info alert-dismissible fade show">
          <?php
              echo "<strong>Error!</strong> Form Belum Lengkap!!
              <button type='button' class='close' data-dismiss='alert'><span>&times</span></button>";
          ?>          
        </div>
        <?php
          }else{
            include "koneksi.php";
            $sqlLogin = mysqli_query($konek, "SELECT * FROM User WHERE username='$user' AND password='$p'");
            $jml=mysqli_num_rows($sqlLogin);
            $d=mysqli_fetch_array($sqlLogin);
            if($jml > 0){
              session_start();
              $_SESSION['login']    = TRUE;
              $_SESSION['id']       = $d['id'];
              $_SESSION['username'] = $d['username'];
              $_SESSION['level']    = $d['level'];
              
              header('Location:redirect.php');
              }else{
            ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php
                echo "<strong>Error!</strong> Username dan Password anda Salah!!!";
                ?>
              </div>
            <?php
            }
            
          }
        }
        ?>



        <form method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="username" id="inputUsername" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="inputUsername">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login" />
          </div>
        </form>



        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
