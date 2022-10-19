<?php
require "config.php";

if(isset($_POST['submit'])){
    $nama_pemilik = $_POST['nama'];
    $no_telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $query = mysqli_query($db,"INSERT INTO penjual (nama_pemilik,no_telpon,alamat) VALUES ('$nama_pemilik','$no_telpon','$alamat')");
    if($query){
        header("Location:database.php");
    } else {
    echo "Tambah data error";
    }
}

if(isset($_POST['submit'])){
    $merk_hp = $_POST['merk'];
    $tahun_pemakaian = $_POST['tahun_pakai'];
    $harga = $_POST['harga'];
    $query = mysqli_query($db,"INSERT INTO smartphone (merk_hp,tahun_pemakaian,harga) VALUES ('$merk_hp','$tahun_pemakaian','$harga')");
    if($query){
        header("Location:database.php");
    } else {
    echo "Tambah data error";
    }
}
?>