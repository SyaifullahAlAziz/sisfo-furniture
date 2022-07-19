<?php
include "../koneksi.php";
if ($_POST) {
    $id_eoq = $_POST['id_eoq'];
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

    $query = mysqli_query($koneksi, "UPDATE tbl_eoq SET kode_eoq='$kode_eoq', id_barang='$id_barang', jumlah_hari='$jumlah_hari', lead_time='$lead_time',biaya_penyimpanan='$biaya_penyimpanan',eoq='$eoq',permintaan_perhari='$permintaan_perhari',pesanan_kembali='$pesanan_kembali',pesanan_optimal='$pesanan_optimal',lama_produksi='$lama_produksi',persediaan_maksimum='$persediaan_maksimum'
    WHERE id_eoq ='$id_eoq'");

    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='index.php?page=eoq/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='index.php?page=eoq/ubah';</script>";
    }
}
