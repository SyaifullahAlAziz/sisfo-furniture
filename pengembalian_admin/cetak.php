<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengembalian</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div style="text-align: center;">
        <h1>TOKO PANJI FURNITURE</h1>
        <hr style="border-width: thick; background-color:black;">
        <h3>LAPORAN PENGEMBALIAN</h3>
        <p><?= date('d/m/y', strtotime($_POST['mulai'])) ?> s/d <?= date('d/m/y', strtotime($_POST['sampai'])) ?> </p>
    </div>
    <center>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tgl Pemesanan</th>
                    <th>Jenis Kerusakan</th>
                    <th>Jumlah Kerusakan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                include "../koneksi.php";
                if ($_POST['mulai'] == '' && $_POST['sampai'] == '') {
                    echo "<script>alert('harap pilih tanggal terlebih dahulu')
                    window.location = '../index.php?page=pengembalian_admin/view'
                    </script>";
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_pengembalian
                    JOIN tbl_barang ON tbl_pengembalian.id_barang=tbl_barang.id_barang
                    JOIN tbl_pesanan ON tbl_pengembalian.id_pesanan=tbl_pesanan.id_pesanan
                    WHERE tbl_pengembalian.tgl_pengembalian BETWEEN '$_POST[mulai]' AND '$_POST[sampai]'
                    ORDER BY id_pengembalian DESC");
                }

                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td>X(<?= $no++ ?>)</td>
                        <td>X(<?= $data['nama_barang'] ?>)</td>
                        <td>X(<?= $data['tgl_pesanan'] ?>)</td>
                        <td>X(<?= $data['jenis_kerusakan'] ?>)</td>
                        <td>X(<?= $data['jumlah_kerusakan'] ?>)</td>
                        <td>X(<?= $data['ket_pengembalian'] ?>)</td>
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