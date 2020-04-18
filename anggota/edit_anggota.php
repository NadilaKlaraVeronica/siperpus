<?php
$kon = mysqli_connect("localhost","root","","db_perpus");

include '../aset/header.php';

$id_anggota=$_GET['id_anggota'];

$sql = mysqli_query($kon, "SELECT * FROM anggota WHERE id_anggota = $id_anggota");

?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<center>
				<div class="card" style="width: 100%;">
					<h2 class="card-title">Edit Data Anggota</h2>
				</div>
				<div class="card-body">
					<form action="proses_edit_anggota.php" method="post">
						<table class="table">
							<?php
							while ($anggota = mysqli_fetch_assoc($sql));
							?>
							<input type="hidden" name="id_anggota" value="<?= $id_anggota['id_anggota']; ?>">
							<tr>
								<td>Nama Anggota </td>
								<td><input style="width:100%" type="text" name="nama_anggota" value="<?php echo $anggota['nama_anggota']; ?>" required></td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td><input style="width:100%" type="text" name="kelas" value="<?php echo $anggota['kelas']; ?>" required></td>
							</tr>
							<tr>
								<td>Telp </td>
								<td><input style="width:100%" type="number" name="telp" value="<?php echo $anggota['telp']; ?>" required></td>
							</tr>
							<tr>
								<td>Username </td>
								<td><input style="width:100%" type="text" name="username" value="<?php echo $anggota['username']; ?>" required></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input style="width:100%" type="password" name="password" value="<?php echo $anggota['password']; ?>" required></td>
							</tr>
							
							<tr>
								<th></th>
								<th><button style="width:100%; height: 70px" type="submit" class="btn btn-primary" name="simpan">EDIT</button>
								</th>
							</tr>
						</table>
					</form>
				</div>
		</div>
	</div>
</div>


<?php
include '../aset/footer.php';
?>
