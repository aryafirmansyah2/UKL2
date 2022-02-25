<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tlpn=$_POST['tlp'];
    include "../../../../helper/connection.php";

    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong'); location.href='../addOutlet.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='outlet.php';</script>";

    } elseif(empty($tlpn)){
        echo "<script>alert('tlpn tidak boleh kosong');location.href='outlet.php';</script>";

    } else {
        $insert=mysqli_query($conn,"insert into tb_outlet( nama, alamat, tlp ) value
        ('".$nama."','".$alamat."','".$tlpn."')") or
        die(mysqli_error($conn));
        
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='../outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='../outlet.php';</script>";
        }
    }
}
?>