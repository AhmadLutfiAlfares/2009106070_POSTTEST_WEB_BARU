<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/database.css">
    <title>Form Tambah Data</title>
</head>
<body>
    <div class="head">
        <h1>Form Tambah Data</h1>
    </div>
    <div class="form">
        <h3>Tambah Data Baru</h3>
        <form action="tambah.php" method="post">
            <label for="">Nama Pemilik</label><br>
            <input type="text" name="nama" class="form-text"><br>

            <label for="">Merk Handphone</label><br>
            <input type="text" name="merk" class="form-text"><br>

            <label for="">Tahun Pemakaian</label><br>
            <input type="text" name="tahun_pakai" class="form-text"><br>

            <label for="">No. Telp</label><br>
            <input type="text" name="telpon" class="form-text"><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="64" rows="10"></textarea><br>

            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text"><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>
</body>
</html>


