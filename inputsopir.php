<?php
//memasukkan file config.php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Jenis Mobil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

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
        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            </nav>

    <div class="container" style="margin-top:20px">

    <h1>Inputkan Supir</h1>
    <hr>

    <center>
    <form action="aksisupir.php" method="POST" style="margin-top:30px">
      <label for="id_supir">Id Supir : </label><br>
      <input type="number" id="id_supir" name="id_supir" value="<?php echo "30".rand(0, 999)?>" placeholder="Masukkan id supir" style="width: 60%" ><br>

      <label for="nama">Nama : </label><br>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama" style="width: 60%"><br>

      <label for="notlp">Nomer Telpon : </label><br>
      <input type="number" id="notlp" name="notlp" placeholder="Masukkan no telpon" style="width: 60%"><br>

      <label for="alamat">Alamat : </label><br>
      <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat" style="width: 60%"><br><br>

      <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
    </form> 
    </center>  
</body>
</html>