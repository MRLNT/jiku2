<?php

@include 'config.php';

session_start();
clearstatcache();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit'])){
    $umur = @$_GET['umur'];
    $pinjaman = @$_GET['pinjaman'];
    $wpinjaman = @$_GET['wpinjaman'];
    $norek = @$_GET['notabungan'];

    $jpersen = 0.0;
    $totalbungabulanan = 0;
    $premi = 0;
    $biayaprovisi = 0;
    $jmlhditerima = 0;
    $bungabulanan = 0;
    $biayapencairan = 0;
    $pembayaranbulanan = 0;
    $jumlahcicilanbulanan = 0;
    $max_pinjaman = 300000000; // Maksimal jumlah pinjaman adalah 300 juta

    if ($pinjaman > $max_pinjaman) 
    {
    echo "Maaf, maksimal jumlah pinjaman adalah " . number_format($max_pinjaman, 0, ',', '.') . " rupiah.";
    exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
    }

    if ($wpinjaman > 15) 
    {
    echo "Maaf, maksimal Pengajuan waktu kredit 15 Tahun";
    exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
    }

    if ($wpinjaman>=1 && $wpinjaman<=5) {
        $jpersen = 9;
    } elseif($wpinjaman>=6 && $wpinjaman<=10) {
        $jpersen = 9.5;
    } elseif($wpinjaman>=11 && $wpinjaman<=15) {
        $jpersen = 10.5;
    } else{
        echo"Masukkan angka yang benar";
    }

    $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
// Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
    $totalbunga = ($pinjaman*$jpersen)/100*$wpinjaman;
// Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
    $premi = 0.00375*$pinjaman*$wpinjaman;
// Total premi =2.  0.375*200jt*5tahun=3.7jt
    $biayaprovisi = $pinjaman*0.01;
// Biaya Provisi =3.
    $jmlhditerima = $pinjaman - $premi - $biayaprovisi - 150000;
// Jumlah yang diterima
    $bungabulanan = $jpersen / 12;
// Bunga Bulanan
    $biayapencairan= $premi + $biayaprovisi - 150000;
// Bunga Bulanan
    $pembayaranbulanan= ($pinjaman + $totalbunga) / ($wpinjaman * 12);
// Pembayaran Bulanan
    $jumlahcicilanbulanan= $wpinjaman*12 ;
