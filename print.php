<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Data</title>
<style>
h1 {
text-align: center;
}
table, td, th {
border: 1px solid #ddd;
text-align: left;
}
table {
border-collapse: collapse;
width: 100%;
}
th, td {
padding: 15px;
}
</style>
</head>
<body>
<h1>Laporan Data Barang</h1>
<table border="1">
	<thead>
	<tr>
		<th>No.</th>
		<th>Nama Barang</th>
		<th>Stok</th>
		<th>Harga Beli</th>
		<th>Harga Jual</th>
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
		</tr>
	<?php endforeach;
	} else{ ?>
	<tr>
	<td colspan="9">Belum ada data.</td>
	</tr>
	<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>