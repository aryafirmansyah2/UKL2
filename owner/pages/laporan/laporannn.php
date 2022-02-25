<?php
session_start();
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
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Laporan</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description">
                        Basic form elements
                    </p>
                    <div class="table-responsive">
                    <a href="./laporancetak.php  "><button type="button" class="btn btn-primary">Cetak</button></a>
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
            <div class="d-flex align-items-center flex-wrap mb-3">
                    <?php
                    include "../../../helper/connection.php";

                    $qry_outlet = mysqli_query($conn, "select tb_outlet.id from tb_outlet limit 1");
                    $outlet = mysqli_fetch_array($qry_outlet);
                    if(empty($pilih)){
                      $pilih = $outlet['id'];
                    }else{
                      $pilih;
                    }
                    
                     //$qry_get_pendapatan_bulan = mysqli_query($conn, "select sum(tb_detail_transaksi.total_harga) as total_harga, tb_transaksi.dibayar, tb_transaksi.id, tb_transaksi.tgl_bayar,tb_detail_transaksi.id_transaksi from tb_detail_transaksi,tb_transaksi where tb_detail_transaksi.id_transaksi = tb_transaksi.id and tb_transaksi.dibayar = 'dibayar' and month(tb_transaksi.tgl_bayar) = month(now())");
                    $qry_get_pendapatan_bulan = mysqli_query($conn, "select sum(tb_detail_transaksi.total_harga) as total_harga, tb_transaksi.dibayar, tb_transaksi.id, tb_transaksi.tgl_bayar,tb_detail_transaksi.id_transaksi, tb_detail_transaksi.id_paket, tb_paket.id, tb_paket.id_outlet from tb_detail_transaksi,tb_transaksi, tb_paket where tb_detail_transaksi.id_transaksi = tb_transaksi.id and tb_detail_transaksi.id_paket = tb_paket.id and tb_paket.id_outlet = '" . $pilih . "' and tb_transaksi.dibayar = 'dibayar' and month(tb_transaksi.tgl_bayar) = month(now())");
                    $dt_pendapatan_bulan = mysqli_fetch_array($qry_get_pendapatan_bulan);
                    //$qry_get_pendapatan_minggu = mysqli_query($conn, "select sum(tb_detail_transaksi.total_harga) as total_harga, tb_transaksi.dibayar, tb_transaksi.id, tb_transaksi.tgl_bayar,tb_detail_transaksi.id_transaksi from tb_detail_transaksi,tb_transaksi where tb_detail_transaksi.id_transaksi = tb_transaksi.id and tb_transaksi.dibayar = 'dibayar' and week(tb_transaksi.tgl_bayar) = week(now())");
                    $qry_get_pendapatan_minggu = mysqli_query($conn, "select sum(tb_detail_transaksi.total_harga) as total_harga, tb_transaksi.dibayar, tb_transaksi.id, tb_transaksi.tgl_bayar,tb_detail_transaksi.id_transaksi, tb_detail_transaksi.id_paket, tb_paket.id, tb_paket.id_outlet from tb_detail_transaksi,tb_transaksi, tb_paket where tb_detail_transaksi.id_transaksi = tb_transaksi.id and tb_detail_transaksi.id_paket = tb_paket.id and tb_paket.id_outlet = '" . $pilih . "' and tb_transaksi.dibayar = 'dibayar' and week(tb_transaksi.tgl_bayar) = week(now())");
                    $dt_pendapatan_minggu = mysqli_fetch_array($qry_get_pendapatan_minggu);
                    //$qry_get_pendapatan_tahun = mysqli_query($conn, "select sum(tb_detail_transaksi.total_harga) as total_harga, tb_transaksi.dibayar, tb_transaksi.id, tb_transaksi.tgl_bayar,tb_detail_transaksi.id_transaksi from tb_detail_transaksi,tb_transaksi where tb_detail_transaksi.id_transaksi = tb_transaksi.id and tb_transaksi.dibayar = 'dibayar' and year(tb_transaksi.tgl_bayar) = year(now())");
                    $qry_get_pendapatan_tahun = mysqli_query($conn, "select sum(tb_detail_transaksi.total_harga) as total_harga, tb_transaksi.dibayar, tb_transaksi.id, tb_transaksi.tgl_bayar,tb_detail_transaksi.id_transaksi, tb_detail_transaksi.id_paket, tb_paket.id, tb_paket.id_outlet from tb_detail_transaksi,tb_transaksi, tb_paket where tb_detail_transaksi.id_transaksi = tb_transaksi.id and tb_detail_transaksi.id_paket = tb_paket.id and tb_paket.id_outlet = '" . $pilih . "' and tb_transaksi.dibayar = 'dibayar' and year(tb_transaksi.tgl_bayar) = year(now())");
                    $dt_pendapatan_tahun = mysqli_fetch_array($qry_get_pendapatan_tahun);
                    ?>
                    <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3">Rp. <?= $dt_pendapatan_bulan['total_harga'] ?></h5>
                  </div>
</body>
</html>   