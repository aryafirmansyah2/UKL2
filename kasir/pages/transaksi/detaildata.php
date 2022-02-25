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
            <a class="nav-link" href="../pelanggan/pelanggan.php">
            <i class="ti-user menu-icon"></i>
              <span class="menu-title">Pelanggan</span>
            </a>
          </li>
          
          <li class="nav-item">
          <a class="nav-link" href="../transaksi/transaksi.php">
              <i class="ti-bar-chart-alt menu-icon"></i>
              <span class="menu-title">Transaksi</span>
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
      <?php
                include "../../../helper/connection.php";
                $qry_get_detail = mysqli_query($conn, "select tb_member.nama as nama_member, tb_member.id, tb_transaksi.status, tb_transaksi.dibayar, tb_transaksi.tgl_bayar, tb_transaksi.kode_invoice, tb_transaksi.id,tb_transaksi.id_outlet,tb_detail_transaksi.total_bayar, tb_detail_transaksi.total_harga, tb_detail_transaksi.id_transaksi, tb_detail_transaksi.qty, tb_outlet.id, tb_outlet.nama as nama_outlet, tb_paket.id_outlet, tb_paket.nama_paket as nama_paket from tb_member, tb_transaksi, tb_detail_transaksi,tb_outlet, tb_paket where tb_member.id = tb_transaksi.id_member and tb_transaksi.id = tb_detail_transaksi.id_transaksi and tb_paket.id_outlet = tb_outlet.id and tb_outlet.id = tb_transaksi.id_outlet and tb_transaksi.id = '" . $_GET['id'] . "'");
                $dt_detail = mysqli_fetch_array($qry_get_detail);
                // $invoice   = 'LNDRY'.Date('Ymdsi');
                ?>

                <form class="forms-sample" action="./proces/detail.php?id=<?= $_GET['id'] ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="nama" placeholder="Username" value="<?= $dt_detail['nama_member'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Outlet</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="outlet" placeholder="Email" value="<?= $dt_detail['nama_outlet'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Invoice</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="invoice" placeholder="Email" value="<?= $dt_detail['kode_invoice'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Paket</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="paket" disabled>
                            <?php
                            include "koneksi.php";
                            $qry_get_paket = mysqli_query($conn, "select * from tb_paket where tb_paket.id_outlet = '" . $_SESSION['id_outlet'] . "'");
                            while ($dt_paket = mysqli_fetch_array($qry_get_paket)) {
                            ?>
                                <option value="<?= $dt_paket['id'] ?>"><?= $dt_paket['nama_paket'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Total Harga</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="tambahan" placeholder="Email"  value="<?= $dt_detail['total_harga'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Total Bayar</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="tambahan" placeholder="Email"  value="<?= $dt_detail['total_bayar'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Bayar</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="tambahan" placeholder="Email"  value="<?= $dt_detail['tgl_bayar'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select type="text" class="form-control" id="exampleInputEmail1" name="status" placeholder="Email" value="0">
                            <option value="baru">baru</option>
                            <option value="proses">proses</option>
                            <option value="selesai">selesai</option>
                            <option value="diambil">diambil</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="transaksi.php" class="btn btn-light">Back</a>
                </form>
            </div>