<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "../helper/connection.php";
       
        $qry_login = mysqli_query($conn, "select * from tb_user where username = '" . $username . "' and password = '" . md5($password) . "'");
        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id'] = $dt_login['id'];
            $_SESSION['id_outlet'] = $dt_login['id_outlet'];
            $_SESSION['nama'] = $dt_login['nama'];
            $_SESSION['status_login'] = true;

            $user = $dt_login['username'];
            $pass = $dt_login['password'];
            $kelompok = $dt_login['role'];
            if($kelompok == "admin"){
                header("location: ../admin/nav.php");
            }elseif($kelompok == "kasir"){
                header("location: ../kasir/nav.php");
            }else{
                header("location: ../owner/nav.php ");
            }
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
}