<?php
/**
 * 
 */
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "ci_tutorial";
	var $koneksi = "";
	

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi, "select * from tb_barang");
		while($d = $data->fetch_object())
		{
		$hasil[] = $d;
		}
		  if(!empty($hasil)){
			return $hasil;
			}
	}
}

?>