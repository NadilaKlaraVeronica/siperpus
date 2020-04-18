<?php

include '../koneksi.php';

$sql = "SELECT * FROM buku_perpus ORDER BY judul_buku";

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
		<h2 class="card-title"><i class="fas fa-book"></i>Data Buku</h2>
		<br>
			<h3 class="card-title"></i><a href="tambah_buku.php">Tambah Buku</a></h3> 
	
	</div>
	<div class="card-body">
		
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Judul</th>
			<th scope="col">Penerbit</th>
			<th scope="col">Pengarang</th>
			<th scope="col">Stok</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<?php
	  $id = 1;
	  foreach ($pinjam as $p ) { ?>
	  	<tr>
	  		<th scope="row"><?= $id ?></th>
	  		<td><?= $p['judul_buku'] ?></th>
	  		<td><?= $p['penerbit'] ?></th>
	  		<td><?= $p['pengarang'] ?></th>
	  		<td><?= $p['stok'] ?></th>
	  		
	  		<td>
	  			<a href="detail.php" class="badge badge-success">Detail</a>
	  			<a href="edit.php" class="badge badge-warning">Edit</a>
	  			<a href="hapus.php" class="badge badge-danger">Hapus</a>
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
