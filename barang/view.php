        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data
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
                        <a style="margin-bottom: 10px;" class="btn btn-primary" href="index.php?page=barang/tambah">Tambah Data</a>
                        <div class="box">
                            <div class="box-header">
                                <form action="" method="post" id="myForm">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Mulai Dari</label>
                                                <input type="date" name="mulai" id="" class="form-control" value="<?= isset($_POST['filter']) ? $_POST['mulai'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Sampai</label>
                                                <input type="date" name="sampai" id="" class="form-control" value="<?= isset($_POST['filter']) ? $_POST['sampai'] : '' ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" name="filter" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Filter Data</button>
                                            <button onclick="cetak()" type="button" class="btn btn-info btn-block"><i class="fa fa-print"> </i> Cetak Data</button>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    function cetak() {
                                        $('#myForm').attr('action', 'barang/cetak.php');
                                        $('#myForm').attr('target', '_blank');
                                        $('#myForm').submit();

                                    }
                                </script>
                            </div>
                            <div class="box-body">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Tgl Masuk/Keluar</th>
                                            <th>Keterangan</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (isset($_POST['filter'])) {
                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang 
                                            WHERE tbl_barang.tgl_masuk BETWEEN '$_POST[mulai]' AND '$_POST[sampai]'
                                            ORDER BY id_barang DESC");
                                        } else {
                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_barang ORDER BY id_barang DESC");
                                        }

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['kode_barang'] ?></td>
                                                <td><?= $data['nama_barang'] ?></td>
                                                <td><?= $data['jumlah_barang'] ?></td>
                                                <td><?= $data['tgl_masuk'] ?></td>
                                                <td><?= $data['ket_barang'] ?></td>
                                                <td>Rp.<?= number_format($data['harga_barang']) ?></td>
                                                <td>
                                                    <a href="index.php?page=barang/ubah&id_barang=<?= $data['id_barang']; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>

                                                    <a href="barang/hapus.php?id_barang=<?= $data['id_barang']; ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->