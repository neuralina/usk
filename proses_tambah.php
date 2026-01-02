<?php
include "koneksi.php";
$nama = $_GET['nama'];
$paket = $_GET['paket'];
$rating = $_GET['rating'];
$sql = "INSERT INTO linux (nama,paket,rating) VALUES ('$nama','$paket','$rating')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header ("location:index.php?simpan=sukses");
}else{
    header ("location:index.php?simpan=gagal");
}
?>