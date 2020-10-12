<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Halaman Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <div class="input-group-append">
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <?php 
          $id = $_SESSION['id'];
          $query=mysqli_query($konek,"SELECT * FROM admin WHERE id='$id'");
          $dataadmin=mysqli_fetch_array($query);
          echo "<a class='dropdown-item' href='#'>$dataadmin[nama]</a>";
          ?>          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="user.php">
          <i class="fas fa-users"></i>
          <span>Data User</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dosen.php">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Data Dosen</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mahasiswa.php">
          <i class="fas fa-user-graduate"></i>
          <span>Data Mahasiswa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="matkul.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Mata Kuliah</span></a>
      </li>
    </ul>