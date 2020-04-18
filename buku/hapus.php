<?php  
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$query = mysqli_query($kon, "DELETE FROM buku_perpus WHERE id_buku = '$id'");

if($query > 0){
	echo "
    		<script>
    			alert('Data Berhasil Dihapus');
    			document.location.href='index.php';
    		</script>
    	";
}
?>
