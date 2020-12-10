<?php
include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

	$query = "INSERT INTO crudata VALUES('".$nis."', '".$nama."', '".$jenis_kelamin."', '".$telp."', '".$alamat."', '".$fotobaru."')";
	$sql = mysqli_query($connect, $query); 
	if($sql){ 
		header("location: index.php"); 
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
?>
