<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemesanan</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div style="text-align: center;">
        <h1>TOKO PANJI FURNITURE</h1>
        <hr style="border-width: thick; background-color:black;">
        <h3>LAPORAN PEMESANAN</h3>
        <p><?= date('d/m/y', strtotime($_POST['mulai'])) ?> s/d <?= date('d/m/y', strtotime($_POST['sampai'])) ?></p>
    </div>
    <center>
        <table class="table table-bordered" style="width: 1200px; margin-top:50px;">
            <thead>
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Kode Pemesanan</th>
                    <th style="text-align:center;">Nama Pemesan</th>
                    <th style="text-align:center;">Nama Barang</th>
                    <th style="text-align:center;">Tgl Pesan</th>
                    <th style="text-align:center;">Harga</th>
                    <th style="text-align:center;">Jumlah Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                include "../koneksi.php";
                if ($_POST['mulai'] == '' && $_POST['sampai'] == '') {
                    echo "<script>alert('harap pilih tanggal terlebih dahulu')
                    window.location = '../index.php?page=pemesanan_admin/view'
                    </script>";
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_pesanan
                    JOIN tbl_user ON tbl_pesanan.id_user=tbl_user.id_user
                    JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang
                    WHERE tbl_pesanan.tgl_pesanan BETWEEN '$_POST[mulai]' AND '$_POST[sampai]' 
                    ORDER BY id_pesanan DESC");
                }

                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr style="text-align:center;">
                        <td>X(<?= $no++ ?>)</td>
                        <td>X(<?= $data['kode_pesanan'] ?>)</td>
                        <td>X(<?= $data['nama_lengkap'] ?>)</td>
                        <td>X(<?= $data['nama_barang'] ?>)</td>
                        <td>X(<?= $data['tgl_pesanan'] ?>)</td>
                        <td>X(<?= $data['harga_barang'] ?>)</td>
                        <td>X(<?= $data['jumlah_pesanan'] * $data['harga_barang'] ?>)</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </center>
</body>
<script>
    window.print();
</script>

</html>