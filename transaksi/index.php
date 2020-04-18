<?php

include '../koneksi.php';
include 'fungsi-transaksi.php';
$id = $_POST['id_pinjam'];

$sql = "SELECT * FROM peminjaman_perpus INNER JOIN anggota
		ON peminjaman_perpus.id_anggota = anggota.id_anggota
		INNER JOIN petugas ON peminjaman_perpus.id_petugas=petugas.id_petugas
		INNER JOIN detail_pinjam ON peminjaman_perpus.id_pinjam = detail_pinjam.id_pinjam
		ORDER BY peminjaman_perpus.tgl_pinjam";

$res = mysqli_query($kon, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}

include '../aset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<div class="card">
				<div class="card-header">
					<h2 class="card-title"><i class="fas fa-edit"></i> Data Peminjaman <a href="form-pinjam.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a>
					</h2>
				</div>
				<div class="card-body">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Day</label>
						</div>
						<select class="custom-select " id="inputGroupSelect01">
							<option value="" selected>Choose</option>
							<option value="1">Yesterday</option>
							<option value="3">Three days ago</option>
							<option value="7">A week ago</option>
						</select>
						<form class="form-inline my-2 my-lg-0 ml-5">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="key">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>


						</form>
					</div>
					<div class="ser">
						<table class="table table-white">
							<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Peminjam</th>
      <th scope="col">Tanggal Pinjam</th>
      <th scope="col">Tanggal Jatuh Tempo</th>
      <th scope="col">Petugas</th>
      <th scope="col">Aksi</th>
      
      		<a href="detail.php?id_pinjam=<?= $p['id_pinjam']?>"class="badge badge-success">Detail</a>

      		<a href="form-edit.php?id_pinjam=<?= $p['id_pinjam']?>"class="badge badge-warning">Edit</a>

      		<a href="hapus.php?id_pinjam=<?= $p['id_pinjam'] ?>" class="badge badge-danger">Hapus</a>
    </tr>
  </thead>
  
  <?php

		$no = 1;
		foreach ($pinjam as $p) { ?>
			
		  <tr>
		  	<th scope="row"><?= $no ?></th>
		  	<td><?= $p['nama_anggota'] ?></th>
		  	<td><?= date('d F Y', strtotime($p['tgl_pinjam'])) ?></th>
		  	<td><?= date('d F Y', strtotime($p['tgl_jatuh_tempo'])) ?></th>	
		  	<td><?= $p['nama_petugas'] ?></td>
		  	<td>
		  		<?php
		  		if($p['status'] == "Dipinjam")
		  		{
		  			echo '<h5><span class="badge badge-info">Dipinjam</span></h5>';
		  		}
		  		else
		  		{
		  			echo '<h5><span class="badge badge-secondary">Kembali</span></h5>';
		  		}
		  		?>
		  	</td>
		  </tr>
		  		
		</td>
	</tr>

<?php
	$no++;
}
?>

  
</table>

  </div>
</div>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
<?php
include '../aset/footer.php';
?>
