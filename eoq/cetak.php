<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK EOQ</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1 style="text-align: center;">CETAK EOQ</h1>
    <?php
    include "../koneksi.php";
    $id_eoq = $_GET['id_eoq'];
    $query = mysqli_query($koneksi, "SELECT * FROM tbl_eoq 
    JOIN tbl_barang ON tbl_eoq.id_barang=tbl_barang.id_barang 
    WHERE id_eoq='$id_eoq'");

    $data = mysqli_fetch_array($query)
    ?>
    <center>
        <table style="margin-top:50px; width: 1000px;" class="table table-bordered">
            <tbody>
                <tr>
                    <td style="width:200px;">Nama Barang</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['nama_barang'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">Jumlah Hari Kerja</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['jumlah_hari'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">Lead Time</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['lead_time'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">Biaya Penyimpanan</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['biaya_penyimpanan'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">EOQ</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['eoq'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">Permintaan Per Hari</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['permintaan_perhari'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">Pesanan Kembali</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['pesanan_kembali'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">Pesanan Optimal</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['pesanan_optimal'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">Lama Produksi</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['lama_produksi'] ?></td>
                </tr>
                <tr>
                    <td style="width:200px;">Persediaan Maksimum</td>
                    <td style="width:50px; text-align: center;">:</td>
                    <td><?= $data['persediaan_maksimum'] ?></td>
                </tr>
            </tbody>
        </table>
    </center>
</body>

</html>