        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Form Tambah
                    <small>Pengembalian</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#">Pengembalian</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form action="index.php?page=pengembalian_customer/proses_tambah" method="post">
                                    <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <select class="form-control" name="id_barang">
                                            <option>Silahkan Pilih Nama Barang</option>
                                            <?php
                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang");
                                            while ($d = mysqli_fetch_array($query)) {
                                            ?>
                                                <option value="<?= $d['id_barang'] ?>"> <?= $d['nama_barang']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tgl Pesanan</label>
                                        <select class="form-control" name="id_pesanan">
                                            <option>Silahkan Pilih Tgl Pesanan</option>
                                            <?php
                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_pesanan");
                                            while ($d = mysqli_fetch_array($query)) {
                                            ?>
                                                <option value="<?= $d['id_pesanan'] ?>"> <?= $d['tgl_pesanan']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Pengembalian</label>
                                        <input style="width: 200px;" class="form-control" type="date" name="tgl_pengembalian" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Kerusakan</label>
                                        <input class="form-control" type="text" name="jenis_kerusakan" placeholder="Masukkan Jenis Kerusakan" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah Kerusakan</label>
                                        <input class="form-control" type="number" name="jumlah_kerusakan" placeholder="Masukkan Jumlah Kerusakan" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input class="form-control" type="text" name="ket_pengembalian" placeholder="Masukkan Keterangan">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->