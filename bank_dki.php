<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

$sql_count_total_prapensiun = "SELECT COUNT(*) FROM data_kredit_prapensiun WHERE tipe_kredit = 'PRAPENSIUN'";
$result1 = $conn->query($sql_count_total_prapensiun);
if ($result1->num_rows > 0) {
    $count_total_prapensiun = $result1->fetch_assoc();
    $count_total_prapensiun = implode(', ', $count_total_prapensiun);
} else echo "No data found.";

$sql_sum_total_prapensiun = "SELECT SUM(jumlah_pinjaman) FROM data_kredit_prapensiun WHERE tipe_kredit = 'PRAPENSIUN'";
$result2 = $conn->query($sql_sum_total_prapensiun);
if ($result2->num_rows > 0) {
    $sum_total_prapensiun = $result2->fetch_assoc();
    $sum_total_prapensiun = implode(', ', $sum_total_prapensiun);
    $sum_total_prapensiun = number_format($sum_total_prapensiun, 0, ',', '.');
} else echo "No data found.";

$sql_count_total_pensiun = "SELECT COUNT(*) FROM data_kredit_pensiun WHERE tipe_kredit = 'ASN PENSIUN'";
$result1 = $conn->query($sql_count_total_pensiun);
if ($result1->num_rows > 0) {
    $count_total_pensiun = $result1->fetch_assoc();
    $count_total_pensiun = implode(', ', $count_total_pensiun);
} else echo "No data found.";

$sql_sum_total_pensiun = "SELECT SUM(jumlah_pinjaman) FROM data_kredit_pensiun WHERE tipe_kredit = 'ASN PENSIUN'";
$result2 = $conn->query($sql_sum_total_pensiun);
if ($result2->num_rows > 0) {
    $sum_total_pensiun = $result2->fetch_assoc();
    $sum_total_pensiun = implode(', ', $sum_total_pensiun);
    $sum_total_pensiun = number_format($sum_total_pensiun, 0, ',', '.');
} else echo "No data found.";

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
                            <img src="assets/img/logo.png" class="img-fluid logo-desktop" alt="logo" />
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
                            <li class="nav-static-title">Personal</li>
                            <li class="active">
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Dashboards</span>
                                    <span class="nav-label label label-danger">9</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li class="active"> <a href='admin_page.php'>Default</a> </li>
                                </ul>
                            </li>
                            <li><a href="logout.php" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Logout</span></a> </li>
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
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1>Dashboard Admin</h1>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- start Tabs contant -->
                    <div class="row">
                        <div class="col-xxl-4 m-b-30">
                            <div class="card card-statistics h-100 mb-0 o-hidden">
                                <div class="card-header">
                                    <h4 class="card-title">Nasabah ASN PRAPENSIUN</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                                            <h3 class="mb-1 mb-xxs-0"><?php echo $count_total_prapensiun;?> Debitur
                                            </h3>
                                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+23%</b> dari bulan lalu  </span>
                                        </div>
                                        <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                                            <h3 class="mb-1 mb-xxs-0">Total Pinjaman<br>Rp <?php echo $sum_total_prapensiun;?></h3>
                                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+15%</b> Likes </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h4 class="card-title">Nasabah ASN PENSIUN</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                                            <h3 class="mb-1 mb-xxs-0"><?php echo $count_total_pensiun;?> Debitur
                                            </h3>
                                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+23%</b> dari bulan lalu  </span>
                                        </div>
                                        <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                                            <h3 class="mb-1 mb-xxs-0">Total Pinjaman<br>Rp <?php echo $sum_total_pensiun;?></h3>
                                            <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+15%</b> Likes </span>
                                        </div>
                                    </div>
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