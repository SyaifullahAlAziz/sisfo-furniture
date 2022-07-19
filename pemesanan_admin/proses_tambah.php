<?php
include "../koneksi.php";
if ($_POST) {
    $kode_pesanan = $_POST['kode_pesanan'];
    $id_user = $_POST['id_user'];
    $id_barang = $_POST['id_barang'];
    $jumlah_pesanan = $_POST['jumlah_pesanan'];
    $tgl_pesanan = $_POST['tgl_pesanan'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_pesanan(kode_pesanan,id_user,id_barang,jumlah_pesanan,tgl_pesanan) 
    VALUES ('$kode_pesanan', '$id_user', '$id_barang', '$jumlah_pesanan', '$tgl_pesanan')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='index.php?page=pemesanan_admin/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='index.php?page=pemesanan_admin/tambah';</script>";
    }
}
