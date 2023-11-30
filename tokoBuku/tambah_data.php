<!DOCTYPE html>
<html>
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />

	<title>Tambah Data</title>
	</head>
	<body>
	    <!-- navbar -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
	      <div class="container-fluid">
	        <a class="navbar-brand" href="index.html"><i class="bi bi-book"></i>  Toko Buku</a>
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	          <div class="navbar-nav ms-auto">
	            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
	            <a class="nav-link" href="tampil_data.php">Data</a>
	            <a class="nav-link" href="tampil_etalase.php">Etalase</a>
	          </div>
	        </div>
	      </div>
	    </nav>
	    <!-- end of navbar -->

		<!-- Judul -->
		<div class="m-3 p-3 text-center">
			<h3>Tambah Data Buku</h3>			
		</div>		
		<hr/>
		<!-- end of navbar -->
		
		<!-- form -->
		<form method="post" action="proses_buku.php?action=add">
			<div class="d-flex flex-sm-column align-items-center">
			  <div class="col-md-3 mb-3">
			    <label for="judul" class="form-label">Judul Buku</label>
			    <input type="text" class="form-control" id="judul" name="judul">	    
			  </div>
			  <div class="col-md-3 mb-3">
			    <label for="kategori" class="form-label">Kategori</label>
			    <input type="text" class="form-control" id="kategori" name="kategori">
			  </div>
			  <div class="col-md-3 mb-3">
			    <label for="penulis" class="form-label">Penulis</label>
			    <input type="text" class="form-control" id="penulis" name="penulis">
			  </div>
			   <div class="col-md-3 mb-3">
			    <label for="stok" class="form-label">Stok</label>
			    <input type="text" class="form-control" id="stok" name="stok">
			  </div>
			   <div class="col-md-3 mb-3">
			    <label for="harga" class="form-label">Harga</label>
			    <input type="text" class="form-control" id="harga" name="harga">
			  </div>
			  <div>
			  	<button type="submit" name="tombol" value="Simpan" class="btn btn-primary">Submit</button>
			  </div>
			</div>
		</form>
		<!-- end of form -->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
