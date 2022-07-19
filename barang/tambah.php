        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Form Tambah
                    <small>Barang</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#">Barang</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form action="index.php?page=barang/proses_tambah" method="post">
                                    <div class="form-group">
                                        <label>Kode Barang</label>
                                        <input class="form-control" type="text" name="kode_barang" placeholder="Masukkan Kode Barang" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Barang</label>
                                        <input class="form-control" type="text" name="jenis_barang" placeholder="Masukkan Jenis Barang" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input class="form-control" type="text" name="nama_barang" placeholder="Masukkan Nama Barang" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah Barang</label>
                                        <input class="form-control" type="number" name="jumlah_barang" placeholder="Masukkan Jumlah Barang" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Harga Barang</label>
                                        <input class="form-control" type="number" name="harga_barang" placeholder="Masukkan Harga Barang" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tgl Masuk</label>
                                        <input style="width: 200px;" class="form-control" type="date" name="tgl_masuk" placeholder="Masukkan Tanggal Masuk" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input class="form-control" type="text" name="ket_barang" placeholder="Masukkan Keterangan Barang" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->