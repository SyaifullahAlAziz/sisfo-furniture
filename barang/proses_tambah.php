<?php
include "../koneksi.php";
if ($_POST) {
    $kode_barang = $_POST['kode_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga_barang = $_POST['harga_barang'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $ket_barang = $_POST['ket_barang'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_barang(kode_barang,jenis_barang,nama_barang,jumlah_barang,harga_barang,tgl_masuk,ket_barang) 
    VALUES ('$kode_barang', '$jenis_barang', '$nama_barang', '$jumlah_barang', '$harga_barang', '$tgl_masuk', '$ket_barang')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='index.php?page=barang/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='index.php?page=barang/tambah';</script>";
    }
}
