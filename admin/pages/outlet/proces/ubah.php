<?php
if($_POST){

    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tlpn=$_POST['tlp'];

       if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong'); location.href='../addOutlet.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='outlet.php';</script>";

    } elseif(empty($tlpn)){
        echo "<script>alert('tlpn tidak boleh kosong');location.href='outlet.php';</script>";

    }else {
    include "../../../../helper/connection.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update tb_outlet set nama='".$nama."',alamat='".$alamat."', 
            tlp='".$tlpn."' where id = '".$id."' ") or
            die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='../outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='../outlet.php';</script>";
            }
         
    }
}
}
?>