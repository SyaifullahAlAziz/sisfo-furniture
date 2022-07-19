        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data
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
                                        $('#myForm').attr('action', 'pemesanan_admin/cetak.php');
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
                                            <th>Kode Pemesanan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Nama Barang</th>
                                            <th>Tgl Pesan</th>
                                            <th>Harga</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;

                                        if (isset($_POST['filter'])) {
                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_pesanan
                                            JOIN tbl_user ON tbl_pesanan.id_user=tbl_user.id_user
                                            JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang  
                                            WHERE tbl_pesanan.tgl_pesanan BETWEEN '$_POST[mulai]' AND '$_POST[sampai]' 
                                            ORDER BY id_pesanan DESC");
                                        } else {
                                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_pesanan
                                            JOIN tbl_user ON tbl_pesanan.id_user=tbl_user.id_user
                                            JOIN tbl_barang ON tbl_pesanan.id_barang=tbl_barang.id_barang  
                                            ORDER BY id_pesanan DESC");
                                        }

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['kode_pesanan'] ?></td>
                                                <td><?= $data['nama_lengkap'] ?></td>
                                                <td><?= $data['nama_barang'] ?></td>
                                                <td><?= $data['tgl_pesanan'] ?></td>
                                                <td>Rp.<?= number_format($data['harga_barang']) ?></td>
                                                <td>Rp.<?= number_format($data['jumlah_pesanan'] * $data['harga_barang']) ?></td>
                                                <td>
                                                    <a href="index.php?page=pemesanan_admin/ubah&id_pesanan=<?= $data['id_pesanan']; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
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