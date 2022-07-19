        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data
                    <small>Konfirmasi</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#">Konfirmasi</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Pemesanan</th>
                                            <th>Nama Pemesanan</th>
                                            <th>Status</th>
                                            <!-- Tanggal Dikonfirmasi Admin / Dikirim Admin -->
                                            <th>Tgl Konfirmasi 1</th>
                                            <!-- Tanggal Dikonfirmasi Pelanggan / Diterima Pelanggan -->
                                            <th>Tgl Konfirmasi 2</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_pesanan JOIN tbl_user 
                                        ON tbl_pesanan.id_user=tbl_user.id_user ORDER BY id_pesanan DESC");
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['kode_pesanan'] ?></td>
                                                <td><?= $data['nama_lengkap'] ?></td>
                                                <td><?= $data['status_pesanan'] ?></td>
                                                <td>
                                                    <?php if ($data['tgl_konfirmasi1'] == NULL) {
                                                        echo "Menunggu Konfirmasi";
                                                    } else {
                                                        echo $data['tgl_konfirmasi1'];
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if ($data['tgl_konfirmasi2'] == NULL) {
                                                        echo "Menunggu Konfirmasi";
                                                    } else {
                                                        echo $data['tgl_konfirmasi2'];
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($data['status_pesanan'] == 'pending') :
                                                    ?>
                                                        <a href="konfirmasi_admin/proses_konfirmasi.php?id_pesanan=<?= $data['id_pesanan'] ?>" class="btn btn-success" type="submit" name="konfirmasi">Konfirmasi</a>
                                                    <?php else : ?>
                                                        -
                                                    <?php endif;  ?>
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