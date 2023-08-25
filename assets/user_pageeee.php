<?php

@include 'config.php';

session_start();
clearstatcache();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $nama_user = $_POST['nama_user'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik_user = $_POST['nik_user'];
    $nip_user = $_POST['nip_user'];
    $no_pensiun = $_POST['no_pensiun'];
    $alamat_user = $_POST['alamat_user'];
    $nama_ibu = $_POST['nama_ibu'];
    $nama_instansi = $_POST['nama_instansi'];
    $pangkat_golongan = $_POST['pangkat_golongan'];
    $no_rekening = $_POST['no_rekening'];
    $no_npwp = $_POST['no_npwp'];
    $no_telepon = $_POST['no_telepon'];
    
    $insert = "INSERT INTO temp_form3(tanggal_lahir,nama_user,tempat_lahir,nik_user,nip_user,no_pensiun,alamat_user,nama_ibu,nama_instansi,pangkat_golongan,no_rekening,no_npwp,no_telepon) 
    VALUES('$tanggal_lahir','$nama_user','$tempat_lahir','$nik_user','$nip_user','$no_pensiun','$alamat_user','$nama_ibu','$nama_instansi','$pangkat_golongan','$no_rekening','$no_npwp','$no_telepon')";
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
                                    <h1>Tabs</h1>
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
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Kalkulasi Pinjaman</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="numeric1">No Notas</label>
                                            <input name="no_notas" type="text" class="form-control autonumber" id="numeric1" placeholder="Masukkan Nomor Notas Anda">
                                        </div>
                                        <div class="form-group">
                                            <h2>Jenis Pensiun</h2>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_pensiun" id="jenis_pensiun1" value="PNS">
                                                <label class="form-check-label" for="jenis_pensiun1">
                                                PNS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_pensiun" id="jenis_pensiun2" value="Pejabat Negara">
                                                <label class="form-check-label" for="jenis_pensiun2">
                                                    Pejabat Negara
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_pensiun" id="jenis_pensiun3" value="TNI/POLRI">
                                                <label class="form-check-label" for="jenis_pensiun3">
                                                    TNI/POLRI
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_pensiun" id="jenis_pensiun4" value="BUMN/BUMD">
                                                <label class="form-check-label" for="jenis_pensiun4">
                                                    BUMN/BUMD
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric2">Dinas/Intansi</label>
                                            <input name="dinas_instansi" type="text" class="form-control" id="numeric2" placeholder="Masukkan Nama Dinas atau Instansi Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric3">Umur Pengajuan</label>
                                            <input name="umur_pengajuan" type="text" class="form-control autonumber" id="numeric3" placeholder="Masukkan Umur Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric4">Umur Pesiun</label>
                                            <input name="umur_pensiun" type="text" class="form-control autonumber" id="numeric4" placeholder="Masukkan Umur Pensiun Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric5">Nomor Rekening</label>
                                            <input name="no_rekening" type="text" class="form-control autonumber" id="numeric5" placeholder="Masukkan Nomor Rekening Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric6">Tanggal Perpekenalan</label><br>
                                            <input name="tanggal_perpekenalan" type="date" placeholder="Masukkan Tanggal Perpekenalan" id="numeric6">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric7">Nomor Whatsapp</label>
                                            <input name="no_whatsapp" type="text" class="form-control autonumber" id="numeric7" placeholder="Masukkan Nomor Whatsapp Anda">
                                        </div>
                                        <div class="form-group">
                                            <h2>Jenis Suku Bunga</h2>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="suku_bunga" id="suku_bunga1" value="FLAT">
                                                <label class="form-check-label" for="suku_bunga1">
                                                FLAT
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="suku_bunga" id="suku_bunga2" value="ANUITAS BULANAN">
                                                <label class="form-check-label" for="suku_bunga2">
                                                ANUITAS BULANAN
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="suku_bunga" id="suku_bunga3" value="SLIDING BULANAN">
                                                <label class="form-check-label" for="suku_bunga3">
                                                SLIDING BULANAN
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric8">Jumlah Pinjaman</label>
                                            <input name="jumlah_pinjaman" type="text" class="form-control autonumber" id="numeric8" placeholder="Masukkan Jumlah Pinjaman Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric9">Waktu Pinjaman (dalam tahun)</label>
                                            <input name="waktu_pinjaman" type="text" class="form-control autonumber" id="numeric9" placeholder="Masukkan Waktu pinjaman anda dalam tahun">
                                        </div>
                                        <button>Hitung</button>
                                        
                                    </div>
                                    <input type="submit" name="submit" value="Selanjutnya" class="btn btn-primary text-uppercase">
                                </form>
                                <div class="card-body">
                                    <?php
                                    $umur_pengajuan = @$_GET['umur_pengajuan'];
                                    $jumlah_pinjaman = @$_GET['jumlah_pinjaman'];
                                    $waktu_pinjaman = @$_GET['waktu_pinjaman'];
                                    $no_rekening = @$_GET['no_rekening'];

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
                                
                                    if ($jumlah_pinjaman > $max_pinjaman) 
                                    {
                                    echo "Maaf, maksimal jumlah pinjaman adalah " . number_format($max_pinjaman, 0, ',', '.') . " rupiah.";
                                    exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
                                    }

                                    if ($waktu_pinjaman > 15) 
                                    {
                                    echo "Maaf, maksimal Pengajuan waktu kredit 15 Tahun";
                                    exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
                                    }

                                    if ($waktu_pinjaman>=1 && $waktu_pinjaman<=5) {
                                        $jpersen = 9;
                                    } elseif($waktu_pinjaman>=6 && $waktu_pinjaman<=10) {
                                        $jpersen = 9.5;
                                    } elseif($waktu_pinjaman>=11 && $waktu_pinjaman<=15) {
                                        $jpersen = 10.5;
                                    } else{
                                        echo"Masukkan angka yang benar";
                                    }

                                    $totalbungabulanan = ($jumlah_pinjaman*$jpersen)/100/12;
                                // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                    $totalbunga = ($jumlah_pinjaman*$jpersen)/100*$waktu_pinjaman;
                                // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                    $premi = 0.00375*$jumlah_pinjaman*$waktu_pinjaman;
                                // Total premi =2.  0.375*200jt*5tahun=3.7jt
                                    $biayaprovisi = $jumlah_pinjaman*0.01;
                                // Biaya Provisi =3.
                                    $jmlhditerima = $jumlah_pinjaman - $premi - $biayaprovisi - 150000;
                                // Jumlah yang diterima
                                    $bungabulanan = $jpersen / 12;
                                // Bunga Bulanan
                                    $biayapencairan= $premi + $biayaprovisi - 150000;
                                // Bunga Bulanan
                                    $pembayaranbulanan= ($jumlah_pinjaman + $totalbunga) / ($waktu_pinjaman * 12);
                                // Pembayaran Bulanan
                                    $jumlahcicilanbulanan= $waktu_pinjaman*12 ;
                                // Pembayaran Bulanan
                                    $bungabulanan_persen = number_format($bungabulanan, 2, '.', '') ;
                                    $pembayaranbulanan_format = number_format($pembayaranbulanan, 0, ',', '.');
                                    $pinjaman_format = number_format($jumlah_pinjaman, 0, ',', '.');
                                    $biayapencairan_format = number_format($biayapencairan, 0, ',', '.');
                                    $jmlhditerima_format = number_format($jmlhditerima, 0, ',', '.');
                                    $premi_format = number_format($premi, 0, ',', '.');
                                    $biayaprovisi_format = number_format($biayaprovisi, 0, ',', '.');

                                    echo "<strong>No CIF</strong> 00000001 <br>";
                                    echo "<strong>Umur:</strong> {$umur_pengajuan} <br>";
                                    echo "<strong>Rekening Bank :</strong> {$no_rekening} <br>";
                                    echo "<br>";
                                    echo "<strong>Jumlah yang Diajukan:</strong> Rp {$pinjaman_format} <br>";
                                    echo "<strong>Waktu Pinjaman:</strong> {$waktu_pinjaman} <br>";
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
                                </div>
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