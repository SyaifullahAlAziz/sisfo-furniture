<?php
include "../koneksi.php";
if ($_POST) {
    $id_pesanan = $_POST['id_pesanan'];
    $kode_pesanan = $_POST['kode_pesanan'];
    $id_user = $_POST['id_user'];
    $id_barang = $_POST['id_barang'];
    $jumlah_pesanan = $_POST['jumlah_pesanan'];
    $tgl_pesanan = $_POST['tgl_pesanan'];

    $query = mysqli_query($koneksi, "UPDATE tbl_pesanan SET kode_pesanan='$kode_pesanan', id_user='$id_user', id_barang='$id_barang', jumlah_pesanan='$jumlah_pesanan',tgl_pesanan='$tgl_pesanan'
    WHERE id_pesanan ='$id_pesanan'");

    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='index.php?page=pemesanan_customer/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='index.php?page=pemesanan_customer/ubah';</script>";
    }
}
