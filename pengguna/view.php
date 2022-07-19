        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data
                    <small>Pengguna</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#">Pengguna</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a class="btn btn-primary" href="index.php?page=pengguna/tambah">Tambah Data</a>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama Lengkap</th>
                                            <th>No.Hp</th>
                                            <th>Level</th>
                                            <th>Tanggal Terdaftar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_user ORDER BY id_user ASC");
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= $data['nama_lengkap'] ?></td>
                                                <td><?= $data['no_hp'] ?></td>
                                                <td><?= $data['level'] ?></td>
                                                <td><?= $data['tgl_daftar'] ?></td>
                                                <td>
                                                    <a href="index.php?page=pengguna/ubah&id_user=<?= $data['id_user']; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>

                                                    <a href="pengguna/hapus.php?id_user=<?= $data['id_user']; ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a>
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