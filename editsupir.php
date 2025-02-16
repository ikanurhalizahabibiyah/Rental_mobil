<?php
//memasukkan file config.php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pelanggan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
  <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-car"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rental Mobil</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Fiture
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Kelola</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="mobil.php">Mobil</a>
                        <a class="collapse-item" href="supir.php">Supir</a>
                        <a class="collapse-item" href="pelanggan.php">Pelanggan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sewa.php">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Sewa</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pengembalian.php">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Pengembalian</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
        </ul>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            </nav>

    <div class="container" style="margin-top:20px">

<?php
include_once 'koneksi.php';
if (isset($_GET['id_supir'])) {
  $id_supir = $_GET['id_supir'];
  $result = mysqli_query($koneksi,"SELECT * FROM 06_supir WHERE id_supir= '$id_supir'");
  $row = mysqli_fetch_array($result);
}else{
  $id_supir = $_POST['id_supir'];
  $nama = $_POST['nama'];
  $notlp = $_POST['notlp'];
  $alamat = $_POST['alamat'];
  $result1 = mysqli_query($koneksi,"UPDATE 06_supir SET nama='$nama', notlp='$notlp', alamat='$alamat' WHERE id_supir='$id_supir'");
  if($result1) {
    header("location:supir.php"); }
  $result2 = mysqli_query($koneksi,"SELECT * FROM 06_supir WHERE id_supir= '$id_supir'");
  $row = mysqli_fetch_array($result2);
}
?>
<div class="container" style="margin-top: 20px;">
<h3 align="center"> DATA SUPIR </h3>

<form action="editsupir.php" method="POST">
  <div class="form-row">
    <input type="hidden" name="id_supir" value="<?php echo $row['id_supir'] ?>">

    <div class="form-group col-md-6">
      <label for="nama">Nama Supir</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama'] ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="notlp">No TLP</label>
      <input type="number" class="form-control" id="notlp" name="notlp" value="<?php echo $row['notlp'] ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat'] ?>">
    </div>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
</form>
</div>
</body>
</html>
