<?php
session_start();
if (isset($_SESSION['id_user'])) {

    echo "<script>alert('Anda Telah Login');
    window.location='index.php'
    </script>";
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page">
    <div class="row">
        <div class="col-md-6">
            <div style="position:relative;" class="login-box">
                <div style="width:500px; height:500px;" class="login-box-body">
                    <img src="assets/dist/img/panji_gallery.png" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div style="position:relative; right:155px;" class="login-box">
                <div style="width: 500px; height:500px;" class="login-box-body">
                    <h3 style="position:relative; top:55px;">
                        <i style=" font-size: 30px;" class="ion-document-text"> </i>
                        Form Login
                    </h3>
                    <form style="position:relative; top:55px;" action="" method="post">
                        <div style="width:400px;" class="form-group has-feedback">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div style="width:400px;" class="form-group has-feedback">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                            </div><br><br><br>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button style="width:400px;" type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div><!-- /.col -->
                        </div>

                    </form>
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
        </div>
    </div>


    <!-- jQuery 2.1.4 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="assets/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>

<?php
include "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    //cek data form ke database
    $user = $koneksi->query("SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");

    if ($user->num_rows > 0) {
        //pecah data user
        $data = $user->fetch_assoc();

        //simpan datanya ke session
        session_start();
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['level'] = $data['level'];

        echo "<script>alert('Login Berhasil');
            window.location='index.php'
            </script>";
    } else {
        echo "<script>alert('username Atau Password Salah');
            window.location='login.php'
            </script>";
    }
}

?>