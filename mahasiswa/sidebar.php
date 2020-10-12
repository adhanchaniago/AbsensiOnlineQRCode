<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">

    <a class="navbar-brand mr-1" href="index.php"><i class="fas fa-clipboard-list"></i>  Absensi Online </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

        <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <?php 
          $query=mysqli_query($konek,"SELECT * FROM Mahasiswa WHERE nim='$nim'");
          $datamahasiswa=mysqli_fetch_array($query);
          echo "<a class='dropdown-item' href='#'>$datamahasiswa[nama]</a>";
          ?>          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubahpwModal">Ubah Password</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper" style="margin-top: 56px">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Kelas</span>
        </a>
      </li>
    </ul>