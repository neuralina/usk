<?php
include "koneksi.php";
$no = $_GET['no'];
$nama = $_GET['nama'];
$paket = $_GET['paket'];
$rating = $_GET['rating'];

$sql = "UPDATE linux SET nama='$nama', paket = '$paket', rating = '$rating' WHERE no = '$no' ";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header ("location:index.php?edit=sukses");
}else {
    header ("location:index.php?edit=gagal");
}
?>