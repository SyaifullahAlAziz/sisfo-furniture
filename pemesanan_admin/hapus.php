<?php
include "../koneksi.php";
$id_pesanan = $_GET['id_pesanan'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_pesanan WHERE id_pesanan ='$id_pesanan'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=pemesanan_admin/view';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=pemesanan_admin/view';</script>";
}
