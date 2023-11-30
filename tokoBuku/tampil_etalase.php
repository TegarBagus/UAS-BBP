<?php 
include('koneksi.php');
$db = new methodDatabase();
$data_buku = $db->tampil_data();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />

	<title>Etalase Buku</title>
	</head>
	<body>

	    <!-- navbar -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
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

	    <!-- jumbotron -->
	    <div class="jumbotron pt-5 mt-5 bg-light p-4 text-center">	     
	      <h1 class="display-4 mt-1 mb-3">Etalase Buku</h1>
	      <p class="lead">Silahkan Membeli Buku Yang Anda Inginkan</p>	     	 
	    </div>
	    <!-- end of jumbtron -->

	    <!-- table -->	    
		<table border="1" cellpadding="6" class="table table-striped table-hover">
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Kategori</th>
				<th>Penulis</th>
				<th>Stok</th>
				<th>Harga</th>
				<th>Action</th>
			</tr>
				<?php 
				$no = 1;
				foreach($data_buku as $row){
				?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['judul']; ?></td>
				<td><?php echo $row['kategori']; ?></td>
				<td><?php echo $row['penulis']; ?></td>
				<td><?php echo $row['stok']; ?></td>
				<td><?php echo $row['harga']; ?></td>
				<td>		
				<a href="proses_buku.php?action=beli&id=<?php echo $row['id_buku'];?>
				&stok=<?php echo $row['stok'] ?>">Beli</a>
				</td>
			</tr>
			<?php }	?>
		</table>

		<div class="text-light  p-3 m-2 text-center">
		<h3>	
		<?php 
		if (isset($_GET['berhasil'])){
			echo '<span class="badge bg-success">';
			echo "Buku berhasil dipesan, Terima Kasih telah membeli!  ";
			echo '<i class="bi bi-check-circle"></i>';
			echo "</span>";
			} 
		elseif(isset($_GET['gagal'])){
			echo '<span class="badge bg-danger">';
			echo "Mohon maaf stok buku telah habis";
			echo '<i class="bi bi-x-circle"></i>';
			echo "</span>";
		}
			?>			
		</h3>
		</div>
		<!-- end of table -->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
