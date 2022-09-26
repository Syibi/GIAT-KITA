<?php
$conn = mysqli_connect('localhost','root','','giat_kita');

if (mysqli_connect_errno()) {
    echo "koneksi database gagal :".mysqli_connect_error();
}
?>