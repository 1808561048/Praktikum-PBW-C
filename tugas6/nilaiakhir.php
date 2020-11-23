<html>
<head>
<title>Nilai Akhir Mahasiswa</title>
</head>
<body>
<table align="center">
  <tr>
    <td><?php
$a=$_POST['nama'];    
$b=$_POST['nim'];
$c=$_POST['tugas'];
$d=$_POST['uts'];
$e=$_POST['uas'];

$f=($c+$d+$e)/3;
if ($f>=80)
$g=("A");
else
if ($f>=70)
$g=("B");
else
if ($f>=60)
$g=("C");

echo "Nilai Akhir Mahasiswa <br><br>";
echo"Nama : $a<br>";
echo"NIM : $b<br><br>";
echo "Nilai Tugas Anda : $c<br>";
echo "Nilai UTS Anda : $d<br>";
echo "Nilai UAS Anda : $e<br><br>";
echo"Nilai Akhir Anda : $f<br>";
echo "Anda Dinyatakan Lulus Dengan Predikat  $g<br>";

	?></td>
  </tr>
</table>
</body>
</html>