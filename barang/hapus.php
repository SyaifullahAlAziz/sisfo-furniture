<?php
include "../koneksi.php";
$id_barang = $_GET['id_barang'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_barang WHERE id_barang ='$id_barang'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=barang/view';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=barang/view';</script>";
}
