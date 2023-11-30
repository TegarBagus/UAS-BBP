<?php 
include('koneksi.php');
$koneksi = new methodDatabase();
$action = $_GET['action'];
if($action == "add") {
	$koneksi->tambah_data($_POST['judul'],$_POST['stok'],$_POST['kategori'],$_POST['penulis'],$_POST['harga']);
	header('location:tampil_data.php');
}

elseif($action=="update") {
	$koneksi->update_data($_POST['judul'],$_POST['stok'],$_POST['kategori'],$_POST['penulis'],$_POST['harga'],$_POST['id_buku']);
	header('location:tampil_data.php');
}

elseif($action=="delete") {
	$id_buku = $_GET['id'];
	$koneksi->delete_data($id_buku);
	header('location:tampil_data.php');
}

elseif($action=="beli") {
	$id_buku = $_GET['id'];
	$stok = $_GET['stok'];
	$stok = $stok - 1;
	if ($stok >= 0){
		$koneksi->beli_buku($stok, $id_buku);
		header('location:tampil_etalase.php?berhasil=1');
	} else{
		header('location:tampil_etalase.php?gagal=1');
	}
}
?>
