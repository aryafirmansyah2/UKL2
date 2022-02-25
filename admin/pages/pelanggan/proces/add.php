<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $tlpn=$_POST['tlp'];
    include "../../../../helper/connection.php";

    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong'); location.href='../addPelanggan.php';</script>";


    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='../addPelanggan.php';</script>";

    
    } elseif(empty($jk)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='../addPelanggan.php';</script>";


    } elseif(empty($tlpn)){
        echo "<script>alert('tlpn tidak boleh kosong');location.href='../addPelanggan.php';</script>";


    } else {
        $insert=mysqli_query($conn,"insert into tb_member( nama, alamat, jenis_kelamin, tlp ) value
        ('".$nama."','".$alamat."','".$jk."','".$tlpn."')") or
        die(mysqli_error($conn));
        
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='../pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='../pelanggan.php';</script>";
    }
}
}
?>