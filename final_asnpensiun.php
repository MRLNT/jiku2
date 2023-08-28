<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
//error_reporting(E_ERROR | E_PARSE);



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

            <?php @include 'components/navigation.html'?>

            <div class="app-main" id="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 m-b-30">
                            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                <div class="page-title mb-2 mb-sm-0">
                                    <h1>DATA FINAL ASN PENSIUN</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row editable-wrapper">
                        <div class="col-lg-12 ">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <?php
                                    $sql = "SELECT id_pengajuan, nama_marketing, nama_debitur FROM data_kredit_pensiun";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        echo '<table class="table display responsive nowrap table-light table-bordered">';
                                        echo '<thead class="thead-light">';
                                        echo '<tr>';
                                        echo '<th>ID Pengajuan</th>';
                                        echo '<th>Nama Marketing</th>';
                                        echo '<th>Nama Debitur</th>';
                                        echo '<th>Edit</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<tr>';
                                            echo '<td>' . $row['id_pengajuan'] . '</td>';
                                            echo '<td>' . $row['nama_marketing'] . '</td>';
                                            echo '<td>' . $row['nama_debitur'] . '</td>';
                                            echo '<td><a href="final_asnpensiun_check?edit_id=' . $row['id_pengajuan'] . '" class="btn btn-info">Edit</a></td>';
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                    } else {
                                        echo 'No records found.';
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function setEditId(id) {
            <?php $_SESSION['edit_id_pengajuan'] = "' + id + '"; ?>
        }
    </script>
    <script src="assets/js/vendors.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>