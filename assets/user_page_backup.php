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

    // $umur = (date('Y') - date('Y',strtotime($tanggal_lahir)));
    // echo "<script type='text/javascript'>alert('$umur');</script>";

    // waktu_pengajuan NOW() tanggal_syarat_ketentuan NOW()
    
    $insert = "INSERT INTO pengajuan_kredit(nama_marketing, nik_marketing, cabang_pembantu, waktu_pengajuan,no_hp_marketing,tanggal_syarat_ketentuan,tanggal_lahir,nama_user,tempat_lahir,nik_user,nip_user,no_pensiun,alamat_user,nama_ibu,nama_instansi,pangkat_golongan,no_rekening,no_npwp,no_telepon) 
    VALUES('$nama_marketing','$nik_marketing','$cabang_pembantu',NOW(),'$no_hp_marketing',NOW(),'$tanggal_lahir','$nama_user','$tempat_lahir','$nik_user','$nip_user','$no_pensiun','$alamat_user','$nama_ibu','$nama_instansi','$pangkat_golongan','$no_rekening','$no_npwp','$no_telepon')";
    mysqli_query($conn, $insert);
    // header('Location: dashboard_user.php');
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
                                            <input name="nik_marketing" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan NIK Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Handphone</label>
                                            <input name="no_hp_marketing" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan No Handphone Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Cabang/Capem</label>
                                            <input name="cabang_pembantu" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nama Cabang">
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Syarat dan Ketentuan</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Bank Nagari<br><br>Syarat dan Ketentuan:</h4>
                                        <h5 class="card-text">Bank Nagari<br>Syarat dan Ketentuan:<br>1.	Calon Debitur membuat dan menandatangi permohonan kredit/pembiayaan, dengan melengkapi data persyaratan yang ditetapkan oleh Bank.<br>2. Debitur yang akan mengajukan perubahan plafond, penukaran jaminan, syarat - syarat lainnya dari Perjanjian/Akad Kredit/Pembiayaan harus mengajukan dan menandatangani permohonan kepada Bank.<br> 3. Bank berhak meminta data - data dan keterangan yang dibutuhkan, sesuai dengan kentuan dan persyaratan kredit/pembiayaan.<br>4.	Calon Debitur atau Debitur berkewajiban memberi keterangan yang diminta oleh Bank dengan benar, baik mengenai identitas Debitur, kondisi keuangan dan lain sebagainya.<br>5. Bank setelah melaukan analisa mengenal kelayakan pemberian kredit/pembiayaan atas permohonan yang diajukan oleh Calon Debitur atau Debitur menetapkan : <br>a.	Permohonan ditolak, apabila menurut penilaian Bank, Debitur tidak layak diberikan kredit/pembiayaan.<br>b.	Permohonan ditangguhkan, apabila persyaratan yang ditetapkan oleh Bank belum dipenuhi oleh Debitur atau karena hal lain yang belum bisa dipenuhi untuk syarat pencairan kredit/pembiayaan debitur.<br>c.	Permohonan dikabulkan, apabila menurut penilaian Bank Debitur layak untuk diberikan kredit/pembiayaan.<br>6. Bank hanya dapat mengabulkan permohonan Calon Debitur atau Debitur, maksimal sebesar permohonan Calon Debitur atau Debitur.<br>7. Berdasarkan analisa yang telah dilakukan Bank dapat menetapkan arah/komposisi pembiayaan usaha calon Debitur atau Debitur.<br>8. Calon Debitur jika setuju dengan persyaratan Bank wajib menandatangani Surat Pemberitahuan Persetujuan Kredit yang diserahkan oleh Bank kepada Debitur.<br>9. Jumlah kredit yang diberikan tidak mutlak ditentukan oleh nilai agunan yang diberikan Debitur, tetapi berdasarkan kemampuan bayar dan kebutuhan kredit Debitur.<br></h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Setujui syarat dan ketentuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Data Pribadi</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Nama</label>
                                            <input name="nama_user" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Tempat Lahir Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tanggal Lahir</label><br>
                                            <input name="tanggal_lahir" type="date" placeholder="Masukkan Tanggal Lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">NIK</label>
                                            <input name="nik_user" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan NIK Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">NIP</label>
                                            <input name="nip_user" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan NIP Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Pensiun</label>
                                            <input name="no_pensiun" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan No Pensiun Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Alamat</label>
                                            <input name="alamat_user" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Alamat Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Nama Ibu</label>
                                            <input name="nama_ibu" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nama Ibu Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Nama Instansi</label>
                                            <input name="nama_instansi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nama Instansi Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Pangkat dan Golongan</label>
                                            <input name="pangkat_golongan" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Pangkat dan Golongan Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Rekening</label>
                                            <input name="no_rekening" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan No Rekening Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No NPWP</label>
                                            <input name="no_npwp" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan No NPWP Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Telepon</label>
                                            <input name="no_telepon" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan No Telepon Anda">
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Perjanjian Kredit</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Customer CIF</label>
                                            <input name="customer_cif" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Pangkat dan Golongan Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Nominal Permohonan</label>
                                            <input name="nominal_permohonan" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan No Rekening Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Jangka Waktu Pinjaman</label>
                                            <input name="jangka_waktu_pinjaman" type="text" class="form-control autonumber" id="numeric" placeholder="Masukkan No Rekening Anda">
                                        </div>
                                        <button>Submit</button>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Dokumen Checklist</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
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
                                        <br>
                                    </div>
                                    <div>
                                        <label>Perusahaan Fronting PT.Jaringan Inklusi Keuangan</label><br>
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
                                    </div>
                                    <input type="submit" name="submit" value="Selanjutnya" class="btn btn-primary text-uppercase">
                                </form>
                                <?php
                                $nama = @$_GET['nama'];
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
                                echo "<strong>Nama:</strong> {$nama} <br>";
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
                            </div>
                            <div class="card card-statistics">
                                <div class="card-body">
                                <?php
                                    $nominal_permohonan = $_POST['nominal_permohonan'];
                                    if($nominal_permohonan > 300000000) echo "Nominal tidak boleh leih dari Rp 300.000.000";    
                                ?>
                                </div>
                                <div class="card-body">
                                    <form name="form" action="" method="get">
                                        <input type="text" name="subject" id="subject" value="Car Loan">
                                    </form>
                                    <?php echo $_GET['subject']; ?>
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