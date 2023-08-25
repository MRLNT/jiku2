<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
//error_reporting(E_ERROR | E_PARSE);

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
    $kode_marketing = $_SESSION['user_name'];

    // $umur = (date('Y') - date('Y',strtotime($tanggal_lahir)));
    // echo "<script type='text/javascript'>alert('$umur');</script>";
    
    $insert = "INSERT INTO temp_form3(tanggal_lahir,nama_user,tempat_lahir,nik_user,nip_user,no_pensiun,alamat_user,nama_ibu,nama_instansi,pangkat_golongan,no_rekening,no_npwp,no_telepon,kode_marketing) 
    VALUES('$tanggal_lahir','$nama_user','$tempat_lahir','$nik_user','$nip_user','$no_pensiun','$alamat_user','$nama_ibu','$nama_instansi','$pangkat_golongan','$no_rekening','$no_npwp','$no_telepon','$kode_marketing')";
    mysqli_query($conn, $insert);
    //header('Location: user_page4.php');
    //header('Location: kredit_final.php');
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
                                            <h4 class="card-title">Data Pribadi</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput1">Nama</label>
                                            <input name="nama_user" type="text" class="form-control" id="formGroupExampleInput1" placeholder="Masukkan Nama Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Tempat Lahir Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput3">Tanggal Lahir</label><br>
                                            <input id="formGroupExampleInput3" name="tanggal_lahir" type="date" placeholder="Masukkan Tanggal Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput4">NIK</label>
                                            <input name="nik_user" type="text" class="form-control autonumber" id="formGroupExampleInput4" placeholder="Masukkan NIK Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput5">NIP</label>
                                            <input name="nip_user" type="text" class="form-control autonumber" id="formGroupExampleInput5" placeholder="Masukkan NIP Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput6">No Pensiun</label>
                                            <input name="no_pensiun" type="text" class="form-control autonumber" id="formGroupExampleInput6" placeholder="Masukkan No Pensiun Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput7">Alamat</label>
                                            <input name="alamat_user" type="text" class="form-control" id="formGroupExampleInput7" placeholder="Masukkan Alamat Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput8">Nama Ibu</label>
                                            <input name="nama_ibu" type="text" class="form-control" id="formGroupExampleInput8" placeholder="Masukkan Nama Ibu Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput9">Nama Instansi</label>
                                            <input name="nama_instansi" type="text" class="form-control" id="formGroupExampleInput9" placeholder="Masukkan Nama Instansi Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput10">Pangkat dan Golongan</label>
                                            <input name="pangkat_golongan" type="text" class="form-control" id="formGroupExampleInput10" placeholder="Masukkan Pangkat dan Golongan Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput11">No Rekening</label>
                                            <input name="no_rekening" type="text" class="form-control autonumber" id="formGroupExampleInput11" placeholder="Masukkan No Rekening Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput12">No NPWP</label>
                                            <input name="no_npwp" type="text" class="form-control autonumber" id="formGroupExampleInput12" placeholder="Masukkan No NPWP Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput13">No Telepon</label>
                                            <input name="no_telepon" type="text" class="form-control autonumber" id="formGroupExampleInput13" placeholder="Masukkan No Telepon Anda">
                                        </div>
                                    </div>
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