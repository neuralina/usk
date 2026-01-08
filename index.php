<?php
include "koneksi.php";
$sql = "SELECT * FROM linux";
$query = mysqli_query($koneksi, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data linux</h1>
    <a href="tambah.php"><button>Tambah<button></a><br>
    <table border = "1">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>paket</th>
            <th>rating</th>
            <th>aksi</th>
        </tr>
        <?php while ($linux = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <td><?=$linux ['no']?></td>
                <td><?=$linux ['nama']?></td>
                <td><?=$linux ['paket']?></td>
                <td><?=$linux ['rating']?></td>
                <td>
                    <a href = "edit.php?no=<?= $linux['no']?>">Edit</a> |
                    <a href = "hapus.php?no=<?= $linux['no']?>">Hapus</a> 
                </td>
            </tr>

       <?php } ?>
    </table>
</body>
</html>