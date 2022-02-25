<?php
if ($_POST) {
    session_start();
    $outlet = $_SESSION['id_outlet'];
    $paket = $_POST['paket'];
    $id_user = $_SESSION['id'];
    $invoice = 'CCIAN'.Date('Ymdsi');
    $id_member = $_GET['id'];
    $tgl_sekarang = Date('Y-m-d h:i:s');
    $tujuh_hari   = mktime(0,0,0,date("n"),date("j")+7,date("Y")); // Query batas waktu
    $batas_waktu = Date('Y-m-d h:i:s', $tujuh_hari); // Batas Waktu
    $biaya_tambahan = $_POST['tambahan'];
    $diskon = $_POST['diskon'];
    $pajak = $_POST['pajak'];
    $status = "baru";
    $jumlah = $_POST['jumlah'];
    $dibayar = "belum_dibayar";

    if (empty($jumlah)) {
        echo "<script>alert('Jumlah tidak boleh kosong');location.href='transaksi-tambah.php?id=".$_GET['id']."';</script>";
    }
    else {
        include "koneksi.php";
        $transaksi = mysqli_query($conn, "insert into tb_transaksi(id_outlet, kode_invoice,id_member,tgl, batas_waktu, biaya_tambahan, diskon, pajak, status, dibayar, id_user) value ('" . $outlet . "','" . $invoice. "','" . $id_member. "','" .$tgl_sekarang."','".$batas_waktu."','".$biaya_tambahan."','".$diskon."','".$pajak."','".$status."','".$dibayar."','".$id_user."')") or
        die(mysqli_error($conn));
        if ($transaksi) {
            include "koneksi.php";
            $qry_get_outlet = mysqli_query($conn, "select * from tb_outlet where id = '".$outlet."'");
            $qry_get_harga = mysqli_query($conn, "select * from tb_paket where id = '".$paket."'");
            $qry_get_transaksi = mysqli_query($conn, "select * from tb_transaksi where kode_invoice = '".$invoice."'");
            $dt_transaksi = mysqli_fetch_array($qry_get_transaksi);
            $dt_paket = mysqli_fetch_array($qry_get_harga);
            $dt_outlet = mysqli_fetch_array($qry_get_outlet);
            $harga = $dt_paket['harga'];

            $total = ($jumlah*$harga)-($diskon/100*$harga*$jumlah)+$biaya_tambahan;
            $total_harga = $total+($pajak/100*$total);

            $id_transaksi = $dt_transaksi['id'];
            $detail_transaksi = mysqli_query($conn, "insert into tb_detail_transaksi(id_transaksi, id_paket, qty, total_harga) value ('" . $id_transaksi . "','" . $paket. "','" .$jumlah."','".$total_harga."')") or
            die(mysqli_error($conn));
            
            echo "<script>alert('Transaksi Sukses');location.href='transaksi.php';</script>";

        } else {
            echo "<script>alert('Transaksi Gagal');location.href='transaksi-tambah.php?id=".$_GET['id']."';</script>";
        }
    }
}