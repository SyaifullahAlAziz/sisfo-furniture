        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Form Tambah
                    <small>EOQ</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#">EOQ</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form action="index.php?page=eoq/proses_tambah" method="post">
                                    <div class="form-group">
                                        <label>Kode EOQ</label>
                                        <input class="form-control" type="text" name="kode_eoq" placeholder="Masukkan Kode EOQ" required>
                                    </div>

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
                                        <label>Jumlah Hari Kerja</label>
                                        <input class="form-control" type="number" name="jumlah_hari" placeholder="Masukkan Jumlah Hari Kerja" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Lead Time</label>
                                        <input class="form-control" type="text" name="lead_time" placeholder="Masukkan Lead Time" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Biaya Penyimpanan</label>
                                        <input class="form-control" type="number" name="biaya_penyimpanan" placeholder="Masukkan Biaya Penyimpanan" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Lead Time</label>
                                        <input class="form-control" type="text" name="lead_time" placeholder="Masukkan Lead Time" required>
                                    </div>

                                    <div class="form-group">
                                        <label>EOQ</label>
                                        <input class="form-control" type="text" name="eoq" placeholder="Masukkan EOQ" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Permintaan Per Hari</label>
                                        <input class="form-control" type="text" name="permintaan_perhari" placeholder="Masukkan Permintaan Per Hari" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Pesanan Kembali</label>
                                        <input class="form-control" type="text" name="pesanan_kembali" placeholder="Masukkan Pesanan Kembali" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Pesanan Optimal</label>
                                        <input class="form-control" type="text" name="pesanan_optimal" placeholder="Masukkan Optimal" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Lama Produksi</label>
                                        <input class="form-control" type="text" name="lama_produksi" placeholder="Masukkan Lama Produksi" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Persediaan Maksimum</label>
                                        <input class="form-control" type="text" name="persediaan_maksimum" placeholder="Masukkan Persediaan Maksimum" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->