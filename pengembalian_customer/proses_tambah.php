<?php
include "../koneksi.php";
if ($_POST) {
    $id_barang = $_POST['id_barang'];
    $id_pesanan = $_POST['id_pesanan'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    $jenis_kerusakan = $_POST['jenis_kerusakan'];
    $jumlah_kerusakan = $_POST['jumlah_kerusakan'];
    $ket_pengembalian = $_POST['ket_pengembalian'];
    $id_user = $_POST['id_user'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_pengembalian(id_barang,id_pesanan,tgl_pengembalian,jenis_kerusakan,jumlah_kerusakan,ket_pengembalian,id_user) 
    VALUES ('$id_barang', '$id_pesanan', '$tgl_pengembalian', '$jenis_kerusakan', '$jumlah_kerusakan', '$ket_pengembalian', '$id_user')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='index.php?page=pengembalian_customer/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='index.php?page=pengembalian_customer/tambah';</script>";
    }
}
