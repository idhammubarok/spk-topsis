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



  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include "navbar.php" ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
      	<div class="card card-default">
      		<div class="card-header h4">
      			Masukkan Data Handphone
      		</div>
          <form action="tambah-data-proses.php" method="post">
        		<div class="card-body">
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">Nama HP</label>
        				<div class="col-md-10">
  	      				<input type="text" name="nama" class="form-control" required>
  	      			</div>
        			</div>	
              <div class="form-group row">
                <label class="col-md-2 col-form-label h5">Harga</label>
                <div class="col-md-10">
                  <input type="number" name="harga" min="1" class="form-control" required>
                </div>
              </div>  
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">RAM</label>
        				<div class="col-md-10">
  	      				<select name="ram" class="form-control" required>
                    <option value="">-</option>
  	      					<option value = "1">1 Gb</option>
                    <option value = "2">2 Gb</option>
                    <option value = "3">3 Gb</option>
                    <option value = "4">4 Gb</option>
                    <option value = "6">6 Gb</option>
  	      				</select>
  	      			</div>
        			</div>
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">Memori</label>
        				<div class="col-md-10">
  	      				<select name="memori" class="form-control" required>
  	      					<option value="">-</option>
                    <option value = "4">4 Gb</option>
                    <option value = "8">8 Gb</option>
                    <option value = "16">16 Gb</option>
                    <option value = "32">32 Gb</option>
                    <option value = "64">64 Gb</option>
  	      				</select>
  	      			</div>
        			</div>	
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">Processor</label>
        				<div class="col-md-10">
  	      				<select name="processor" class="form-control" required>
  	      					<option value="">-</option>
                    <option value = "Dualcore">Dualcore</option>
                    <option value = "Quadcore">Quadcore</option>
                    <option value = "Octacore">Octacore</option>
  	      				</select>
  	      			</div>
        			</div>	
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">Kamera</label>
        				<div class="col-md-10">
  	      				<select name="kamera" class="form-control" required>
  	      					<option value="">-</option>
                    <option value = "8">8 Mp</option>
                    <option value = "13">13 Mp</option>
                    <option value = "16">16 Mp</option>
  	      				</select>
  	      			</div>
        			</div>		
        		</div>
        		<div class="card-footer">
        			<button type="submit" class="btn btn-primary">Simpan</button>
        		</div>
          </form>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
