<?php
include '../koneksi.php';

if(isset($_POST['simpan']))
{
	$nama_anggota = $_POST['nama_anggota'];
	$kelas = $_POST['kelas'];
	$telp = $_POST['telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_level = 3;

	$sql = "INSERT INTO anggota (nama_anggota, kelas, telp, username, password, id_level) VALUES ('$nama_anggota', '$kelas', '$telp', '$username', '$password', $id_level)";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count == 1)
	{
		header("Location: index.php");
	}
	else{
		header("Location: tambah-anggota.php");
	}
}
else
{
	header("Location: tambah-anggota.php");
}
?>
