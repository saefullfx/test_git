<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Barang</title>
</head>
<body>
<h1>Tambah</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="process.php" method="post">
<label>Nama Barang</label>
<br>
<input type="text" name="nama_barang">
<br>
<label>Stok</label>
<br>
<input type="text" name="jumlah">
<br>
<label>Harga Beli</label>
<br>
<input type="number" name="harga_beli">
<br>
<label>Harga Jual</label>
<br>
<input type="number" name="harga_jual">
<br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
