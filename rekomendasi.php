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
      			Masukkan Bobot
      		</div>
          <form action="hasil.php" method="post">
        		<div class="card-body">
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">Kriteria Harga</label>
        				<div class="col-md-10">
  	      				<select name="harga" class="form-control" required>
                    <option value="">- kriteria harga -</option>
  	      					<option value="5">< Rp. 1.000.000</option>
                    <option value="4">Rp. 1.000.000 - Rp. 3.000.000</option>
                    <option value="3">Rp. 3.000.000 - Rp. 4.000.000</option>
                    <option value="2">Rp. 4.000.000 - Rp. 5.000.000</option>
                    <option value="1">> Rp. 5.000.000</option>
  	      				</select>
  	      			</div>
        			</div>	
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">RAM</label>
        				<div class="col-md-10">
  	      				<select name="ram" class="form-control" required>
                    <option value="">- kriteria RAM -</option>
  	      					<option value="1">0 - 1 GB</option>
                    <option value="2">2 GB</option>
                    <option value="3">3 GB</option>
                    <option value="4">4 GB</option>
                    <option value="5">> 5 GB</option>
  	      				</select>
  	      			</div>
        			</div>
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">Memori</label>
        				<div class="col-md-10">
  	      				<select name="memori" class="form-control" required>
                    <option value="">- kriteria Memori -</option>
  	      					<option value="1">0 - 4 GB</option>
                    <option value="2">8 GB</option>
                    <option value="3">16 GB</option>
                    <option value="4">32 GB</option>
                    <option value="5">> 32 GB</option>
  	      				</select>
  	      			</div>
        			</div>	
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">Processor</label>
        				<div class="col-md-10">
  	      				<select name="processor" class="form-control" required>
                    <option value="">- kriteria Processor -</option>
  	      					<option value="1">Dualcore</option>
                    <option value="3">Quadcore</option>
                    <option value="5">Octacore</option>
  	      				</select>
  	      			</div>
        			</div>	
        			<div class="form-group row">
        				<label class="col-md-2 col-form-label h5">Kamera</label>
        				<div class="col-md-10">
  	      				<select name="kamera" class="form-control" required>
                    <option value="">- kriteria Kamera -</option>
  	      					<option value="1">0 - 8 MP</option>
                    <option value="3">8 - 13 MP</option>
                    <option value="5">> 13 MP</option>
  	      				</select>
  	      			</div>
        			</div>		
        		</div>
        		<div class="card-footer">
        			<button type="submit" class="btn btn-primary">Hitung</button>
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
