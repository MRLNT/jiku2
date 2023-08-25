<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
//error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $nama_marketing = $_POST['nama_marketing'];
    $nik_marketing = $_POST['nik_marketing'];
    $cabang_pembantu = $_POST['cabang_pembantu'];
    $no_hp_marketing = $_POST['no_hp_marketing'];

    $insert = "INSERT INTO pengajuan_kredit(nama_marketing, nik_marketing, cabang_pembantu, no_hp_marketing) VALUES('$nama_marketing','$nik_marketing','$cabang_pembantu','$no_hp_marketing')";
    mysqli_query($conn, $insert);
    header('Location: dashboard_user.php');
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
                                    <h1>Review Formulir Akhir</h1>
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
                                        <?php
                                        $sql1 = "SELECT * FROM temp_form1 ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result1 = $conn->query($sql1);
                                        if ($result1->num_rows > 0) {
                                            $row = $result1->fetch_assoc();
                                        } else {
                                            echo "No data found.";
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Nama Marketing</label>
                                            <input name="nama_marketing" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['nama_marketing'] ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">NIK</label>
                                            <input name="nik_marketing" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['nik_marketing'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Handphone</label>
                                            <input name="no_hp_marketing" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['no_hp_marketing'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Cabang/Capem</label>
                                            <input name="cabang_pembantu" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['cabang_pembantu'] ?>">
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Syarat dan Ketentuan Bank Nagari</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-text">Bank Nagari<br>Syarat dan Ketentuan:<br>1.	Calon Debitur membuat dan menandatangi permohonan kredit/pembiayaan, dengan melengkapi data persyaratan yang ditetapkan oleh Bank.<br><br>2. Debitur yang akan mengajukan perubahan plafond, penukaran jaminan, syarat - syarat lainnya dari Perjanjian/Akad Kredit/Pembiayaan harus mengajukan dan menandatangani permohonan kepada Bank.<br><br> 3. Bank berhak meminta data - data dan keterangan yang dibutuhkan, sesuai dengan kentuan dan persyaratan kredit/pembiayaan.<br><br>4.	Calon Debitur atau Debitur berkewajiban memberi keterangan yang diminta oleh Bank dengan benar, baik mengenai identitas Debitur, kondisi keuangan dan lain sebagainya.<br><br>5. Bank setelah melaukan analisa mengenal kelayakan pemberian kredit/pembiayaan atas permohonan yang diajukan oleh Calon Debitur atau Debitur menetapkan : <br>a.	Permohonan ditolak, apabila menurut penilaian Bank, Debitur tidak layak diberikan kredit/pembiayaan.<br>b.	Permohonan ditangguhkan, apabila persyaratan yang ditetapkan oleh Bank belum dipenuhi oleh Debitur atau karena hal lain yang belum bisa dipenuhi untuk syarat pencairan kredit/pembiayaan debitur.<br>c.	Permohonan dikabulkan, apabila menurut penilaian Bank Debitur layak untuk diberikan kredit/pembiayaan.<br><br>6. Bank hanya dapat mengabulkan permohonan Calon Debitur atau Debitur, maksimal sebesar permohonan Calon Debitur atau Debitur.<br><br>7. Berdasarkan analisa yang telah dilakukan Bank dapat menetapkan arah/komposisi pembiayaan usaha calon Debitur atau Debitur.<br><br>8. Calon Debitur jika setuju dengan persyaratan Bank wajib menandatangani Surat Pemberitahuan Persetujuan Kredit yang diserahkan oleh Bank kepada Debitur.<br><br>9. Jumlah kredit yang diberikan tidak mutlak ditentukan oleh nilai agunan yang diberikan Debitur, tetapi berdasarkan kemampuan bayar dan kebutuhan kredit Debitur.<br></h5>
                                        <?php
                                        $sql2 = "SELECT * FROM temp_form2 ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result2 = $conn->query($sql2);
                                        if ($result2->num_rows > 0) {
                                            $row = $result2->fetch_assoc();
                                        } else {
                                            echo "No data found.";
                                        }
                                        ?>
                                        <h5 style="color: red;">Syarat dan Ketentuan disetujui pada : <?php echo $row['tanggal_syarat_ketentuan'] ?></h5>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Data Pribadi</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        $sql3 = "SELECT * FROM temp_form3 ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result3 = $conn->query($sql3);
                                        if ($result3->num_rows > 0) {
                                            $row = $result3->fetch_assoc();
                                        } else {
                                            echo "No data found.";
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Nama</label>
                                            <input name="nama_user" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['nama_user'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['tempat_lahir'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tanggal Lahir</label><br>
                                            <input name="tanggal_lahir" type="date" value="<?php echo $row['tanggal_lahir'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">NIK</label>
                                            <input name="nik_user" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['nik_user'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">NIP</label>
                                            <input name="nip_user" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['nip_user'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Pensiun</label>
                                            <input name="no_pensiun" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['no_pensiun'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Alamat</label>
                                            <input name="alamat_user" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['alamat_user'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Nama Ibu</label>
                                            <input name="nama_ibu" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['nama_ibu'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Nama Instansi</label>
                                            <input name="nama_instansi" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['nama_instansi'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Pangkat dan Golongan</label>
                                            <input name="pangkat_golongan" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['pangkat_golongan'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Rekening</label>
                                            <input name="no_rekening" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['no_rekening'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No NPWP</label>
                                            <input name="no_npwp" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['no_npwp'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">No Telepon</label>
                                            <input name="no_telepon" type="text" class="form-control autonumber" id="numeric" value="<?php echo $row['no_telepon'] ?>">
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Simulasi Kredit</h4>
                                        </div>
                                    </div>
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
                                        <?php

                                        $umur = $row['umur_pengajuan'];
                                        $pinjaman = $row['jumlah_pinjaman'];
                                        $wpinjaman = $row['waktu_pinjaman'];

                                        $jpersen = 0.0;
                                        $totalbungabulanan = 0;
                                        $biayaprovisi = 0;
                                        $jmlhditerima = 0;
                                        $bungabulanan = 0;
                                        $biayapencairan = 0;
                                        $pembayaranbulanan = 0;
                                        $jumlahcicilanbulanan = 0;
                                        $max_pinjaman = 300000000; // Maksimal jumlah pinjaman adalah 300 juta
                                        $premi = 0;
                                        $wpinjamanthn = 0; //new

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

                                        if ($wpinjaman>=1 && $wpinjaman<=60) {
                                            $jpersen = 9;
                                        } elseif($wpinjaman>=61 && $wpinjaman<=120) {
                                            $jpersen = 9.5;
                                        } else{
                                            $jpersen = 10.5;
                                        }

                                        $totalbungabulanan = ($pinjaman*$jpersen)/100/12;
                                    // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                        $totalbunga = ($pinjaman*$jpersen)/100*$wpinjamanthn;
                                    // Total suku bunga =1.  200jt*9persen=19jt:12 (bulan)
                                        $premi = 0.00375*$pinjaman*($wpinjaman/12);
                                    // Total premi =2.  0.375*200jt*5tahun=3.750.000jt
                                        $biayaprovisi = $pinjaman*0.01;
                                    // Biaya Provisi =3.
                                        $jmlhditerima = $pinjaman - $premi - $biayaprovisi - 150000;
                                    // Jumlah yang diterima
                                        $bungabulanan = $jpersen / 12;
                                    // Bunga Bulanan
                                        $biayapencairan= $premi + $biayaprovisi + 150000;
                                    // Bunga Bulanan
                                        $pembayaranbulanan= ($pinjaman + $totalbunga) / $wpinjaman;
                                    // Pembayaran Bulanan
                                        $jumlahcicilanbulanan= $wpinjaman;
                                    // Pembayaran Bulanan
                                        $wpinjamanthn= $wpinjaman / 12 ; 
                                    // Pinjaman dalam tahun new

                                        $bungabulanan_persen = number_format($bungabulanan, 2, '.', '') ;
                                        $pembayaranbulanan_format = number_format($pembayaranbulanan, 0, ',', '.');
                                        $pinjaman_format = number_format($pinjaman, 0, ',', '.');
                                        $biayapencairan_format = number_format($biayapencairan, 0, ',', '.');
                                        $jmlhditerima_format = number_format($jmlhditerima, 0, ',', '.');
                                        $premi_format = number_format($premi, 0, ',', '.');
                                        $biayaprovisi_format = number_format($biayaprovisi, 0, ',', '.');

                                        echo "<br>";
                                        echo "<strong>Jumlah yang Diajukan:</strong> Rp {$pinjaman_format} <br>";
                                        echo "<strong>Waktu Pinjaman:</strong> {$wpinjaman} Bulan / {$wpinjamanthn} Tahun<br>";
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
                                    </h5>
                                        
                                    </div>


                                    <div class="card-header d-sm-flex justify-content-between align-items-center py-3">
                                        <div class="card-heading mb-3 mb-sm-0">
                                            <h4 class="card-title">Dokumen Check List dan Tanda Terima Dokumen</h4>
                                        </div>
                                    </div>
                                    <div class="card-body scrollbar scroll_dark" style="max-height: 420px;">
                                    <?php
                                        $sql6 = "SELECT * FROM temp_form6 ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result6 = $conn->query($sql6);
                                        if ($result6->num_rows > 0) {
                                            $row = $result6->fetch_assoc();
                                        } else {
                                            echo "No data found.";
                                        }
                                    ?>
                                        <div class="table-responsive m-t-20">
                                            <table id="datatable-buttons" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Dokumen</th>
                                                        <th>Cek List</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-muted">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Asli SK Pangkat Calon Pegawai 80%</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_1" id="defaultCheck1" name="kredit_file_1" <?php echo ($row['kredit_file_1']=='kredit_file_1' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Asli SK Pengangkatan sebagai PNS (100%) / SK Pensiun</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_2" id="defaultCheck2" name="kredit_file_2" <?php echo ($row['kredit_file_2']=='kredit_file_2' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck2">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Asli SK Pangkat Terakhir</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_3" id="defaultCheck3" name="kredit_file_3" <?php echo ($row['kredit_file_3']=='kredit_file_3' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck3">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Slip Gaji Bulan Terakhir</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_4" id="defaultCheck4" name="kredit_file_4" <?php echo ($row['kredit_file_4']=='kredit_file_4' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck4">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Copy Kartu Tanda Penduduk (KTP)</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_5" id="defaultCheck5" name="kredit_file_5" <?php echo ($row['kredit_file_5']=='kredit_file_5' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck5">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Copy Kartu Keluarga</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_6" id="defaultCheck6" name="kredit_file_6" <?php echo ($row['kredit_file_6']=='kredit_file_6' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck6">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Asli Bukti Kepemilikan Agunan bagi kredit yang disyaratkan<br>menggunakan agunan tambahan</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_7" id="defaultCheck7" name="kredit_file_7" <?php echo ($row['kredit_file_7']=='kredit_file_7' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck7">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Copy Kartu Taspen</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_8" id="defaultCheck8" name="kredit_file_8" <?php echo ($row['kredit_file_8']=='kredit_file_8' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck8">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Copy NPWP untuk jumlah permohonan kredit yang wajib<br>dilengkapi NPWP sesuai aturan yang berlaku</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_9" id="defaultCheck9" name="kredit_file_9" <?php echo ($row['kredit_file_9']=='kredit_file_9' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck9">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Menyerahkan Surat Kuasa Memotong Gaji<br>diatas materi secukupnya</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_10" id="defaultCheck10" name="kredit_file_10" <?php echo ($row['kredit_file_10']=='kredit_file_10' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck10">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Menyerahkan Surat Kuasa Pendebetan<br>Rekening diatas material secukupnya</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_11" id="defaultCheck11" name="kredit_file_11" <?php echo ($row['kredit_file_11']=='kredit_file_11' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck11">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Membuat Surat Pernyataan dan<br>Kuasa diatas materai secukupnya yang memuat :</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Pernyataan dari debitur tidak akan memindahkan<br>gaji/mengganti rekening gaji debitur dari PT Bank Nagari<br>walaupun debitur pindah tugas ke daerah lain sampai kredit<br>dinyatakan Lunas Oleh PT Bank Nagari</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_13" id="defaultCheck13" name="kredit_file_13" <?php echo ($row['kredit_file_13']=='kredit_file_13' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck13">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Menyetujui penggunaan Hak Substitusi dari Bendahara gaji lama kepada<br>bendahara gaji yang baru untuk memotong gajinya dan meneruskannya<br>/mengirimkan/transfer ke Bank Nagari untuk angsuran kreditnya</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_14" id="defaultCheck14" name="kredit_file_14" <?php echo ($row['kredit_file_14']=='kredit_file_14' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck14">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Memberikan kuasa kepada Bank Nagari untuk<br>melakukan penagihan kepada lembaga/instansi tempat debitur<br>bekerja apabila debitur pindah dinas ke daerah lain</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_15" id="defaultCheck15" name="kredit_file_15" <?php echo ($row['kredit_file_15']=='kredit_file_15' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck15">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Menyetujui pendampingan pengurusan dan<br>pengarahan yang dilakukan oleh staf PT<br>Bank Nagari agar uang pensiun Debitur dibayarkan melalui PT Bank Nagari</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_16" id="defaultCheck16" name="kredit_file_16" <?php echo ($row['kredit_file_16']=='kredit_file_16' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck16">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Untuk debitur Selang 2 (dua) Waktu wajib dilengkapi dengan I-Deb SLIK</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_17" id="defaultCheck17" name="kredit_file_17" <?php echo ($row['kredit_file_17']=='kredit_file_17' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck17">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Kwitansi/bukti lunas/keterangan lunas dari<br>bank lain tersebut setelah kredit di bank lain dilunasi</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_18" id="defaultCheck18" name="kredit_file_18" <?php echo ($row['kredit_file_18']=='kredit_file_18' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck18">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Form Fronting Agent ditandatangi oleh Calon Debitur dan Bank</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_19" id="defaultCheck19" name="kredit_file_19" <?php echo ($row['kredit_file_19']=='kredit_file_19' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck19">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>Format Form Fronting Agent sebagaimana diatur dalam Lampiran</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="kredit_file_20" id="defaultCheck20" name="kredit_file_20" <?php echo ($row['kredit_file_20']=='kredit_file_20' ? 'checked' : ''); ?>>
                                                                <label class="form-check-label" for="defaultCheck20">
                                                                    Ada / Tidak
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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