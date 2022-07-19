<?php
include "../koneksi.php";
if ($_POST) {
    $kode_eoq = $_POST['kode_eoq'];
    $id_barang = $_POST['id_barang'];
    $jumlah_hari = $_POST['jumlah_hari'];
    $lead_time = $_POST['lead_time'];
    $biaya_penyimpanan = $_POST['biaya_penyimpanan'];
    $eoq = $_POST['eoq'];
    $permintaan_perhari = $_POST['permintaan_perhari'];
    $pesanan_kembali = $_POST['pesanan_kembali'];
    $pesanan_optimal = $_POST['pesanan_optimal'];
    $lama_produksi = $_POST['lama_produksi'];
    $persediaan_maksimum = $_POST['persediaan_maksimum'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_eoq(kode_eoq,id_barang,jumlah_hari,lead_time,biaya_penyimpanan,eoq,permintaan_perhari,pesanan_kembali,pesanan_optimal,lama_produksi,persediaan_maksimum) 
    VALUES ('$kode_eoq', '$id_barang', '$jumlah_hari', '$lead_time', '$biaya_penyimpanan', '$eoq', '$permintaan_perhari', '$pesanan_kembali','$pesanan_optimal','$lama_produksi','$persediaan_maksimum')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='index.php?page=eoq/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='index.php?page=eoq/tambah';</script>";
    }
}
