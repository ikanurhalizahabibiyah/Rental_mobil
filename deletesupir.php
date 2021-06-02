<?php 
require_once "koneksi.php";

if (isset($_GET['id_supir'])) {

	$id_supir = $_GET['id_supir'];
	
	// perintah query untuk menghapus data pada tabel supir
	$query = mysqli_query($koneksi, "DELETE FROM 06_supir WHERE id_supir='$id_supir'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: supir.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: supir.php?alert=1');
	}	
}			
?>