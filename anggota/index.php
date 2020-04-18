<?php

include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama_anggota";

$res = mysqli_query($kon, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}?>

<?php
include '../aset/header.php';
?>

<div class="container">
  <div class="row mt-4">
  	<div class="col-md">
  </div>
</div>
</div>
  	 
<div class="card">
	<div class="card-header">
		<h2 class="card-title"><i class="fas fa-book"></i>Data Anggota</h2>
<br>
			<h3 class="card-title"><i class="fas fa-user-plus"></i><a href="tambah-anggota.php">Tambah Anggota</a></h3> 
	</div>
	<div class="card-body">
		
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama Anggota</th>
			<th scope="col">Kelas</th>
			<th scope="col">Telp</th>
			<th scope="col">Username</th>
			<th scope="col">Password</th>
			<th scope="col">id_level</th>
		</tr>
	</thead>
	<?php
	  $id = 1;
	  foreach ($pinjam as $p ) { ?>
	  	<tr>
	  		<th scope="row"><?= $id ?></th>
	  		<td><?= $p['nama_anggota'] ?></th>
	  		<td><?= $p['kelas'] ?></th>
	  		<td><?= $p['telp'] ?></th>
	  		<td><?= $p['username'] ?></th>
	  		<td><?= $p['password'] ?></th>
	  		<td><?= $p['id_level'] ?></th>
			<td>
	  			<a href="detail.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
	  			<a href="edit_anggota.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-warning">Edit</a>
	  			<a href="hapus_anggota.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
	  		</td>
	  	</tr>
	  	<?php
	  	$id++;

	  } ?>

</table>
	</div>
</div>  	 
  
  
<?php
include '../aset/footer.php';
?>
