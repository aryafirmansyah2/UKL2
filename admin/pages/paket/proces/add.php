<?php
if($_POST){
    $outlet=$_POST['outlet'];
    $jenis=$_POST['jenis'];
    $paket=$_POST['paket'];
    $harga=$_POST['harga'];
    
    include "../../../../helper/connection.php";

    if(empty($outlet)){
        echo "<script>location.href='../paket.php';</script>";


    } elseif(empty($jenis)){
        echo "<script>location.href='../paket.php';</script>";

    
    } elseif(empty($paket)){
        echo "<script>location.href='../paket.php';</script>";


    } elseif(empty($harga)){
        echo "<script>location.href='../paket.php';</script>";

    } else {
        $insert=mysqli_query($conn,"insert into tb_paket( id_outlet, jenis, nama_paket, harga) value
        ('".$outlet."','".$jenis."','".$paket."','".$harga."')") or
        die(mysqli_error($conn));
        
        if($insert){
            echo "<script>location.href='../paket.php';</script>";
        } else {
            echo "<script>location.href='../paket.php';</script>";
        }
}
}
?>