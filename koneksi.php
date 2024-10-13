<?php
$koneksi = mysqli_connect("localhost","root","","smktelkomardhan");

//check koneksi
if (mysqli_connect_error()) {
    echo "koneksi data base gagal : ".  mysqli_connect_error();
}


?>