<?php

$id_user = $_GET['id_user'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE id_user='$id_user'");
$data = mysqli_fetch_array($query);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Ubah
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
                        <form action="index.php?page=pengguna/proses_ubah" method="post">
                            <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?= $data['nama_lengkap'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Masukkan Username" value="<?= $data['nama_lengkap'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Level</label>
                                <select style="width: 200px;" class="form-control" name="level">
                                    <option value="admin" <?= $data['level'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                    <option value="pemilik" <?= $data['level'] == 'pemilik' ? 'selected' : '' ?>>Pemilik</option>
                                    <option value="pelanggan" <?= $data['level'] == 'pelanggan' ? 'selected' : '' ?>>Pelanggan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Daftar</label>
                                <input style="width: 200px;" class="form-control" type="date" name="tgl_daftar" value="<?= $data['tgl_daftar'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label>No.Hp</label>
                                <input class="form-control" type="number" name="no_hp" placeholder="Masukkan No. Handphone" value="<?= $data['no_hp'] ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->