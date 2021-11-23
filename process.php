<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
   
    $model = new Model();
    $model->insert($nama_barang, $jumlah, $harga_beli, $harga_jual);
    header('location:index.php');
}


if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $model = new Model();
    $model->update($id, $nama_barang, $jumlah, $harga_beli, $harga_jual);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}

?>