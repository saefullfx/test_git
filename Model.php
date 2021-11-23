<?php
include 'connection.php';
class Model extends Connection{
public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function tampil_data()
	{
	    $sql = "SELECT * FROM tb_barang";
	    $data = $this->conn->query($sql);
	    while ($obj = $data->fetch_object()) {
	    $baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}

    public function insert($nama_barang, $jumlah, $harga_beli, $harga_jual)
	{
	    
	    $sql = "INSERT INTO tb_barang (nama_barang, jumlah, harga_beli, harga_jual) VALUES ('$nama_barang', '$jumlah',
	            '$harga_beli', '$harga_jual')";
	    $this->conn->query($sql);
	}

	public function edit($id)
	{
	    $sql = "SELECT * FROM tb_barang WHERE id='$id'";
	    $data = $this->conn->query($sql);
	    while ($obj = $data->fetch_object()) {
	    $baris = $obj;
	    }
	    return $baris;
	}

	public function update($id, $nama_barang, $jumlah, $harga_beli, $harga_jual)
	{
	   
	    $sql = "UPDATE tb_barang SET nama_barang='$nama_barang', jumlah='$jumlah', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id='$id'";
    	$this->conn->query($sql);
	}

	public function delete($id)
	{
	    $sql = "DELETE FROM tb_barang WHERE id='$id'";
	    $this->conn->query($sql);
	}

}