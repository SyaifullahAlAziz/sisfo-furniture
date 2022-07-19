        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data
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
                                        $('#myForm').attr('action', 'pengembalian_admin/cetak.php');
                                        $('#myForm').attr('target', '_blank');
                                        $('#myForm').submit();

                                    }
                                </script>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Tgl Pemesanan</th>
                                            <th>Jenis Kerusakan</th>
                                            <th>Jumlah Kerusakan</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;

                                        if (isset($_POST['filter'])) {
                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_pengembalian
                                                JOIN tbl_barang ON tbl_pengembalian.id_barang=tbl_barang.id_barang
                                                JOIN tbl_pesanan ON tbl_pengembalian.id_pesanan=tbl_pesanan.id_pesanan
                                                WHERE tbl_pengembalian.tgl_pengembalian BETWEEN '$_POST[mulai]' AND '$_POST[sampai]' ORDER BY id_pengembalian DESC");
                                        } else {
                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_pengembalian
                                                JOIN tbl_barang ON tbl_pengembalian.id_barang=tbl_barang.id_barang
                                                JOIN tbl_pesanan ON tbl_pengembalian.id_pesanan=tbl_pesanan.id_pesanan
                                                ORDER BY id_pengembalian DESC");
                                        }

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['nama_barang'] ?></td>
                                                <td><?= $data['tgl_pesanan'] ?></td>
                                                <td><?= $data['jenis_kerusakan'] ?></td>
                                                <td><?= $data['jumlah_kerusakan'] ?></td>
                                                <td><?= $data['ket_pengembalian'] ?></td>
                                                <td></td>
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