<?php
include "koneksi.php";


$nis = $_GET['nis'];


$query = "SELECT * FROM crudata WHERE nis='".$nis."'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql); 


$query2 = "DELETE FROM crudata WHERE nis='".$nis."'";
$sql2 = mysqli_query($connect, $query2); 
if($sql2){
	header("location: index.php"); 
}else{
	
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
