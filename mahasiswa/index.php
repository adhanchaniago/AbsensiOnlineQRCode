<?php

  include "header.php";
  include "sidebar.php";

?>


<div id="content-wrapper">

  <div class="container-fluid">
  	<!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item">Kelas</li>
    </ol>

    <?php 
        $query = mysqli_query($konek,"SELECT * FROM krs WHERE nim='$nim' ORDER BY id_matkul");
        while ($data = mysqli_fetch_assoc($query)) {
        	$querymatkul =mysqli_query($konek,"SELECT * FROM Matkul WHERE id_matkul='$data[id_matkul]'");
        	$exe = mysqli_fetch_array($querymatkul);
            echo "<div class='col-xl-3 col-sm-6 mb-3'>
        			<div class='card text-white bg-success o-hidden h-100'>
            		<div class='card-body'>
                	<div class='card-body-icon'>
                  	<i class='fas fa-fw fa-book'></i>
		                </div>
		                <div class='mr-5'>$exe[matkul]</div>
					    </div>
			              <a class='card-footer text-white clearfix small z-1' href='#myModal' data-toggle='modal' data-target='#myModal' data-id='$exe[id_matkul]'>
			                <span class='float-left'>View Details</span>
			                <span class='float-right'>
			                  <i class='fas fa-angle-right'></i>
			                </span>
			              </a>
			        </div>
			    </div>";
        }
    ?>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="fetched-data"></div>
        </div>
    </div>

  </div>

</div>
<!-- /.container-fluid -->
<?php

  include "footer.php";

?>