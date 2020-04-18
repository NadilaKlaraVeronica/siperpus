<?php
include '../koneksi.php';

if(isset($_POST['sumbit'])){
	$id_buku = $_POST['id_buku'];
	$judul_buku = $_POST['judul_buku'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengarang'];
	$ringkasan = $_POST['ringkasan'];
	
	$stok = $_POST['stok'];
	$id_kategori = $_POST['id_kategori'];


	$sql="UPDATE buku_perpus SET judul_buku='$judul_buku', penerbit='$penerbit', pengarang='$pengarang', ringkasan='$ringkasan', cover='', stok='$stok', id_kategori='$id_kategori' WHERE id_buku='$id_buku'";

	$res mysqli_query($kon, $sql);
	$count=mysqli_affected_rows($kon);

	if($res > 0)
	{
		echo
		"
		<script>
			alert('Data Berhasil Diubah');
			document.location.href = 'index.php;
			</script>

			";
	}
}
include '../aset/header.php';
?> 
