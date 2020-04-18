<?php 
include '../koneksi.php';
if (isset($_POST['simpan'])){

	$judul_buku			= $_POST['judulbuku'];
	$penerbit 	 		= $_POST['penerbit'];
	$pengarang  		= $_POST['pengarang'];
	$ringkasan     		= $_POST['ringkasan'];
	$cover 				= $_POST['cover'];
	$stok 				= $_POST['stok'];
	$id_kategori		= $_POST['id_kategori'];

	

	$query = mysqli_query( $kon,"INSERT INTO buku_perpus (judul_buku,penerbit, pengarang,ringkasan,cover, stok,id_kategori)
			VALUES ('$judul_buku','$penerbit','$pengarang','$ringkasan','$cover','$stok','$id_kategori')");

	if($query>0){
echo "<script>alert('data berhasil ditambahkan.');window.location='index.php';</script>";

	
	}
}
 ?>
