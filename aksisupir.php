<!DOCTYPE html>
<html>
<head>
	<title>supir</title>
</head>
<body>

<?php
$servername = 'trunojoyopython.com';
$username = 'trunojoy_kuliah';
$password = 'unijoyo2021';
$database = 'trunojoy_hotel';
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$id_supir = $_POST['id_supir'];
$nama = $_POST['nama'];
$notlp = $_POST['notlp'];
$alamat = $_POST['alamat'];
$sql="INSERT INTO 06_supir(id_supir, nama, notlp, alamat) 
values('$id_supir', '$nama' , '$notlp', '$alamat')";
if (empty($id_supir)or empty($nama) or (empty($notlp)or empty($alamat))) {
	echo "inputan tidak valid, mohon kembali isi from";
} else {
	$result = $conn->query($sql);
	echo "Record berhasil ditambahkan";
}
?>
<a href="supir.php"> kembali ke menu utama</a>
</body>
</html>