<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Data Barang</title>
</head>
<body>
<div>
<h1>Data Barang</h1>
<a href="create.php">Tambah Data</a>
</br>
<a href="print.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
	<thead>
	<tr>
		<th>No.</th>
		<th>Nama Barang</th>
		<th>Stok</th>
		<th>Harga Beli</th>
		<th>Harga Jual</th>
		<th>Aksi</th>
	</tr>
	</thead>
<tbody>
	<?php
	$result = $model->tampil_data();
	if ( !empty($result) ) {
	foreach ($result as $data): ?>
		<tr>
			<td><?=$index++ ?></td>
			<td><?=$data->nama_barang ?></td>
			<td><?=$data->jumlah ?></td>
			<td><?=$data->harga_beli ?></td>
			<td><?=$data->harga_jual ?></td>
			
			<td>
			<a name="edit" id="edit" href="edit.php?id=<?=$data->id ?>">Edit</a>
			<a name="hapus" id="hapus" href="process.php?id=<?=$data->id ?>">Delete</a>
			</td>
		</tr>
	<?php endforeach;
	} else{ ?>
	<tr>
	<td colspan="9">Belum ada data.</td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>
</body>
</html>