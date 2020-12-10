<?php

include "koneksi.php";

$nis = $_GET['nis'];

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
	
		$query = "SELECT * FROM crudata WHERE nis='".$nis."'";
		$sql = mysqli_query($connect, $query); 
		$data = mysqli_fetch_array($sql); 
		$query = "UPDATE crudata SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', alamat='".$alamat."' WHERE nis='".$nis."'";
		$sql = mysqli_query($connect, $query); 
		if($sql){ 
			header("location: index.php");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}

	$query = "UPDATE crudata SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', alamat='".$alamat."' WHERE nis='".$nis."'";
	$sql = mysqli_query($connect, $query);

	if($sql){ 
		header("location: index.php"); 
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
?>
