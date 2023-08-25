<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
//error_reporting(E_ERROR | E_PARSE);

$kode_marketing = $_SESSION['user_name'];
$sql3 = "SELECT * FROM temp_form3 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
    $row = $result3->fetch_assoc();
    $tanggal_lahir = $row['tanggal_lahir'];
    $umur = date_diff(date_create($tanggal_lahir), date_create('today'))->y;
} else {echo "No data found.";}

if(isset($_POST['submit'])){
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];
    $jumlah_pinjaman = preg_replace('/[.,]|Rp\s?/u', '', $jumlah_pinjaman);
    $waktu_pinjaman = $_POST['waktu_pinjaman'];
    $umur_pengajuan = $_POST['umur_pengajuan'];
    $kode_marketing = $_SESSION['user_name'];
    $jenis_payroll = $_POST['jenis_payroll'];

    $insert = "INSERT INTO temp_form4(jumlah_pinjaman,waktu_pinjaman,umur_pengajuan,kode_marketing,jenis_payroll) 
    VALUES('$jumlah_pinjaman','$waktu_pinjaman','$umur_pengajuan','$kode_marketing','$jenis_payroll')";
    mysqli_query($conn, $insert);
    //header('Location: user_page6.php');
    header('Location: prapensiun_5.php');
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
                                    <h1>Kalkulasi</h1>
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
                                        <div class="form-group">
                                            <label for="numeric8">Jumlah Pinjaman</label>
                                            <input name="jumlah_pinjaman" type="text" class="form-control autonumber" id="numeric8" placeholder="Masukkan Jumlah Pinjaman Anda" inputmode="numeric" oninput="handleInputChange(this);">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric9">Waktu Pinjaman (dalam tahun)</label>
                                            <input name="waktu_pinjaman" type="text" class="form-control autonumber" id="numeric9" placeholder="Masukkan Waktu pinjaman anda dalam tahun">
                                        </div>
                                        <div class="form-group">
                                            <label for="numeric10">Umur Pengajuan (dalam tahun)</label>
                                            <input name="umur_pengajuan" type="text" class="form-control autonumber" id="numeric10" value="<?php echo $umur; ?>">
                                        </div>
                                        <div class="form-group">
                                            <div class="card-body">
                                                <label>Jenis Payroll</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_payroll" id="inlineRadio01" value="Bank Nagari">
                                                    <label class="form-check-label" for="inlineRadio01">Bank Nagari</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_payroll" id="inlineRadio02" value="Non Nagari">
                                                    <label class="form-check-label" for="inlineRadio02">Non Nagari</label>
                                                </div>
                                            </div>
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