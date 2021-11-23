<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>

<!doctype html>
<html lang="en">
<head>
<title>Edit Barang</title>
</head>
<body>
<h1>Edit Barang</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="process.php" method="post">
<label>Id</label>
<br>
<input type="text" readonly="" name="id" value="<?php echo $data->id ?>">
<br>
<label>Nama Barang</label>
<br>
<input type="text" name="nama_barang" value="<?php echo $data->nama_barang ?>">
<br>
<label>Stok</label>
<br>
<input type="text" name="jumlah" value="<?php echo $data->jumlah ?>">
<br>
<label>Harga Beli</label>
<br>
<input type="text" name="harga_beli" value="<?php echo $data->harga_beli ?>">
<br>
<label>Harga Jual</label>
<br>
<input type="text" name="harga_jual" value="<?php echo $data->harga_jual ?>">
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>