<?php
include "../koneksi.php";
$id_user = $_GET['id_user'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_user WHERE id_user ='$id_user'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=pengguna/view';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=pengguna/view';</script>";
}
