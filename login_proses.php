<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM Login WHERE username='$username' AND password='$password' ";
$query = mysqli_query($koneksi, $sql); 
$cek = mysqli_num_rows($query); 

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header('location:index.php');
}else{
    header("location:login.php?pesan=gagal");
}
?>