// Pembayaran Bulanan
    $bungabulanan_persen = number_format($bungabulanan, 2, '.', '') ;
    $pembayaranbulanan_format = number_format($pembayaranbulanan, 0, ',', '.');
    $pinjaman_format = number_format($pinjaman, 0, ',', '.');
    $biayapencairan_format = number_format($biayapencairan, 0, ',', '.');
    $jmlhditerima_format = number_format($jmlhditerima, 0, ',', '.');
    $premi_format = number_format($premi, 0, ',', '.');
    $biayaprovisi_format = number_format($biayaprovisi, 0, ',', '.');

    echo "<strong>No CIF</strong> 00000001 <br>";
    echo "<strong>Umur:</strong> {$umur} <br>";
    echo "<strong>Rekening Bank :</strong> {$norek} <br>";
    echo "<br>";
    echo "<strong>Jumlah yang Diajukan:</strong> Rp {$pinjaman_format} <br>";
    echo "<strong>Waktu Pinjaman:</strong> {$wpinjaman} <br>";
    echo "Biaya pencairan: Rp {$biayapencairan_format}<br>";
    echo "<strong>Jumlah yang Diterima:</strong> Rp {$jmlhditerima_format} <br>";
    echo "<br>";
    echo "<strong>Pembayaran Pinjaman Bulanan :</strong> Rp {$pembayaranbulanan_format} x {$jumlahcicilanbulanan} <br>";
    echo "<br> Suku Bunga Tahunan: {$jpersen}%";
    echo "<br> Suku Bunga Bulan: {$bungabulanan_persen}%";
    echo "<br> Total Premi: Rp {$premi_format} ";
    echo "<br>";
    echo "Biaya Provisi: Rp {$biayaprovisi_format}";
    echo "<br>";
    
    $insert = "INSERT INTO temp_form4(umur,norek,pinjaman_format,wpinjaman,biayapencairan_format,jmlhditerima_format,pembayaranbulanan_format,jumlahcicilanbulanan,jpersen,bungabulanan_persen,premi_format,biayaprovisi_format) 
    VALUES('$umur','$norek','$pinjaman_format','$wpinjaman','$biayapencairan_format','$jmlhditerima_format','$pembayaranbulanan_format','$jumlahcicilanbulanan','$jpersen','$bungabulanan_persen','$premi_format','$biayaprovisi_format')";

    mysqli_query($conn, $insert);
    header('Location: user_page5.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logos.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="assets/img/logo-icon.png" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">User Menu</li>
                            
                            <li><a href="dashboard_user.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Dashboards</span></a> </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout-column3-alt"></i><span class="nav-title">Bank Nagari</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="user_page.php">ASN Aktif</a> </li>
                                    <li> <a href="user_page.php">ASN Pra-Pensiun </a> </li>
                                    <li> <a href="user_page.php">ASN Pensiun</a> </li>
                                </ul>
                            </li>
                            <li><a href="#" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Bank DKI</span></a> </li>
                            <li><a href="#" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Bank SulSelBar</span></a> </li>
                            <li><a href="logout.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Logout</span></a> </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                
            </div>
            <!-- end app-container -->
            <!-- begin app-main -->
            <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin row -->
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <!-- begin page title -->
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1>Data Pribadi Nasabah/Debitur</h1>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- start Tabs contant -->
                    <div class="row tabs-contant">
                        <div class="col-xxl-12">
                            <div class="card card-statistics">
                            <form action="" method="post">
                                <div>
                                    <label>Pensiunan dari</label> <br>
                                    <input type="radio" name="pns" value="1" id="pns">
                                    <label for="pns">PNS</label>
                                    <input type="radio" name="pjtngr" value="1" id="pjtngr">
                                    <label for="pjtngr">Pejabat Negara</label>
                                    <input type="radio" name="tnipli" value="1" id="tnipli">
                                    <label for="tnipli">TNI/POLRI</label>
                                    <input type="radio" name="bumnd" value="1" id="bumnd">
                                    <label for="bumnd">BUMN/BUMD</label>
                                </div>
                                <div>
                                    <label>Nomor Notas</label> <br>
                                    <input name="nonts" type="text" placeholder="Masukkan Nomor Notas">
                                </div>
                                <div>
                                    <label>Dinas/Instansi</label> <br>
                                    <input name="dinas" type="text" placeholder="Masukkan Dinas/Instansi">
                                </div>
                                <div>
                                    <label>Umur Pengajuan</label> <br>
                                    <input name="umur" type="text" placeholder="Masukkan umur">
                                </div>
                                <div>
                                    <label>Nomor Rekening Tabungan</label> <br>
                                    <input name="notabungan" type="text" placeholder="Masukkan Nomor Rekening Tabungan">
                                </div>
                                <div>
                                    <label>Nomor NPWP   (untuk kredit ≥ Rp. 50 juta) </label> <br>
                                    <input name="nonpwp" type="text" placeholder="Masukkan Nomor NPWP">
                                </div>
                                <div>
                                    <label>Tanggal Perpekenalan</label> <br>
                                    <input name="tglperpekenalan" type="date" placeholder="Masukkan Tanggal Perpekenalan">
                                </div>
                                <div>
                                    <label>Nomor Telepon / WhatsApp</label> <br>
                                    <input name="notelp" type="text" placeholder="Masukkan Nomor Telepon">
                                </div>
                                <div>
                                    <label>Nomor Handphone</label> <br>
                                    <input name="nohandphone" type="text" placeholder="Masukkan Nomor Handphone">
                                </div>
                                <div>
                                    <label>Suku Bunga</label> <br>
                                    <input type="radio" name="flat" value="1" id="flat">
                                    <label for="flat">FLAT</label>
                                    <input type="radio" name="atsbln" value="1" id="atsbln">
                                    <label for="atsbln">ANUITAS BULANAN</label>
                                    <input type="radio" name="sdgbln" value="1" id="sdgbln">
                                    <label for="sdgbln">SLIDING BULANAN</label>
                                </div>
                                <div>
                                    <label>Jumlah Pinjaman</label> <br>
                                    <input name="pinjaman" type="number" placeholder="Masukkan jumlah Pinjaman">
                                </div>
                                <div>
                                    <label>Waktu Pinjaman</label> <br>
                                    <input name="wpinjaman" type="number" placeholder="Masukkan Waktu Pinjaman">
                                </div>
                                <!-- <div><button>Submit</button></div> -->
                                <?php
                                $umur = @$_GET['umur'];
                                $pinjaman = @$_GET['pinjaman'];
                                $wpinjaman = @$_GET['wpinjaman'];
                                $norek = @$_GET['notabungan'];

                                $jpersen = 0.0;
                                $totalbungabulanan = 0;
                                $premi = 0;
                                $biayaprovisi = 0;
                                $jmlhditerima = 0;
                                $bungabulanan = 0;
                                $biayapencairan = 0;
                                $pembayaranbulanan = 0;
                                $jumlahcicilanbulanan = 0;
                                $max_pinjaman = 300000000; // Maksimal jumlah pinjaman adalah 300 juta
                            
                                if ($pinjaman > $max_pinjaman) 
                                {
                                echo "Maaf, maksimal jumlah pinjaman adalah " . number_format($max_pinjaman, 0, ',', '.') . " rupiah.";
                                exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
                                }

                                if ($wpinjaman > 15) 
                                {
                                echo "Maaf, maksimal Pengajuan waktu kredit 15 Tahun";
                                exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
                                }

                                if ($wpinjaman>=1 && $wpinjaman<=5) {
                                    $jpersen = 9;
                                } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                                    $jpersen = 9.5;
                                } elseif($wpinjaman>=11 && $wpinjaman<=15) {
                                    $jpersen = 10.5;
                                } else{
                                    echo"Masukkan angka yang benar";
                                }

                                $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
                            // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                $totalbunga = ($pinjaman*$jpersen)/100*$wpinjaman;
                            // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                $premi = 0.00375*$pinjaman*$wpinjaman;
                            // Total premi =2.  0.375*200jt*5tahun=3.7jt
                                $biayaprovisi = $pinjaman*0.01;
                            // Biaya Provisi =3.
                                $jmlhditerima = $pinjaman - $premi - $biayaprovisi - 150000;
                            // Jumlah yang diterima
                                $bungabulanan = $jpersen / 12;
                            // Bunga Bulanan
                                $biayapencairan= $premi + $biayaprovisi - 150000;
                            // Bunga Bulanan
                                $pembayaranbulanan= ($pinjaman + $totalbunga) / ($wpinjaman * 12);
                            // Pembayaran Bulanan
                                $jumlahcicilanbulanan= $wpinjaman*12 ;
                            // Pembayaran Bulanan
                                $bungabulanan_persen = number_format($bungabulanan, 2, '.', '') ;
                                $pembayaranbulanan_format = number_format($pembayaranbulanan, 0, ',', '.');
                                $pinjaman_format = number_format($pinjaman, 0, ',', '.');
                                $biayapencairan_format = number_format($biayapencairan, 0, ',', '.');
                                $jmlhditerima_format = number_format($jmlhditerima, 0, ',', '.');
                                $premi_format = number_format($premi, 0, ',', '.');
                                $biayaprovisi_format = number_format($biayaprovisi, 0, ',', '.');

                                echo "<strong>No CIF</strong> 00000001 <br>";
                                echo "<strong>Umur:</strong> {$umur} <br>";
                                echo "<strong>Rekening Bank :</strong> {$norek} <br>";
                                echo "<br>";
                                echo "<strong>Jumlah yang Diajukan:</strong> Rp {$pinjaman_format} <br>";
                                echo "<strong>Waktu Pinjaman:</strong> {$wpinjaman} <br>";
                                echo "Biaya pencairan: Rp {$biayapencairan_format}<br>";
                                echo "<strong>Jumlah yang Diterima:</strong> Rp {$jmlhditerima_format} <br>";
                                echo "<br>";
                                echo "<strong>Pembayaran Pinjaman Bulanan :</strong> Rp {$pembayaranbulanan_format} x {$jumlahcicilanbulanan} <br>";
                                echo "<br> Suku Bunga Tahunan: {$jpersen}%";
                                echo "<br> Suku Bunga Bulan: {$bungabulanan_persen}%";
                                echo "<br> Total Premi: Rp {$premi_format} ";
                                echo "<br>";
                                echo "Biaya Provisi: Rp {$biayaprovisi_format}";
                                echo "<br>";
                                
                            ?>
                            <input type="submit" name="submit" value="Selanjutnya" class="btn btn-primary text-uppercase">

                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- end Tabs contant -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end app-main -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->
    
    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>

    
</body>


</html>