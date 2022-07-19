<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div style="text-align: center;">
        <h1>TOKO PANJI FURNITURE</h1>
        <hr style="border-width: thick; background-color:black;">
        <h3>LAPORAN BARANG TERSEDIA</h3>
        <p><?= date('d/m/y', strtotime($_POST['mulai'])) ?> s/d <?= date('d/m/y', strtotime($_POST['sampai'])) ?></p>
    </div>
    <center>
        <table class="table table-bordered" style="width: 1200px; margin-top:50px;">
            <thead>
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Kode Barang</th>
                    <th style="text-align:center;">Nama Barang</th>
                    <th style="text-align:center;">Jumlah</th>
                    <th style="text-align:center;">Tgl Masuk</th>
                    <th style="text-align:center;">Keterangan</th>
                    <th style="text-align:center;">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                include "../koneksi.php";
                if ($_POST['mulai'] == '' && $_POST['sampai'] == '') {
                    echo "<script>alert('harap pilih tanggal terlebih dahulu')
                    window.location = '../index.php?page=barang/view'
                    </script>";
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang 
                    WHERE tbl_barang.tgl_masuk BETWEEN '$_POST[mulai]' AND '$_POST[sampai]'
                    ORDER BY id_barang DESC");
                }

                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr style="text-align:center;">
                        <td>X(<?= $no++ ?>)</td>
                        <td>X(<?= $data['kode_barang'] ?>)</td>
                        <td>X(<?= $data['nama_barang'] ?>)</td>
                        <td>X(<?= $data['jumlah_barang'] ?>)</td>
                        <td>X(<?= $data['tgl_masuk'] ?>)</td>
                        <td>X(<?= $data['ket_barang'] ?>)</td>
                        <td>X(<?= $data['harga_barang'] ?>)</td>
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