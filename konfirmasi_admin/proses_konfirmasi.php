<?php
include "../koneksi.php";
if ($_GET) {

    //update status pesanan dan tgl konfirmasi
    $update = mysqli_query($koneksi, "UPDATE tbl_pesanan SET status_pesanan='dikirim',tgl_konfirmasi1=now()
    WHERE id_pesanan ='$_GET[id_pesanan]'");

    //menampilkan tbl pesanan
    $pesanan = mysqli_query($koneksi, "SELECT * FROM tbl_pesanan WHERE id_pesanan='$_GET[id_pesanan]'");
    $data = mysqli_fetch_array($pesanan);

    $id_barang = $data['id_barang'];
    $jumlah_pesanan = $data['jumlah_pesanan'];

    //update jumlah barang
    $barang = mysqli_query($koneksi, "UPDATE tbl_barang SET jumlah_barang=jumlah_barang-'$jumlah_pesanan'
    WHERE id_barang ='$id_barang'");

    if ($update && $pesanan && $barang) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=konfirmasi_admin/konfirmasi';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=konfirmasi_admin/konfirmasi';</script>";
    }
}
