<?php

include("koneksi.php");

if(isset($_POST['simpan'])){
    $nama       = $_POST['name'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sql = "INSERT INTO login (name, username, password) VALUE ('$nama','$username', '$password')";
    $query = mysqli_query($koneksi, $sql);

    if ($query){
        header('location:login.php?status=sukses');
    }else{
        header('location:register.php?gagal=register');
    }
}else{
    die ("akses dilarang....");
}


?>