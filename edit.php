<?php
include "koneksi.php";
$no = $_GET['no'];
$sql = "SELECT * FROM linux WHERE no = '$no' ";
$query = mysqli_query($koneksi, $sql);

 while($linux = mysqli_fetch_assoc($query)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Edit</title>
</head>
<body>
    <h1>Data Edit</h1>
    <form action="proses_edit.php" method = "get">

        <input type="hidden" name = "no" value="<?= $linux['no']?>">

        <label for="">Nama</label><br>
        <input type="text" name = "nama" id="" value= "<? $linux['nama']?>"><br><br>

        <label for="">Paket</label><br>
        <input type="text" name = "paket" id="" value= "<? $linux['paket']?>"><br><br>

        <label for="">Rating</label><br>
        <input type="number" name = "rating" id="" value ="<? $linux['rating']?>"><br><br>
        
        <input type="submit" name = "Simpan" value ="ubah"><br><br>
    </form>
</body>
</html>
 <?php } ?>

