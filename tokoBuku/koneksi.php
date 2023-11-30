<?php 
class database{

//---------------------Penerapan enkapsulasi (Private)---------------
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "db_belajar";
	private $koneksi = "";

//-------------------Penerapan setter---------------
	function setKoneksi($koneksi){
		$this->koneksi = $koneksi;
	}


//-----------------Penerapan Getter--------------
	function getKoneksi(){
		return $this->koneksi;
	}
// ------------------------------------------------Penerapan Construktor--------------
	function __construct(){
		$this->setKoneksi(mysqli_connect($this->host, $this->username, $this->password,$this->database));
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
}

// ----------------------penerapan inheritance -----------------
class methodDatabase extends database{
	function tampil_data() {
		$data = mysqli_query($this->getKoneksi(),"select * from tb_buku");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	
	function tambah_data($judul,$stok,$kategori,$penulis,$harga) {
		mysqli_query($this->getKoneksi(),"insert into tb_buku values('','$judul','$stok','$kategori','$penulis','$harga')");
	}
	
	function get_by_id($id_buku) {
		$query = mysqli_query($this->getKoneksi(),"select * from tb_buku where id_buku='$id_buku'");
		return $query->fetch_array();
	}
	
	function update_data($judul,$stok,$kategori,$penulis,$harga,$id_buku)	{
		$query = mysqli_query($this->getKoneksi(),"update tb_buku set judul='$judul',stok='$stok',kategori='$kategori',penulis='$penulis',harga='$harga' where id_buku='$id_buku'");
	}
	
	function delete_data($id_buku) {
		$query = mysqli_query($this->getKoneksi(),"delete from tb_buku where id_buku='$id_buku'");
	}

	function beli_buku($stok,$id_buku){
		$query = mysqli_query($this->getKoneksi(),"update tb_buku set stok='$stok' where id_buku='$id_buku'");
	}

}

?>
