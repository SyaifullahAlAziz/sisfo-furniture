<?php
include "../koneksi.php";
if ($_POST) {
    $id_barang = $_POST['id_barang'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga_barang = $_POST['harga_barang'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $ket_barang = $_POST['ket_barang'];

    $query = mysqli_query($koneksi, "UPDATE tbl_barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', jumlah_barang='$jumlah_barang', harga_barang='$harga_barang', tgl_masuk='$tgl_masuk',ket_barang='$ket_barang'
    WHERE id_barang ='$id_barang'");

    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='index.php?page=barang/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='index.php?page=barang/ubah';</script>";
    }
}
