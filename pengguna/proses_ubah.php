<?php
include "../koneksi.php";
if ($_POST) {
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $level = $_POST['level'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $no_hp = $_POST['no_hp'];

    $query = mysqli_query($koneksi, "UPDATE tbl_user SET nama_lengkap='$nama_lengkap', username='$username', password='$password', level='$level',tgl_daftar='$tgl_daftar', no_hp='$no_hp'
    WHERE id_user ='$id_user'");

    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='index.php?page=pengguna/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='index.php?page=pengguna/ubah';</script>";
    }
}
