        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="assets/dist/img/user.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= $_SESSION['nama_lengkap'] ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <?php if ($_SESSION['level'] == 'admin') { ?>
                        <li class="header">NAVIGATION</li>
                        <li><a href="index.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Master</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.php?page=pengguna/view"><i class="fa fa-circle-o"></i> Pengguna</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?page=pemesanan_admin/view"><i class="fa fa-shopping-cart"></i> <span>Pemesanan</span></a></li>
                        <li><a href="index.php?page=konfirmasi_admin/konfirmasi"><i class="fa fa-check-circle"></i> <span>Konfirmasi</span></a></li>
                        <li><a href="index.php?page=pengembalian_admin/view"><i class="fa fa-retweet"></i> <span>Pengembalian Barang</span></a></li>
                        <li><a href="index.php?page=barang/view"><i class="fa fa-archive"></i> <span>Stok Barang</span></a></li>
                        <li><a href="index.php?page=eoq/view"><i class="fa fa-print"></i> <span>EOQ</span></a></li>
                        <li><a href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>
                    <?php }

                    if ($_SESSION['level'] == 'pemilik') {
                    ?>
                        <li class="header">NAVIGATION</li>
                        <li><a href="index.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                        <li><a href="index.php?page=pemesanan_admin/view"><i class="fa fa-shopping-cart"></i> <span>Pemesanan</span></a></li>
                        <li><a href="index.php?page=pengembalian_admin/view"><i class="fa fa-retweet"></i> <span>Pengembalian Barang</span></a></li>
                        <li><a href="index.php?page=barang/view"><i class="fa fa-archive"></i> <span>Stok Barang</span></a></li>
                        <li><a href="index.php?page=eoq/view"><i class="fa fa-print"></i> <span>EOQ</span></a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>
                    <?php }

                    if ($_SESSION['level'] == 'pelanggan') {
                    ?>
                        <li class="header">NAVIGATION</li>
                        <li><a href="index.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                        <li><a href="index.php?page=pemesanan_customer/view"><i class="fa fa-shopping-cart"></i> <span>Pemesanan</span></a></li>
                        <li><a href="index.php?page=konfirmasi_customer/konfirmasi"><i class="fa fa-check-circle"></i> <span>Konfirmasi</span></a></li>
                        <li><a href="index.php?page=pengembalian_customer/view"><i class="fa fa-retweet"></i> <span>Pengembalian Barang</span></a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>
                    <?php }
                    ?>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>