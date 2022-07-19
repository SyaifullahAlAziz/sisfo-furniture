<?php
include "../koneksi.php";
$id_eoq = $_GET['id_eoq'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_eoq WHERE id_eoq ='$id_eoq'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=eoq/view';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=eoq/view';</script>";
}
