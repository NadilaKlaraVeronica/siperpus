<?php 
$koneksi = mysqli_connect("localhost", "root", "", "db_perpus");

if(isset($_POST['sumbit'])){
	$nama_anggota = $_POST['nama_anggota'];
	$kelas = $_POST['kelas'];
	$telp = $_POST['telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = ("INSERT INTO anggota VALUES ('', '$nama_anggota', '$kelas', '$telp', '$username', '$password')");
	$data = mysqli_query($kon, $query);

	var_dump($data);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH ANGGOTA</title>

</head>
<body>
<center>
	<h2>SiPERPUS</h2>
	<br/>
	<h3>TAMBAH ANGGOTA</h3>
	<form method="post" action="proses-tambah.php">
		<table>
			<tr>
				<td>nama_anggota</td>
				<td><input type="text" name="nama_anggota"></td>
			</tr>
			<tr>
				<td>kelas</td>
				<td><input type="number" name="kelas"></td>
			</tr>
			<tr>
				<td>telp</td>
				<td><input type="number" name="telp"></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
			</tr>
</table>
	</form>
</body>
</html>
