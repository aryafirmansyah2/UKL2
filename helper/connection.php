<?php

$conn = mysqli_connect('localhost','root','','laundry');

// mengecek koneksi
if (mysqli_connect_errno())
{
    echo "Gagal koneksi ke MySQL : " . mysqli_connect_error();
} 

?>