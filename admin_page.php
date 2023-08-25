<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

// Query untuk mengambil jumlah pinjaman dan id_pengajuan dari masing-masing tabel
$sql_prapensiun = "SELECT id_pengajuan, jumlah_pinjaman FROM data_kredit_prapensiun";
$sql_pensiun = "SELECT id_pengajuan, jumlah_pinjaman FROM data_kredit_pensiun";
$sql_asnaktif = "SELECT id_pengajuan, jumlah_pinjaman FROM data_kredit_asnaktif";

// Query untuk mengambil nama dan email dari database
$sql = "SELECT name, email FROM user_form"; // Ganti "your_table_name" dengan nama tabel yang sesuai di database Anda
$result = $conn->query($sql);

// Eksekusi query dan ambil hasilnya
$result_prapensiun = $conn->query($sql_prapensiun);
$result_pensiun = $conn->query($sql_pensiun);
$result_asnaktif = $conn->query($sql_asnaktif);

// Inisialisasi variabel untuk menyimpan nama dan email
$name = "";
$email = "";

// Inisialisasi variabel total keseluruhan dan jumlah data id_pengajuan untuk setiap kategori ASN
$total_keseluruhan = 0;
$total_asnaktif = 0;
$total_prapensiun = 0;
$total_pensiun = 0;

// Mengambil hasil query dan menjumlahkan total keseluruhan serta jumlah data id_pengajuan untuk setiap kategori ASN
if ($result_prapensiun->num_rows > 0) {
    while ($row = $result_prapensiun->fetch_assoc()) {
        $total_keseluruhan += (int)$row['jumlah_pinjaman'];
        $total_prapensiun++;
    }
}

if ($result_pensiun->num_rows > 0) {
    while ($row = $result_pensiun->fetch_assoc()) {
        $total_keseluruhan += (int)$row['jumlah_pinjaman'];
        $total_pensiun++;
    }
}

if ($result_asnaktif->num_rows > 0) {
    while ($row = $result_asnaktif->fetch_assoc()) {
        $total_keseluruhan += (int)$row['jumlah_pinjaman'];
        $total_asnaktif++;
    }
}

// Mengambil hasil query
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
}

// Setelah perulangan selesai, hitung total_rekening dari total_asnaktif, total_prapensiun, dan total_pensiun
$total_rekening = $total_asnaktif + $total_prapensiun + $total_pensiun;

// Format jumlah total keseluruhan dan total_rekening dengan koma sebagai pemisah ribuan
$formatted_total_keseluruhan = number_format($total_keseluruhan, 0, ',', '.');
$formatted_total_rekening = number_format($total_rekening, 0, ',', '.');

// Query untuk mengambil jumlah_pinjaman dari data_kredit_asnaktif
$sql_asnaktif_pinjaman = "SELECT SUM(jumlah_pinjaman) AS total_pinjaman_asnaktif FROM data_kredit_asnaktif";
$result_asnaktif_pinjaman = $conn->query($sql_asnaktif_pinjaman);
$row_asnaktif_pinjaman = $result_asnaktif_pinjaman->fetch_assoc();
$total_pinjaman_asnaktif = (int)$row_asnaktif_pinjaman['total_pinjaman_asnaktif'];
$formatted_total_asnaktif = number_format($total_pinjaman_asnaktif, 0, ',', '.');

// Query untuk mengambil jumlah_pinjaman dari data_kredit_prapensiun
$sql_prapensiun_pinjaman = "SELECT SUM(jumlah_pinjaman) AS total_pinjaman_prapensiun FROM data_kredit_prapensiun";
$result_prapensiun_pinjaman = $conn->query($sql_prapensiun_pinjaman);
$row_prapensiun_pinjaman = $result_prapensiun_pinjaman->fetch_assoc();
$total_pinjaman_prapensiun = (int)$row_prapensiun_pinjaman['total_pinjaman_prapensiun'];
$formatted_total_prapensiun = number_format($total_pinjaman_prapensiun, 0, ',', '.');

