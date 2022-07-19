        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Form Tambah
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
                            <div class="box-body">
                                <form action="index.php?page=pengguna/proses_tambah" method="post">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" type="text" name="username" placeholder="Masukkan Username" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="Masukkan Password" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Level</label>
                                        <select style="width: 200px;" class="form-control" name="level">
                                            <option value="admin">Admin</option>
                                            <option value="pemilik">Pemilik</option>
                                            <option value="pelanggan">Pelanggan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Daftar</label>
                                        <input style="width: 200px;" class="form-control" type="date" name="tgl_daftar" required>
                                    </div>

                                    <div class="form-group">
                                        <label>No.Hp</label>
                                        <input class="form-control" type="number" name="no_hp" placeholder="Masukkan No. Handphone" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->