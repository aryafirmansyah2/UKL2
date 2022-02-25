<?php
session_start();

if($_POST){
  $pilih = $_POST['outlet'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo me-5" href="../../index.html"><img src="../../images/logo.svg" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
      </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../nav.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="ti-home menu-icon"></i> 
              <span class="menu-title">Outlet</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pelanggan/pelanggan.php">
            <i class="ti-user menu-icon"></i>
              <span class="menu-title">Pelanggan</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../paket/paket.php">
              <i class="ti-package menu-icon"></i>
              <span class="menu-title">Paket</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pengguna/pengguna.php">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Pengguna</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../transaksi/transaksi.php">
              <i class="ti-bar-chart-alt menu-icon"></i>
              <span class="menu-title">Transaksi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../laporan/laporan.php">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Laporan</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel"> 
        <div class="content-wrapper">
        <a href="./laporancetak.php"><button type="button" class="btn btn-primary">Cetak</button></a>
        
          <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Invoice</th>
                <th>Status</th>
                <th>Status Pembayaran</th>
                <th>Total Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "../../../helper/connection.php";
              $qry_transaksi = mysqli_query($conn, "select tb_outlet.id from tb_outlet limit 1");
              $outlet = mysqli_fetch_array($qry_transaksi);

              // $qry_transaksi = mysqli_query($conn, "select tb_member.nama as nama_member, tb_member.id, tb_transaksi.status, tb_transaksi.dibayar, tb_transaksi.kode_invoice, tb_transaksi.id, tb_detail_transaksi.total_harga, tb_detail_transaksi.id_transaksi from tb_member, tb_transaksi, tb_detail_transaksi where tb_member.id = tb_transaksi.id_member and tb_transaksi.id = tb_detail_transaksi.id_transaksi");
              $qry_transaksi = mysqli_query($conn, "select tb_member.nama as nama_member, tb_member.id as id_member, tb_transaksi.status, tb_transaksi.dibayar, tb_transaksi.kode_invoice, tb_transaksi.id, tb_detail_transaksi.total_harga, tb_detail_transaksi.id_transaksi, tb_detail_transaksi.id_paket, tb_paket.id, tb_paket.id_outlet from tb_member, tb_transaksi, tb_detail_transaksi, tb_paket where tb_member.id = tb_transaksi.id_member and tb_paket.id_outlet = '".$_SESSION['id_outlet']."' and tb_detail_transaksi.id_paket = tb_paket.id and tb_transaksi.dibayar = 'dibayar' and tb_transaksi.id = tb_detail_transaksi.id_transaksi");
              $no = 0;
              while ($data_transaksi = mysqli_fetch_array($qry_transaksi)) {
                if ($data_transaksi['dibayar'] == "belum_dibayar") {
                  $dibayar = "belum dibayar";
                } else {
                  $dibayar = "dibayar";
                }
                $no++; ?>
                <tr>
                  <td><?= $data_transaksi['nama_member'] ?></td>
                  <td><?= $data_transaksi['kode_invoice'] ?></td>
                  <td><?= $data_transaksi['status'] ?></td>
                  <td><?= $dibayar ?></td>
                  <td><?= $data_transaksi['total_harga']; ?></td>
                  <td><a href="transaksi-detail.php?id=<?= $data_transaksi['id_transaksi'] ?>" class="btn btn-outline-primary btn-fw" style="margin-right: 15px;">Detail</a></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      
</body>
</html>   