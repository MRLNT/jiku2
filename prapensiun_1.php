<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $nama_marketing = $_POST['nama_marketing'];
    $nik_marketing = $_POST['nik_marketing'];
    $cabang_pembantu = $_POST['cabang_pembantu'];
    $no_hp_marketing = $_POST['no_hp_marketing'];
    $kode_marketing = $_SESSION['user_name'];

    $insert = "INSERT INTO temp_form1(nama_marketing, nik_marketing, cabang_pembantu, no_hp_marketing, kode_marketing) VALUES('$nama_marketing','$nik_marketing','$cabang_pembantu','$no_hp_marketing','$kode_marketing')";
    mysqli_query($conn, $insert);
    header('Location: prapensiun_2.php');
    //header('Location: kredit_final.php');
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
                                    <h1>KREDIT ASN PRA-PENSIUN</h1>
                                </div>
                                <div class="ml-auto d-flex align-items-center">
                                    <nav>
                                        <ol class="breadcrumb p-0 m-b-0">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="ti ti-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                UI Kit
                                            </li>
                                            <li class="breadcrumb-item active text-primary" aria-current="page">Tabs</li>
                                        </ol>
                                    </nav>
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
                                            <h4 class="card-title">Data Marketing</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Nama Marketing</label>
                                            <input name="nama_marketing" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">NIK</label>
                                            <input name="nik_marketing" type="number" class="form-control autonumber" id="formGroupExampleInput2" placeholder="Masukkan NIK Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Handphone</label>
                                            <input name="no_hp_marketing" type="number" class="form-control autonumber" id="numeric" placeholder="Masukkan No Handphone Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Cabang/Capem</label>
                                            <select class="form-control"
                                            name="cabang_pembantu" type="text"  id="formGroupExampleInput2" placeholder="Masukkan Nama Cabang">
                                                <option>CABANG ALAHAN PANJANG</option>
                                                <option>CABANG NIAGA</option>
                                                <option>CAPEM GUBERNUR</option>
                                                <option>CAPEM LUBUK BUAYA</option>
                                                <option>CABANG PASAR RAYA</option>
                                                <option>CABANG SYARIAH PADANG</option>
                                                <option>CAPEM BANDAR BUAT</option>
                                                <option>CAPEM UNAND</option>
                                                <option>CABANG BATU SANGKAR</option>
                                                <option>CABANG SITEBA</option>
                                                <option>CAPEM RSUP M JAMIL</option>
                                                <option>CABANG SOLOK</option>
                                                <option>CAPEM AROSUKA</option>
                                                <option>CABANG PAINAN</option>
                                                <option>CAPEM SIMPANG HARU</option>
                                                <option>CABANG BUKIT TINGGI</option>
                                                <option>CABANG SIMPANG EMPAT</option>
                                                <option>CABANG UJUNG GADING</option>
                                                <option>CAPEM TABEK PATAH</option>
                                                <option>CABANG SYARIAH BATUSANGKAR</option>
                                                <option>CABANG UTAMA</option>
                                                <option>CABANG BANDUNG</option>
                                                <option>CABANG JAKARTA</option>
                                                <option>CABANG KOTA BARU</option>
                                                <option>CABANG LINTAU</option>
                                                <option>CABANG LUBUK ALUNG</option>
                                                <option>CABANG LUBUK BASUNG</option>
                                                <option>CABANG LUBUK GADANG</option>
                                                <option>CABANG LUBUK SIKAPING</option>
                                                <option>CABANG MANTRAMAN JAKARTA</option>
                                                <option>CABANG MENTAWAI</option>
                                                <option>CABANG MUARA LABUH</option>
                                                <option>CABANG PADANG PANJANG</option>
                                                <option>CABANG PANGKALAN</option>
                                                <option>CABANG PARIAMAN</option>
                                                <option>CABANG PAYAKUMBUH</option>
                                                <option>CABANG PEKANBARU</option>
                                                <option>CABANG PULAU PUNJUNG</option>
                                                <option>CABANG SAWAHLUNTO</option>
                                                <option>CABANG SIJUNJUNG</option>
                                                <option>CABANG SYARIAH PAYAKUMBUH</option>
                                                <option>CABANG SYARIAH SOLOK</option>
                                                <option>CABANG TAPAN</option>
                                                <option>CABANG TAPUS</option>
                                                <option>CAPEM AUR KUNING BUKITTINGGI</option>
                                                <option>CAPEM AIR HAJI</option>
                                                <option>CAPEM BY PASS PADANG</option>
                                                <option>CAPEM BAWAN</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" value="Selanjutnya" class="btn btn-primary text-uppercase">
                                    </div>
                                    
                                    
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