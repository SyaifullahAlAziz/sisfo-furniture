<?php

$id_pesanan = $_GET['id_pesanan'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_pesanan
JOIN tbl_user ON tbl_pesanan.id_user=tbl_user.id_user
JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang  
WHERE id_pesanan='$id_pesanan'");
$data = mysqli_fetch_array($query);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Ubah
            <small>Pemesanan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Pemesanan</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form action="index.php?page=pemesanan_admin/proses_ubah" method="post">
                            <input type="hidden" name="id_pesanan" value="<?= $data['id_pesanan'] ?>">

                            <div class="form-group">
                                <label>Kode Pemesanan</label>
                                <input class="form-control" type="text" name="kode_pesanan" placeholder="Masukkan Kode Pemesanan" value="<?= $data['kode_pesanan'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Nama Pemesan</label>
                                <select class="form-control" name="id_user">
                                    <option>Silahkan Pilih Nama Pemesan</option>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_user");
                                    while ($d = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $d['id_user'] ?>" <?= $d['id_user'] == $data['id_user'] ? 'selected' : '' ?>>
                                            <?= $d['nama_lengkap']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <select class="form-control" name="id_barang">
                                    <option>Silahkan Pilih Nama Barang</option>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang");
                                    while ($d = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $d['id_barang'] ?>" <?= $d['id_barang'] == $data['id_barang'] ? 'selected' : '' ?>>
                                            <?= $d['nama_barang']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jumlah Pesanan</label>
                                <input class="form-control" type="number" name="jumlah_pesanan" placeholder="Masukkan Tanggal Pesanan" value="<?= $data['jumlah_pesanan'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Harga Barang</label>
                                <select class="form-control" name="id_barang">
                                    <option>Silahkan Pilih Harga Barang</option>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang");
                                    while ($d = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $d['id_barang'] ?>" <?= $d['id_barang'] == $data['id_barang'] ? 'selected' : '' ?>>
                                            <?= $d['harga_barang']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tgl Pesanan</label>
                                <input style="width: 200px;" class="form-control" type="date" name="tgl_pesanan" placeholder="Masukkan Tanggal Pesanan" value="<?= $data['tgl_pesanan'] ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->