<?php
    @include 'config.php';
    session_start();
    if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
    }
    error_reporting(E_ERROR | E_PARSE);

    $kode_marketing = $_SESSION['user_name'];

    $sql54 = "SELECT * FROM temp_form4 ORDER BY id_pengajuan DESC LIMIT 1";
    $result54 = $conn->query($sql54);
    if ($result54->num_rows > 0) {
        $row = $result54->fetch_assoc();
    }
    $umur = $row['umur_pengajuan'];
    $pinjaman = $row['jumlah_pinjaman'];
    $wpinjaman = $row['waktu_pinjaman'];
    $jenis_payroll = $row['jenis_payroll'];

    $jpersen = 0.0;
    $totalbungabulanan = 0;
    $premi = 0;
    $jmlhditerima = 0;
    $bungabulanan = 0;
    $biayapencairan = 0;
    $pembayaranbulanan = 0;
    $jumlahcicilanbulanan = 0;
    if($jenis_payroll == "Bank Nagari"){
        if ($wpinjaman>=1 && $wpinjaman<=5) {
            $jpersen = 8.25;
        } elseif($wpinjaman>=6 && $wpinjaman<=10) {
            $jpersen = 8.75;
        } elseif($wpinjaman>=11 && $wpinjaman<=13) {
            $jpersen = 9.75;
        } elseif($wpinjaman>=14 && $wpinjaman<=15) {
            $jpersen = 10;
        } else{
            $jpersen = 10;
        }
    } elseif($jenis_payroll == "Non Nagari"){
        if ($wpinjaman>=1 && $wpinjaman<=5) {
            $jpersen = 8.75;
        } elseif($wpinjaman>=6 && $wpinjaman<=10) {
            $jpersen = 9.75;
        } elseif($wpinjaman>=11 && $wpinjaman<=15) {
            $jpersen = 11;
        } else{
            $jpersen = 11;
        }
    }

    $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
    $totalbunga = ($pinjaman*$jpersen)/100*$wpinjaman;
    $premi = 0.00375*$pinjaman*$wpinjaman;
    $jmlhditerima = $pinjaman - $premi;
    $bungabulanan = $jpersen / 12;
    $biayapencairan= $premi;
    $pembayaranbulanan= ($pinjaman + $totalbunga) / ($wpinjaman * 12);
    $jumlahcicilanbulanan= $wpinjaman*12 ;

    $sql33 = "SELECT * FROM temp_form3 ORDER BY id_pengajuan DESC LIMIT 1";
    $result33 = $conn->query($sql33);
    if ($result33->num_rows > 0) {
        $row = $result33->fetch_assoc();
    } else echo "No data found.";
    $gaji_debitur = $row['gaji_debitur'];


    if(isset($_POST['submit'])){
        $insert = "INSERT INTO temp_form4(pembayaran_bulanan,suku_bunga,total_premi,gaji_debitur,kode_marketing,umur_pengajuan,jumlah_pinjaman,waktu_pinjaman,jenis_payroll) VALUES('$pembayaranbulanan','$jpersen','$premi','$gaji_debitur','$kode_marketing','$umur','$pinjaman','$wpinjaman','$jenis_payroll')";
        mysqli_query($conn, $insert);
        header('Location: asnaktif_6.php');
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php @include 'components/head.php'?>
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
            <?php @include 'components/navigation.html'?>
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
                                    <h1>Hasil Perhitungan</h1>
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
                                    <div class="card-body">
                                    <?php
                                    $sql5 = "SELECT * FROM temp_form4 ORDER BY id_pengajuan DESC LIMIT 1";
                                    $result5 = $conn->query($sql5);
                                    if ($result5->num_rows > 0) {
                                        $row = $result5->fetch_assoc();
                                    } else {
                                        echo "No data found.";
                                    }
                                    ?>
                                    <h5>
                                        <?php

                                        $umur = $row['umur_pengajuan'];
                                        $pinjaman = $row['jumlah_pinjaman'];
                                        $wpinjaman = $row['waktu_pinjaman'];
                                        $jenis_payroll = $row['jenis_payroll'];

                                        $jpersen = 0.0;
                                        $totalbungabulanan = 0;
                                        $premi = 0;
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

                                        if ($wpinjaman > 180) 
                                        {
                                        echo "Maaf, maksimal Pengajuan waktu kredit 15 Tahun";
                                        exit; // Menghentikan eksekusi script jika jumlah pinjaman melebihi batas maksimal 
                                        }

                                        if($jenis_payroll == "Bank Nagari"){
                                            if ($wpinjaman>=1 && $wpinjaman<=5) {
                                                $jpersen = 8.25;
                                            } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                                                $jpersen = 8.75;
                                            } elseif($wpinjaman>=11 && $wpinjaman<=13) {
                                                $jpersen = 9.75;
                                            } elseif($wpinjaman>=14 && $wpinjaman<=15) {
                                                $jpersen = 10;
                                            } else{
                                                $jpersen = 10;
                                            }
                                        } elseif($jenis_payroll == "Non Nagari"){
                                            if ($wpinjaman>=1 && $wpinjaman<=5) {
                                                $jpersen = 8.75;
                                            } elseif($wpinjaman>=6 && $wpinjaman<=10) {
                                                $jpersen = 9.75;
                                            } elseif($wpinjaman>=11 && $wpinjaman<=15) {
                                                $jpersen = 11;
                                            } else{
                                                $jpersen = 11;
                                            }
                                        }
                                        $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
                                    // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                        $totalbunga = ($pinjaman*$jpersen)/100*$wpinjaman;
                                    // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                        $premi = 0.00375*$pinjaman*$wpinjaman;
                                    // Total premi =2.  0.375*200jt*5tahun=3.7jt
                                        $jmlhditerima = $pinjaman - $premi;
                                    // Jumlah yang diterima
                                        $bungabulanan = $jpersen / 12;
                                    // Bunga Bulanan
                                        $biayapencairan= $premi;
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

                                        echo "<strong>Umur:</strong> {$umur} <br>";
                                        echo "<br>";
                                        echo "<strong>Jumlah yang Diajukan:</strong> Rp {$pinjaman_format} <br>";
                                        echo "<strong>Waktu Pinjaman:</strong> {$wpinjaman} <br>";
                                        echo "Biaya pencairan: Rp {$biayapencairan_format}<br>";
                                        echo "<strong>Jumlah yang Diterima:</strong> Rp {$jmlhditerima_format} <br>";
                                        echo "<br>";
                                        echo "<strong>Pembayaran Pinjaman Bulanan :</strong> Rp {$pembayaranbulanan_format} x {$jumlahcicilanbulanan} <br>";

                                        $sql3 = "SELECT * FROM temp_form3 ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result3 = $conn->query($sql3);
                                        if ($result3->num_rows > 0) {
                                            $row = $result3->fetch_assoc();
                                        } else echo "No data found.";
                                        echo "Nama Debitur: {$row['nama_debitur']} <br>";
                                        echo "Gaji Debitur: {$row['gaji_debitur']}<br>";
                                        $gaji_debitur = $row['gaji_debitur'] * 9 / 10;

                                        if ($pembayaranbulanan > $gaji_debitur) {
                                            $BtnIsActive = false;
                                            ?>
                                            <div class="col-12 mb-2">
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Gaji tidak mencukupi untuk pembayaran, Silahkan....</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <i class="ti ti-close"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <?php
                                        } else {
                                            $BtnIsActive = true;
                                            echo "<strong><i>Gaji Cukup untuk Melakukan Pinjaman</i></strong>";
                                        }


                                        echo "<br> Suku Bunga Tahunan: {$jpersen}%";
                                        echo "<br> Suku Bunga Bulan: {$bungabulanan_persen}%";
                                        echo "<br> Total Premi: Rp {$premi_format} ";
                                        ?>
                                    </h5>
                                        
                                    </div>
                                    <?php if ($BtnIsActive): ?>
                                        <input type="submit" name="submit" value="Selanjutnya" class="btn btn-primary text-uppercase">
                                    <?php endif; ?>
                                    <?php if (!$BtnIsActive): ?>
                                        <div class="col-12 mb-2">
                                            <a href="asnaktif_3.php" class="btn btn-primary">Kembali</a>
                                        </div>
                                    <?php endif; ?>
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
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>

    
</body>


</html>