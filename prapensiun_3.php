<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
//error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $kode_marketing = $_SESSION['user_name'];
    $nama_debitur = $_POST['nama_debitur'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik_debitur = $_POST['nik_debitur'];
    $nip_debitur = $_POST['nip_debitur'];
    $nomor_pensiun = $_POST['nomor_pensiun'];
    $alamat_rumah = $_POST['alamat_rumah'];
    $nama_ibu = $_POST['nama_ibu'];
    $nama_instansi = $_POST['nama_instansi'];
    $pangkat_golongan = $_POST['pangkat_golongan'];
    $nomor_rekening = $_POST['nomor_rekening'];
    $nomor_npwp = $_POST['nomor_npwp'];
    $nomor_telepon = $_POST['nomor_telepon'];

    $gaji_debitur = $_POST['gaji_debitur'];
    $gaji_debitur = preg_replace('/[.,]|Rp\s?/u', '', $gaji_debitur);
    
    $insert = "INSERT INTO temp_form3(nama_debitur,kode_marketing,tempat_lahir,tanggal_lahir,nik_debitur,nip_debitur,nomor_pensiun,alamat_rumah,nama_ibu,nama_instansi,pangkat_golongan,nomor_rekening,nomor_npwp,nomor_telepon,gaji_debitur) VALUES('$nama_debitur','$kode_marketing','$tempat_lahir','$tanggal_lahir','$nik_debitur','$nip_debitur','$nomor_pensiun','$alamat_rumah','$nama_ibu','$nama_instansi','$pangkat_golongan','$nomor_rekening','$nomor_npwp','$nomor_telepon','$gaji_debitur')";
    mysqli_query($conn, $insert);
    header('Location: prapensiun_4.php');
    //header('Location: kredit_final.php');
    //header('Location: user_page6.php');
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
                                    <h1>Data Pribadi</h1>
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
                                            <label for="formGroupExampleInput1">Nama Debitur</label>
                                            <input name="nama_debitur" type="text" class="form-control" id="formGroupExampleInput1" placeholder="Masukkan Nama Anda">
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
                                            <label for="formGroupExampleInput4">NIK Debitur</label>
                                            <input name="nik_debitur" type="number" class="form-control" id="formGroupExampleInput4" placeholder="Masukkan NIK Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput5">NIP Debitur</label>
                                            <input name="nip_debitur" type="number" class="form-control" id="formGroupExampleInput5" placeholder="Masukkan NIP Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput6">Nomor Pensiun</label>
                                            <input name="nomor_pensiun" type="number" class="form-control" id="formGroupExampleInput6" placeholder="Masukkan Nomor Pensiun Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput7">Alamat Rumah</label>
                                            <input name="alamat_rumah" type="text" class="form-control" id="formGroupExampleInput7" placeholder="Masukkan Alamat Anda">
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
                                            <select class="form-control"
                                            name="pangkat_golongan" type="text"  id="formGroupExampleInput10" placeholder="Masukkan Pangkat dan Golongan Anda">
                                                <option>Golongan IV A Pembina</option>
                                                <option>Golongan IV B Pembina Tingkat 1</option>
                                                <option>Golongan IV C Pembina Utama Muda</option>
                                                <option>Golongan IV D Pembina Utama Madya</option>
                                                <option>Golongan IV E Pembina Utama</option>
                                                <option>Golongan III A Penata Muda</option>
                                                <option>Golongan III B Penata Muda Tingkat 1</option>
                                                <option>Golongan III C Penata</option>
                                                <option>Golongan III D Penata Tingkat 1</option>
                                                <option>Golongan II A Pengatur Muda</option>
                                                <option>Golongan II B Pengatur Muda Tingkat 1</option>
                                                <option>Golongan II C Pengatur</option>
                                                <option>Golongan II D Pengatur Tingkat 1</option>
                                                <option>Golongan I A Juru Muda</option>
                                                <option>Golongan I B Juru Muda Tingkat 1</option>
                                                <option>Golongan I C Juru</option>
                                                <option>Golongan I D Juru Tingkat 1</option>
                                                <option>Lainnya</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput14">Gaji Bulanan</label>
                                            <input id="formGroupExampleInput14" class="form-control" type="text" name="gaji_debitur" inputmode="numeric" oninput="handleInputChange(this);" placeholder="Masukkan Gaji Bulanan Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput11">Nomor Rekening</label>
                                            <input name="nomor_rekening" type="number" class="form-control" id="formGroupExampleInput11" placeholder="Masukkan Nomor Rekening Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput12">Nomor NPWP</label>
                                            <input name="nomor_npwp" type="number" class="form-control" id="formGroupExampleInput12" placeholder="Masukkan Nomor NPWP Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput13">Nomor Telepon</label>
                                            <input name="nomor_telepon" type="number" class="form-control" id="formGroupExampleInput13" placeholder="Masukkan Nomor Telepon Anda">
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