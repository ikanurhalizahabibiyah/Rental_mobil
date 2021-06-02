<?php
$koneksi=mysqli_connect("trunojoyopython.com","trunojoy_kuliah","unijoyo2021","trunojoy_hotel");
$id_supir=$_GET['id_supir'];
$nama= $_GET['nama'];
$notlp= $_GET['notlp'];
$alamat = $_GET['alamat'];
$update="UPDATE 06_supir SET nama='$nama',notlp='$notlp',alamat='$alamat' WHERE id_supir='$id_supir' ";
$hasil=mysqli_query($koneksi, $update);
if($hasil) {
 header("location:supir.php"); }
else {
 echo "Maaf gagal edit"; }
?>