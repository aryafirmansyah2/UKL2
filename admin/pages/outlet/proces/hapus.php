<?php

if($_GET['id']){
include "../../../../helper/connection.php";
$qry_hapus=mysqli_query($conn,"delete from tb_outlet where
id='".$_GET['id']."'");

if($qry_hapus){
    echo "<script>alert('Sukses Menghapus Outlet');location.href='../outlet.php';</script>";
} else {
    echo "<script>alert('Gagal Menghapus Outlet');location.href='../outlet.php';</script>";
}
}
?>