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
  

                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Laporan Cetak</h4>
                    <p class="card-description">
                        
                    </p>

        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Invoice</th>
                <th>Status</th>
                <th>Status Pembayaran</th>
                <th>Total Harga</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "../../../helper/connection.php";
              // $qry_transaksi = mysqli_query($conn, "select tb_member.nama as nama_member, tb_member.id, tb_transaksi.status, tb_transaksi.dibayar, tb_transaksi.kode_invoice, tb_transaksi.id, tb_detail_transaksi.total_harga, tb_detail_transaksi.id_transaksi from tb_member, tb_transaksi, tb_detail_transaksi where tb_member.id = tb_transaksi.id_member and tb_transaksi.id = tb_detail_transaksi.id_transaksi");
              $qry_transaksi = mysqli_query($conn, "select tb_member.nama as nama_member, tb_member.id as id_member, tb_transaksi.status, tb_transaksi.dibayar, tb_transaksi.kode_invoice, tb_transaksi.id, tb_detail_transaksi.total_harga, tb_detail_transaksi.id_transaksi, tb_detail_transaksi.id_paket, tb_paket.id, tb_paket.id_outlet from tb_member, tb_transaksi, tb_detail_transaksi, tb_paket where tb_member.id = tb_transaksi.id_member and tb_detail_transaksi.id_paket = tb_paket.id and tb_paket.id_outlet = '" . $_SESSION['id_outlet'] . "' and tb_transaksi.id = tb_detail_transaksi.id_transaksi");
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
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <script>
    window.print();
  </script>
      </div>