// Query untuk mengambil jumlah_pinjaman dari data_kredit_pensiun
$sql_pensiun_pinjaman = "SELECT SUM(jumlah_pinjaman) AS total_pinjaman_pensiun FROM data_kredit_pensiun";
$result_pensiun_pinjaman = $conn->query($sql_pensiun_pinjaman);
$row_pensiun_pinjaman = $result_pensiun_pinjaman->fetch_assoc();
$total_pinjaman_pensiun = (int)$row_pensiun_pinjaman['total_pinjaman_pensiun'];
$formatted_total_pensiun = number_format($total_pinjaman_pensiun, 0, ',', '.');
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>JIKU - Jaringan Inklusi Keuangan</title>
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
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PT Jaringan Inklusi Keuangan
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </li>
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti ti-email"></i>
                                    </a>
                                    <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                        <ul>
                                            <li class="dropdown-header bg-gradient p-4 text-white text-left">Messages
                                                <label class="label label-info label-round">6</label>
                                                <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                    <span class="font-13"> Mark all as read</span></a>
                                            </li>
                                            <li class="dropdown-body">
                                                <ul class="scrollbar scroll_dark max-h-240">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user3">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Brianing Leyon</p>
                                                                    <small>You will sail along until you...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/01.jpg" alt="user">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Jimmyimg Leyon</p>
                                                                    <small>Okay</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/02.jpg" alt="user2">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Brainjon Leyon</p>
                                                                    <small>So, make the decision...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/04.jpg" alt="user4">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Smithmin Leyon</p>
                                                                    <small>Thanks</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user5">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Jennyns Leyon</p>
                                                                    <small>How are you</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="assets/img/avtar/06.jpg" alt="user6">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Demian Leyon</p>
                                                                    <small>I like your themes</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a class="font-13" href="javascript:void(0)"> View All messages </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-bell"></i>
                                        <span class="notify">
                                                    <span class="blink"></span>
                                        <span class="dot"></span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                        <ul>
                                            <li class="dropdown-header bg-gradient p-4 text-white text-left">Notifications
                                                <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                    <span class="font-13"> Clear all</span></a>
                                            </li>
                                            <li class="dropdown-body min-h-240 nicescroll">
                                                <ul class="scrollbar scroll_dark max-h-240">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md">
                                                                        <span>HY</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">New registered user</p>
                                                                    <small>Just now</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-success">
                                                                        <span>GM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">New invoice received</p>
                                                                    <small>22 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-danger">
                                                                        <span>FR</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Server error report</p>
                                                                    <small>7 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-info">
                                                                        <span>HT</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Database report</p>
                                                                    <small>1 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md">
                                                                        <span>DE</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Order confirmation</p>
                                                                    <small>2 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a class="font-13" href="javascript:void(0)"> View All Notifications
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link search" href="javascript:void(0)">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <div class="search-wrapper">
                                        <div class="close-btn">
                                            <i class="ti ti-close"></i>
                                        </div>
                                        <div class="search-content">
                                            <form>
                                                <div class="form-group">
                                                    <i class="ti ti-search magnifier"></i>
                                                    <input type="text" class="form-control autocomplete" placeholder="Search Here" id="autocomplete-ajax" autofocus="autofocus">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/img/avtar/02.jpg" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    <h4 class="text-white mb-0"><?php echo $name; ?></h4>
                                                     <small class="text-white"><?php echo $email; ?></small>
                                                </div>
                                                <a href="in" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                                class="zmdi zmdi-power"></i></a>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                                <span class="badge badge-primary ml-auto">6</span>
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-compass pr-2 text-warning"></i> Need help?</a>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <a class="bg-light p-3 text-center d-block" href="#">
                                                        <i class="fe fe-mail font-20 text-primary"></i>
                                                        <span class="d-block font-13 mt-2">My messages</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="bg-light p-3 text-center d-block" href="#">
                                                        <i class="fe fe-plus font-20 text-primary"></i>
                                                        <span class="d-block font-13 mt-2">Compose new</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
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
                            <li class="nav-static-title">Bank Pembangunan Daerah</li>
                            <li class="active">
                                <a class="has-arrow" href="admin_page.php" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Bank Nagari</span> 
                                    <span class="nav-label label label-danger">9</span>
                                    <span class="nav-label label label-success">New</span> </a>
                                </a>
                                <ul aria-expanded="false">
                                    <li class="active"> <a href='admin_page.php'>Bank Nagari</a> </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Marketing</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Data Marketing</a> </li>
                                            <li> <a href="ui-button.html">Pencapaian Marketing</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Cabang Bank</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pencairan setiap wilayah</a> </li>
                                            <li> <a href="ui-button-icon.html">Cabang dan Capem</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Debitur</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pengajuan Debitur</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur AKTIF</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pra-Pensiun</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pensiun</a> </li>
                                            <li> <a href="ui-button.html">-----</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href='index-dating.html'>Buat Akun Jiku Marketing Bank Nagari</a> </li>
                                    <li> <a href='index-job-portal.html'>Laporan --</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-rocket"></i><span class="nav-title">Bank Sumut</span></a>
                                <ul aria-expanded="false">
                                    <li class="active"> <a href='index.html'>Bank Sumut</a> </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Marketing</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Data Marketing</a> </li>
                                            <li> <a href="ui-button.html">Pencapaian Marketing</a> </li>
                                            <li> <a href="ui-button.html">---</a> </li>
                                            <li> <a href="ui-button.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Cabang Bank</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pencairan setiap wilayah</a> </li>
                                            <li> <a href="ui-button-icon.html">Cabang dan Capem</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Debitur</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pengajuan Debitur</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur AKTIF</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pra-Pensiun</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pensiun</a> </li>
                                            <li> <a href="ui-button.html">-----</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href='index-dating.html'>Buat Akun Jiku Marketing Bank Sumut</a> </li>
                                    <li> <a href='index-job-portal.html'>Laporan --</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-rocket"></i><span class="nav-title">Bank BSG</span></a>
                                <ul aria-expanded="false">
                                    <li class="active"> <a href='index.html'>Bank BSG</a> </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Marketing</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Data Marketing</a> </li>
                                            <li> <a href="ui-button-icon.html">Pencapaian Marketing</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Cabang Bank</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pencairan setiap wilayah</a> </li>
                                            <li> <a href="ui-button-icon.html">Cabang dan Capem</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Debitur</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pengajuan Debitur</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur AKTIF</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pra-Pensiun</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pensiun</a> </li>
                                            <li> <a href="ui-button.html">-----</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href='index-dating.html'>Laporan --</a> </li>
                                    <li> <a href='index-job-portal.html'>Laporan --</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-rocket"></i><span class="nav-title">Bank Kalbar</span></a>
                                <ul aria-expanded="false">
                                    <li class="active"> <a href='index.html'>Bank Kalbar</a> </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Marketing</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Data Marketing</a> </li>
                                            <li> <a href="ui-button-icon.html">Pencapaian Marketing</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Cabang Bank</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pencairan setiap wilayah</a> </li>
                                            <li> <a href="ui-button-icon.html">Cabang dan Capem</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Debitur</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pengajuan Debitur</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur AKTIF</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pra-Pensiun</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pensiun</a> </li>
                                            <li> <a href="ui-button.html">-----</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href='index-dating.html'>Laporan --</a> </li>
                                    <li> <a href='index-job-portal.html'>Laporan --</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-rocket"></i> <span class="nav-title">Bank Sulselbar</span></a>
                                <ul aria-expanded="false">
                                    <li class="active"> <a href='index.html'>Bank Sulselbar</a> </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Marketing</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Data Marketing</a> </li>
                                            <li> <a href="ui-button-icon.html">Pencapaian Marketing</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Cabang Bank</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pencairan setiap wilayah</a> </li>
                                            <li> <a href="ui-button-icon.html">Cabang dan Capem</a> </li>
                                            <li> <a href="ui-button-block.html">---</a> </li>
                                            <li> <a href="ui-button-social.html">---</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="has-arrow" href="javascript: void(0);">Debitur</a>
                                        <ul aria-expanded="false">
                                            <li> <a href="ui-button.html">Pengajuan Debitur</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur AKTIF</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pra-Pensiun</a> </li>
                                            <li> <a href="ui-button.html">Data Debitur Pensiun</a> </li>
                                            <li> <a href="ui-button.html">-----</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href='index-dating.html'>Laporan --</a> </li>
                                    <li> <a href='index-job-portal.html'>Laporan --</a> </li>
                                </ul>
                            </li>
                            <li class="nav-static-title">Produk lainnya</li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-layout-grid4-alt"></i> <span class="nav-title">Produk Lainnya</span> <span class="nav-label label label-success">New</span> </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout-column3-alt"></i><span class="nav-title">Produk Lainnya</span></a>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout"></i> <span class="nav-title">Produk Lainnya</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right">
                                        <h1>Dashboard</h1>
                                    </div>
                                    <div class="breadcrumb-bar align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Dashboard
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Default</li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo list">
                                            <i class="fe fe-edit btn btn-icon text-primary"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Projects">
                                            <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Task">
                                            <i class="fa fa-check btn btn-icon text-warning"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                                            <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Analytics">
                                            <i class="fa fa-bar-chart-o btn btn-icon text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                                    <strong>Hello <?php echo $name; ?>!</strong> Anda harus melihat informasi di bawah ini.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="ti ti-close"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-statistics">
                                    <div class="row no-gutters">
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Pencairan Total</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics8"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> Rp. <?php echo $formatted_total_keseluruhan; ?></h3>
                                                        <p>Total Keseluruhan</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Jumlah Rekening Debitur</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics7"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                         <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> <?php echo $formatted_total_rekening; ?></h3>
                                                        <p>Total Keseluruhan</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Marketing Bank Nagari</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics9"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>342</h3>
                                                        <p>Total Keseluruhan</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20">
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics10"></div>
                                                    </div>
                                                    <div class="statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5">
                                                        <ul class="list-style-none p-0">
                                                            <li class="d-flex py-1">
                                                                <span><i class="fa fa-circle text-primary pr-2"></i> ASN Aktif</span>
                                                                <span class="pl-2 font-weight-bold"><?php echo $total_asnaktif; ?></span>
                                                            </li>
                                                            <li class="d-flex py-1">
                                                                 <span><i class="fa fa-circle text-warning pr-2"></i> ASN Pra-Pensiun</span>
                                                                 <span class="pl-2 font-weight-bold"><?php echo $total_prapensiun; ?></span>
                                                            </li>
                                                            <li class="d-flex py-1">
                                                                <span><i class="fa fa-circle text-info pr-2"></i> ASN Pensiun</span>
                                                                <span class="pl-2 font-weight-bold"><?php echo $total_pensiun; ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title">Total keseluruhan setiap Produk</h4>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="row m-b-20">
                                            <div class="col-xxs-6 col-xl-4 col-xxl-4 mb-2 mb-xxl-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-container img-icon m-r-20 bg-light-gray rounded">
                                                        <i class="fa fa-dollar text-primary"></i>
                                                    </div>
                                                    <div class="report-details">
                                                        <p>ASN Aktif</p>
                                                        <h3>Rp. <?php echo $formatted_total_asnaktif; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxs-6 col-md-4 col-xxl-4 mb-2 mb-xxl-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-container img-icon m-r-20 bg-light-gray rounded">
                                                        <i class="fa fa-dollar text-primary"></i>
                                                    </div>
                                                    <div class="report-details">
                                                        <p>ASN Pra-Pensiun</p>
                                                        <h3>Rp. <?php echo $formatted_total_prapensiun; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxs-6 col-md-4 col-xxl-4 mb-2 mb-xxl-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-container img-icon m-r-20 bg-light-gray rounded">
                                                        <i class="fa fa-dollar text-primary"></i>
                                                    </div>
                                                    <div class="report-details">
                                                        <p>ASN Pensiun</p>
                                                        <h3>Rp. <?php echo $formatted_total_pensiun; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexchart-wrapper">
                                            <div id="ecommerce5" class="chart-fit"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <div class="col-xxl-6 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-sm-flex justify-content-between align-items-center py-3">
                                        <div class="card-heading mb-3 mb-sm-0">
                                            <h4 class="card-title">Pencapaian Marketing</h4>
                                        </div>
                                        <div class="dropdown">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search Invoice" />
                                        </div>
                                    </div>
                                    <div class="card-body scrollbar scroll_dark" style="max-height: 420px;">
                                        <div class="d-xxs-flex align-items-center">
                                            <div class="total-sales">
                                                <p>Pencairan Total</p>
                                                <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> Rp. <?php echo $formatted_total_keseluruhan; ?></h3>
                                            </div>
                                            <div class="mb-3 mb-sm-0 ml-auto">
                                                <button class="btn btn-primary btn-xs">View All Invoices</button>
                                            </div>
                                        </div>
                                        <div class="d-none d-sm-flex progress m-t-20 m-b-0" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-6 col-xxs-3 ">
                                                <p>Head Marketing</p>
                                                <h4>10</h4>
                                            </div>
                                            <div class="col-6 col-xxs-3 ">
                                                <p>Leader Marketing</p>
                                                <h4>25</h4>
                                            </div>
                                            <div class="col-6 col-xxs-3 ">
                                                <p>Marketing</p>
                                                <h4>100</h4>
                                            </div>
                                            <div class="col-6 col-xxs-3 ">
                                                <p>admin</p>
                                                <h4>3</h4>
                                            </div>
                                        </div>
                                        <div class="table-responsive m-t-20">
                                            <table id="datatable-buttons" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Name</th>
                                                        <th>NIS</th>
                                                        <th>Total</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-muted">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Smith Drake</td>
                                                        <td>001010100010101</td>
                                                        <td>$1,00,000</td>
                                                        <td>
                                                            <label class="badge mb-0 badge-primary-inverse"> Overdue</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Martha Doe</td>
                                                        <td>001010100010101</td>
                                                        <td>$70,000</td>
                                                        <td>
                                                            <label class="badge mb-0 badge-warning-inverse
                                                                "> Outstanding</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Fenish Paul</td>
                                                        <td>001010100010101</td>
                                                        <td>$60,000</td>
                                                        <td>
                                                            <label class="badge mb-0 badge-info-inverse
                                                                "> Open</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Albom Mitch</td>
                                                        <td>001010100010101</td>
                                                        <td>$60,000</td>
                                                        <td>
                                                            <label class="badge mb-0 badge-success-inverse
                                                                "> Paid</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Bacon Francis</td>
                                                        <td>001010100010101</td>
                                                        <td>$50,000</td>
                                                        <td>
                                                            <label class="badge mb-0 badge-primary-inverse
                                                                "> Overdue</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Vanessa Angel</td>
                                                        <td>001010100010101</td>
                                                        <td>$42,000</td>
                                                        <td>
                                                            <label class="badge mb-0 badge-warning-inverse
                                                                "> Outstanding</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Fenish Paul</td>
                                                        <td>001010100010101</td>
                                                        <td>$60,000</td>
                                                        <td>
                                                            <label class="badge mb-0 badge-info-inverse
                                                                "> Open</label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="row">

                        </div>
                        <!-- end row -->
                        <!-- event Modal -->
                        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="modelemail">Event Name</label>
                                                <input type="email" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Event Color</label>
                                                <select class="form-control">
                                                    <option>Primary</option>
                                                    <option>Warning</option>
                                                    <option>Success</option>
                                                    <option>Danger</option>
                                                </select>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
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