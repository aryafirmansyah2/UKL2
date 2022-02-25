<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $outlet=$_POST['outlet'];
    $role=$_POST['role'];
    include "../../../../helper/connection.php";

    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong'); location.href='../addPelanggan.php';</script>";


    } elseif(empty($username)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='../addPelanggan.php';</script>";

    
    } elseif(empty($pass)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='../addPelanggan.php';</script>";


    } elseif(empty($outlet)){
        echo "<script>alert('tlpn tidak boleh kosong');location.href='../addPelanggan.php';</script>";
    
    } elseif(empty($role)){
        echo "<script>alert('tlpn tidak boleh kosong');location.href='../addPelanggan.php';</script>";


    } else {
        $insert=mysqli_query($conn,"insert into tb_user( nama, username, password, id_outlet, role ) value
        ('".$nama."','".$username."','".md5($pass)."','".$outlet."','".$role."')") or
        die(mysqli_error($conn));
        
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='../pengguna.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='../pelanggan.php';</script>";
    }
}
}
?>