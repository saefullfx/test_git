<?php 	
include('Database.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
		<tr>
			<th>No</th>
			<th>Barang</th>
			<th>Stok</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		if (is_array($data_barang) || is_object($data_barang))
		{
			foreach($data_barang as $row){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row->nama_barang; ?></td>
					<td><?php echo $row->jumlah; ?></td>
					<td><?php echo $row->harga_beli; ?></td>
					<td><?php echo $row->harga_jual; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row->id; ?>">Update</a>
						<a href="hapus.php?id=<?php echo $row->id; ?>">Delete</a>
					</td>
				</tr>
				<?php 
			}
		}
			?>
	</table>
</body>
</html>