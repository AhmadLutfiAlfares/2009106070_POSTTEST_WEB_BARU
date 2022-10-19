<?php
include "config.php";

$sql = "SELECT * FROM smartphone INNER JOIN penjual ON smartphone.id_produk=penjual.id_penjual"; 
$query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/database.css">
    <title>Data Smartphone</title>
</head>
<body>
    <div class="header">
        <h1>Data Handphone</h1>
    </div>
    <div class="main" style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th colspan="7" class="thead">
                        <h3 class="center">Daftar Hp Second</h3>
                    </th>
                    <th style="width: 20px;" colspan="2">
                        <a href="formdatabase.php" class="tambah">Tambah</a>
                    </th>
                </tr>
                <tr>
                    <th>No.</th>
                    <th>Pemilik</th>
                    <th>Handphone</th>
                    <th>Tahun Pemakaian</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Harga</th>
                    <th colspan="2">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "config.php";
                $i = 1;
                while ($data = mysql_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $data['nama_pemilik'] ?></td>
                    </tr>
                }
                ?>
            </tbody>
        </table>
    </div>
</html>