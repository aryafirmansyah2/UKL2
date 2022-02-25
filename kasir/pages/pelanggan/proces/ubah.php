<?php
if($_POST){

    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $tlpn=$_POST['tlp'];

       if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong'); location.href='../pelanggan.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='../pelanggan.php';</script>";
    
    } elseif(empty($jk)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='../pelanggan.php';</script>";

    } elseif(empty($tlpn)){
        echo "<script>alert('tlpn tidak boleh kosong');location.href='../pelanggan.php';</script>";

    }else {
    include "../../../../helper/connection.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update tb_member set nama='".$nama."',alamat='".$alamat."',jenis_kelamin='".$jk."', 
            tlp='".$tlpn."' where id = '".$id."' ") or
            die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='../pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='../pelanggan.php';</script>";
            }
         
    }
}
}
?>