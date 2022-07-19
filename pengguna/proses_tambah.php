<?php
include "../koneksi.php";
if ($_POST) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $level = $_POST['level'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $no_hp = $_POST['no_hp'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_user(nama_lengkap,username,password,level,tgl_daftar,no_hp) 
    VALUES ('$nama_lengkap', '$username', '$password', '$level', '$tgl_daftar', '$no_hp')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='index.php?page=pengguna/view';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='index.php?page=pengguna/tambah';</script>";
    }
}
