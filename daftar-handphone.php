<?php 
  include "koneksi.php";
  $sql = "SELECT * FROM data_hp";
  $data_hp = mysqli_query($conn,$sql) or die(mysqli_error()); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPK TOPSIS - Pemilihan HP</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="css/datatables.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include "navbar.php" ?>

  <!-- Page Content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mt-5">
        <?php if (isset($_GET['pesan'])) {
            if ($_GET['pesan']=='ok') { ?>
               <div class="alert alert-success">Data berhasil di simpan !
                  <a href="daftar-handphone.php" class="close">
                    <span aria-hidden="true">&times;</span>
                  </a>
                </div>
            <?php }elseif ($_GET['pesan']=='del') { ?>
              <div class="alert alert-success">Data berhasil di hapus !
                <a href="daftar-handphone.php" class="close">
                  <span aria-hidden="true">&times;</span>
                </a>
              </div>
            <?php }
        } ?>
      	<div class="card card-default mb-5">
      		<div class="card-header h4">
      			Daftar Handphone
            <a href="tambah-data.php" class="btn btn-primary pull-right" style="float: right;">Tambah</a>
      		</div>
      		<div class="car-body">
      			<div class="table-responsive">
      				<table class="table table-stripped table-hover" id="datatables">
      					<tr class="">
      						<th>No</th>
		      				<th>Nama HP</th>
		      				<th>Harga</th>
		      				<th>RAM</th>
		      				<th>Memori</th>
		      				<th>Processor</th>
		      				<th>Kamera</th>
		      				<th>Aksi</th>
      					</tr>
      					<?php
                  $no=1;

                  foreach ($data_hp as $key => $value) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nama_hp'] ?></td>
                    <td>Rp.<?= number_format($value['harga_hp']) ?></td>
                    <td><?= $value['ram_hp'] ?> GB</td>
                    <td><?= $value['memori_hp'] ?> GB</td>
                    <td><?= $value['processor_hp'] ?></td>
                    <td><?= $value['kamera_hp'] ?> MP</td>
                    <td>
                      <a href="hapus.php?id=<?= $value['id_hp'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus data ?')">Hapus</a>
                    </td>
                  </tr>
                  <?php }
                ?>
	      			</table>
      			</div>
      		</div>
      	</div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
<!--   <footer class="py-5 bg-dark mt-5">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
   
  </footer> -->

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/datatables.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript">
  	$(document).ready(function() {
	    $("#datatables").DataTable();
	} );
  </script>
</body>

</html>
