<?php
include "../koneksi.php";
if ($_GET['id_pesanan']) {
    $query = mysqli_query($koneksi, "UPDATE tbl_pesanan SET status_pesanan='diterima',tgl_konfirmasi2=now()
    WHERE id_pesanan ='$_GET[id_pesanan]'");

    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=konfirmasi_customer/konfirmasi';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=konfirmasi_customer/konfirmasi';</script>";
    }
}
