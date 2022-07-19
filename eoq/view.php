        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data
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
                            <div class="box-header">
                                <a class="btn btn-primary" href="index.php?page=eoq/tambah">Tambah Data</a>
                            </div>
                            <div class="box-body">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode EOQ</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Hari Kerja</th>
                                            <th>Lead Time</th>
                                            <th>Biaya Penyimpanan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;

                                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_eoq 
                                            JOIN tbl_barang ON tbl_eoq.id_barang=tbl_barang.id_barang 
                                            ORDER BY id_eoq DESC");

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['kode_eoq'] ?></td>
                                                <td><?= $data['nama_barang'] ?></td>
                                                <td><?= $data['jumlah_hari'] ?></td>
                                                <td><?= $data['lead_time'] ?></td>
                                                <td>Rp.<?= number_format($data['biaya_penyimpanan']) ?></td>
                                                <td>
                                                    <a class="btn btn-info" target="_blank" href="eoq/cetak.php?id_eoq=<?= $data['id_eoq'] ?>"><i class="fa fa-print"></i></a>

                                                    <a href="index.php?page=eoq/ubah&id_eoq=<?= $data['id_eoq']; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>

                                                    <a href="eoq/hapus.php?id_eoq=<?= $data['id_eoq']; ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a>
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