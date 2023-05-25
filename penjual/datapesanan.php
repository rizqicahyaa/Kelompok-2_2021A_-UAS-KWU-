<?php
@session_start();
require_once '../koneksi.php';
$kon = new Koneksi();
$idproduk = @$_REQUEST['produk_id'];
$toko = @$_REQUEST['toko_id'];
$idtoko = @$_SESSION['toko_id'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kerajinanku</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/logo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/font-awesome.min.css">
    <!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" style="width: 100px;" /></a>
            </div>
            <div class="nalika-profile">
                <?php
                $que = $kon->kueri("SELECT * FROM toko a INNER JOIN toko b ON a.toko_id = b.toko_id WHERE a.toko_id = '$idtoko'");
                $hasil = $kon->hasil_data($que);
                ?>
                <div class="profile-dtl">
                    <a href="#"><img src="<?= $hasil['toko_foto']; ?>" alt="" /></a>
                    <h2><?php echo $hasil['toko_nama'] ?></h2>
                </div>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a href="index.php">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false" class="active" style="background-color: #E7DAD4;"><i class="icon nalika-folder icon-wrap" style=" color: #000000;"></i> <span class="mini-click-non" style=" color: #000000;">Data</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li class="active" style="background-color: #E7DAD4;" style=" color: #000000;"><a title="Inbox" href="datapesanan.php"><span class="mini-sub-pro" style=" color: #000000;">Data Pesanan</span></a></li>
                                <li><a title="View Mail" href="datareview.php"><span class="mini-sub-pro">Data Review</span></a></li>
                                <li><a title="Compose Mail" href="datatoko.php"><span class="mini-sub-pro">Data Toko</span></a></li>
                                <li><a title="Pdf Viewer" href="dataproduk.php"><span class="mini-sub-pro">Data Produk</span></a></li>
                            </ul>
                        </li>
                        <li><a href="../logout.php"><i class="icon nalika-unlocked icon-wrap"></i><span class="mini-click-non"> Log Out</span></a>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" style="width: 100px;" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="icon nalika-menu-task"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" href="index.php">Dashboard <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Data<span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="datapesanan.php">Data Pesanan</a>
                                                </li>
                                                <li><a href="datareview.php">Data Review</a>
                                                </li>
                                                <li><a href="datatoko.php">Data Toko</a>
                                                </li>
                                                <li><a href="dataproduk.php">Data Produk</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap" style="margin-top: 30px;">
                            <div class="row">
                                <h4 style="margin-left: 15px;">Data Pesanan</h4>
                                <div class="breadcomb-report">
                                    <a href="laporan/laporandatapesanan.php?toko_id=<?= $hasil['toko_id'] ?>"><button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn" style="color: white;"><i class="icon nalika-download"></i> Unduh Pdf</button></a>
                                </div>
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pembeli</th>
                                        <th>Kode Transaksi</th>
                                        <th>Waktu Transaksi</th>
                                        <th>Produk</th>
                                        <th>Status Pembayaran</th>
                                        <th>Status Pesanan</th>
                                        <th>Pengaturan</th>
                                    </tr>
                                    <tr>
                                        <?php
                                        $que = $kon->kueri("SELECT * FROM transaksi a JOIN transaksi_detail b ON a.transaksi_id = b.transaksi_id 
                                        JOIN pembeli c ON a.pembeli_id = c.pembeli_id JOIN produk d ON b.produk_id = d.produk_id
                                        JOIN toko e ON d.toko_id = e.toko_id
                                        WHERE d.toko_id = '$idtoko'");
                                        $no = 1;
                                        $jumlah = $kon->jumlah_data($que);
                                        if ($jumlah == 0) {
                                            echo "<tr><td colspan=12>Data Kosong...</td></tr>";
                                        } else {
                                            while ($data = $que->fetch(PDO::FETCH_ASSOC)) {
                                                echo "<tr>";
                                                echo "<td>$no</td>";
                                                echo "<td>$data[pembeli_nama]</td>";
                                                echo "<td>$data[transaksi_id]</td>";
                                                echo "<td>$data[transaksi_tanggal]</td>";
                                                echo "<td>$data[produk_nama]</td>";

                                                if ($data['status_pembayaran'] == 'Belum dikonfirmasi') {
                                                    echo "<td><button class='ps-setting'\">Belum diKonfirmasi</button></td>";
                                                } else if ($data['status_pembayaran'] == 'Belum diBayar') {
                                                    echo "<td><button class='dt-setting'\">Belum diBayar</button></td>";
                                                } else if ($data['status_pembayaran'] == 'Telah diBayar') {
                                                    echo "<td><button class='pd-setting-ed'\">Telah diBayar</button></td>";
                                                } else {
                                                    echo "<td><button class='ds-setting'\">Dibatalkan</button></td>";
                                                }
                                                
                                                if ($data['status_pesanan'] == 'Sedang Diproses') {
                                                    echo "<td><button class='ps-setting'\">Sedang DiProses</button></td>";
                                                } else if ($data['status_pesanan'] == 'Sedang Dikemas') {
                                                    echo "<td><button class='pt-setting'\">Sedang Dikemas</button></td>";
                                                } else if ($data['status_pesanan'] == 'Dalam Pengiriman') {
                                                    echo "<td><button class='dt-setting'\">Dalam Pengiriman</button></td>";
                                                } else if ($data['status_pesanan'] == 'Telah Diterima') {
                                                    echo "<td><button class='pd-setting-ed'\">Telah Diterima</button></td>";
                                                } else {
                                                    echo "<td><button class='ds-setting'\">Dibatalkan</button></td>";
                                                }
                                                echo "<td><a href='datapesanan_detail.php?id=$data[transaksi_id]'><button data-toggle='tooltip' title='Detail' class='pd-setting-ed'><i class='fa fa-light fa-eye'></i></button></a>
                                                            <a href='datapesanan_edit.php?idtransdet=$data[transaksi_detail_id]'><button data-toggle='tooltip' title='Edit Status' class='pt-setting'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></a>
                                                            
                                                      </td>";
                                                echo "</tr>";
                                                $no++;
                                            }
                                        }
                                        ?>
                                    </tr>
                                </table>
                                <!-- <div class="custom-pagination">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>