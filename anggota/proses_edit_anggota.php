<?php

$kon = mysqli_connect("localhost","root","","db_perpus");

if(isset($_POST['simpan'])){

	$id_anggota = $_POST['id_anggota'];
	$nama_anggota = $_POST['nama_anggota'];
    $kelas = $_POST['kelas'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
// update data ke database
$query = mysqli_query($kon, "UPDATE anggota SET nama_anggota='$nama_anggota', kelas='$kelas', telp='$telp', username='$username', password='$password' WHERE id_anggota=$id_anggota");

if($query>0)
{
	echo 
	"
	<script>
	alert('Data Berhasil diganti');
	document.location.href='index.php';
	</script>
	";

}

?>
