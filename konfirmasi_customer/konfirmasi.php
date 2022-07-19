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
                            <div class="box-body">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Pemesanan</th>
                                            <th>Nama Pemesanan</th>
                                            <th>Status</th>
                                            <th>Tgl Konfirmasi 1</th>
                                            <th>Tgl Konfirmasi 2</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_pesanan 
                                        JOIN tbl_user ON tbl_pesanan.id_user=tbl_user.id_user");
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['kode_pesanan'] ?></td>
                                                <td><?= $data['id_user'] ?></td>
                                                <td><?= $data['status_pesanan'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($data['tgl_konfirmasi1'] == NULL) {
                                                        echo "-";
                                                    } else {
                                                        echo $data['tgl_konfirmasi1'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($data['tgl_konfirmasi2'] == NULL) {
                                                        echo "-";
                                                    } else {
                                                        echo $data['tgl_konfirmasi2'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($data['status_pesanan'] == 'dikirim') :
                                                    ?>
                                                        <a href="konfirmasi_customer/proses_konfirmasi.php?id_pesanan=<?= $data['id_pesanan'] ?>" class="btn btn-success" type="submit">Konfirmasi Penerimaan</a>
                                                    <?php elseif ($data['status_pesanan'] == 'pending') : ?>
                                                        Menunggu Konfirmasi
                                                    <?php else : ?>
                                                        Pesanan Diterima
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