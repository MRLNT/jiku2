<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$kode_marketing = $_SESSION['user_name'];
//error_reporting(E_ERROR | E_PARSE);


if(isset($_POST['submit'])){
    $tipe_kredit = "ASN AKTIF";
    // TABLE 1
    $nama_marketing = $_POST['nama_marketing'];$nik_marketing = $_POST['nik_marketing'];$cabang_pembantu = $_POST['cabang_pembantu'];$no_hp_marketing = $_POST['no_hp_marketing'];
    // TABLE 2
    $sql20 = "SELECT * FROM temp_form2 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";$result20 = $conn->query($sql20);if ($result20->num_rows > 0) {$row = $result20->fetch_assoc();$tanggal_syarat_ketentuan = $row['tanggal_syarat_ketentuan'];} else echo "No data found.";
    // TABLE 3
    $nama_debitur = $_POST['nama_debitur'];$tempat_lahir = $_POST['tempat_lahir'];$tanggal_lahir = $_POST['tanggal_lahir'];$nik_debitur = $_POST['nik_debitur'];$nip_debitur = $_POST['nip_debitur'];$nomor_pensiun = $_POST['nomor_pensiun'];$alamat_rumah = $_POST['alamat_rumah'];$nama_ibu = $_POST['nama_ibu'];$nama_instansi = $_POST['nama_instansi'];$pangkat_golongan = $_POST['pangkat_golongan'];$nomor_rekening = $_POST['nomor_rekening'];$nomor_npwp = $_POST['nomor_npwp'];$nomor_telepon = $_POST['nomor_telepon'];$gaji_debitur = $_POST['gaji_debitur'];$gaji_debitur = preg_replace('/[.,]|Rp\s?/u', '', $gaji_debitur);
    // TABLE 4
    $sql4 = "SELECT * FROM temp_form4 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";$result4 = $conn->query($sql4);if ($result4->num_rows > 0) {$row = $result4->fetch_assoc();$jumlah_pinjaman = $row['jumlah_pinjaman'];$waktu_pinjaman = $row['waktu_pinjaman'];$umur_pengajuan = $row['umur_pengajuan'];$suku_bunga = $row['suku_bunga'];$total_premi = $row['total_premi'];$pembayaranbulanan = $row['pembayaran_bulanan'];} else echo "No data found.";
    // TABLE 5
    $kredit_file_1 = $_POST['kredit_file_1'];$kredit_file_2 = $_POST['kredit_file_2'];$kredit_file_3 = $_POST['kredit_file_3'];$kredit_file_4 = $_POST['kredit_file_4'];$kredit_file_5 = $_POST['kredit_file_5'];$kredit_file_6 = $_POST['kredit_file_6'];$kredit_file_7 = $_POST['kredit_file_7'];$kredit_file_8 = $_POST['kredit_file_8'];$kredit_file_9 = $_POST['kredit_file_9'];$kredit_file_10 = $_POST['kredit_file_10'];$kredit_file_11 = $_POST['kredit_file_11'];$kredit_file_12 = $_POST['kredit_file_12'];$kredit_file_13 = $_POST['kredit_file_13'];$kredit_file_14 = $_POST['kredit_file_14'];$kredit_file_15 = $_POST['kredit_file_15'];$kredit_file_16 = $_POST['kredit_file_16'];$kredit_file_17 = $_POST['kredit_file_17'];$kredit_file_18 = $_POST['kredit_file_18'];$kredit_file_19 = $_POST['kredit_file_19'];
    $catatan_file_1 = $_POST['catatan_file_1'];
    $catatan_file_2 = $_POST['catatan_file_2'];
    $catatan_file_3 = $_POST['catatan_file_3'];
    $catatan_file_4 = $_POST['catatan_file_4'];
    $catatan_file_5 = $_POST['catatan_file_5'];
    $catatan_file_6 = $_POST['catatan_file_6'];
    $catatan_file_7 = $_POST['catatan_file_7'];
    $catatan_file_8 = $_POST['catatan_file_8'];
    $catatan_file_9 = $_POST['catatan_file_9'];
    $catatan_file_10 = $_POST['catatan_file_10'];
    $catatan_file_11 = $_POST['catatan_file_11'];
    $catatan_file_12 = $_POST['catatan_file_12'];
    $catatan_file_13 = $_POST['catatan_file_13'];
    $catatan_file_14 = $_POST['catatan_file_14'];
    $catatan_file_15 = $_POST['catatan_file_15'];
    $catatan_file_16 = $_POST['catatan_file_16'];
    $catatan_file_17 = $_POST['catatan_file_17'];
    $catatan_file_18 = $_POST['catatan_file_18'];
    $catatan_file_19 = $_POST['catatan_file_19'];

    // Buat variabel untuk menyimpan query
    $insert = "INSERT INTO data_kredit_asnaktif(tipe_kredit,
        nama_marketing, nik_marketing, cabang_pembantu, no_hp_marketing, kode_marketing,
        waktu_pengajuan, tanggal_syarat_ketentuan,
        nama_debitur,tempat_lahir,tanggal_lahir,nik_debitur,nip_debitur,nomor_pensiun,alamat_rumah,nama_ibu,nama_instansi,pangkat_golongan,nomor_rekening,nomor_npwp,nomor_telepon,gaji_debitur,
        jumlah_pinjaman,waktu_pinjaman,umur_pengajuan,suku_bunga,total_premi,pembayaran_bulanan,
        kredit_file_1, kredit_file_2, kredit_file_3, kredit_file_4, kredit_file_5, kredit_file_6, kredit_file_7, kredit_file_8, kredit_file_9, kredit_file_10, kredit_file_11, kredit_file_12, kredit_file_13, kredit_file_14, kredit_file_15, kredit_file_16, kredit_file_17, kredit_file_18, kredit_file_19,
        catatan_file_1, catatan_file_2, catatan_file_3, catatan_file_4, catatan_file_5, catatan_file_6, catatan_file_7, catatan_file_8, catatan_file_9, catatan_file_10, catatan_file_11, catatan_file_12, catatan_file_13, catatan_file_14, catatan_file_15, catatan_file_16, catatan_file_17, catatan_file_18, catatan_file_19
        ) 
        VALUES('$tipe_kredit','$nama_marketing','$nik_marketing','$cabang_pembantu','$no_hp_marketing','$kode_marketing',
        '$tanggal_syarat_ketentuan','$tanggal_syarat_ketentuan',
        '$nama_debitur','$tempat_lahir','$tanggal_lahir','$nik_debitur','$nip_debitur','$nomor_pensiun','$alamat_rumah','$nama_ibu','$nama_instansi','$pangkat_golongan','$nomor_rekening','$nomor_npwp','$nomor_telepon','$gaji_debitur',
        '$jumlah_pinjaman','$waktu_pinjaman','$umur_pengajuan','$suku_bunga','$total_premi','$pembayaranbulanan',
        '$kredit_file_1','$kredit_file_2','$kredit_file_3','$kredit_file_4','$kredit_file_5','$kredit_file_6','$kredit_file_7','$kredit_file_8','$kredit_file_9','$kredit_file_10','$kredit_file_11','$kredit_file_12','$kredit_file_13','$kredit_file_14','$kredit_file_15','$kredit_file_16','$kredit_file_17','$kredit_file_18','$kredit_file_19',
        '$catatan_file_1','$catatan_file_2','$catatan_file_3','$catatan_file_4','$catatan_file_5','$catatan_file_6','$catatan_file_7','$catatan_file_8','$catatan_file_9','$catatan_file_10','$catatan_file_11','$catatan_file_12','$catatan_file_13','$catatan_file_14','$catatan_file_15','$catatan_file_16','$catatan_file_17','$catatan_file_18','$catatan_file_19'
        )";
    mysqli_query($conn, $insert);
    header('Location: dashboard_user.php');
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
                                        $kode_marketing = $_SESSION['user_name'];
                                        $sql1 = "SELECT * FROM temp_form1 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
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
                                            <label for="formGroupExampleInput21">NIK</label>
                                            <input name="nik_marketing" type="number" class="form-control autonumber" id="formGroupExampleInput21" value="<?php echo $row['nik_marketing'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput22">No Handphone</label>
                                            <input name="no_hp_marketing" type="number" class="form-control autonumber" id="formGroupExampleInput22" value="<?php echo $row['no_hp_marketing'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput32">Cabang/Capem</label>
                                            <select class="form-control" name="cabang_pembantu" id="formGroupExampleInput32">
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG ALAHAN PANJANG') ? 'selected' : '' ?>>CABANG ALAHAN PANJANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG NIAGA') ? 'selected' : '' ?>>CABANG NIAGA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM GUBERNUR') ? 'selected' : '' ?>>CAPEM GUBERNUR</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM LUBUK BUAYA') ? 'selected' : '' ?>>CAPEM LUBUK BUAYA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PASAR RAYA') ? 'selected' : '' ?>>CABANG PASAR RAYA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SYARIAH PADANG') ? 'selected' : '' ?>>CABANG SYARIAH PADANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM BANDAR BUAT') ? 'selected' : '' ?>>CAPEM BANDAR BUAT</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM UNAND') ? 'selected' : '' ?>>CAPEM UNAND</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG BATU SANGKAR') ? 'selected' : '' ?>>CABANG BATU SANGKAR</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SITEBA') ? 'selected' : '' ?>>CABANG SITEBA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM RSUP M JAMIL') ? 'selected' : '' ?>>CAPEM RSUP M JAMIL</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SOLOK') ? 'selected' : '' ?>>CABANG SOLOK</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM AROSUKA') ? 'selected' : '' ?>>CAPEM AROSUKA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PAINAN') ? 'selected' : '' ?>>CABANG PAINAN</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM SIMPANG HARU') ? 'selected' : '' ?>>CAPEM SIMPANG HARU</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG BUKIT TINGGI') ? 'selected' : '' ?>>CABANG BUKIT TINGGI</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SIMPANG EMPAT') ? 'selected' : '' ?>>CABANG SIMPANG EMPAT</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG UJUNG GADING') ? 'selected' : '' ?>>CABANG UJUNG GADING</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM TABEK PATAH') ? 'selected' : '' ?>>CAPEM TABEK PATAH</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SYARIAH BATUSANGKAR') ? 'selected' : '' ?>>CABANG SYARIAH BATUSANGKAR</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG UTAMA') ? 'selected' : '' ?>>CABANG UTAMA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG BANDUNG') ? 'selected' : '' ?>>CABANG BANDUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG JAKARTA') ? 'selected' : '' ?>>CABANG JAKARTA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG KOTA BARU') ? 'selected' : '' ?>>CABANG KOTA BARU</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LINTAU') ? 'selected' : '' ?>>CABANG LINTAU</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LUBUK ALUNG') ? 'selected' : '' ?>>CABANG LUBUK ALUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LUBUK BASUNG') ? 'selected' : '' ?>>CABANG LUBUK BASUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LUBUK GADANG') ? 'selected' : '' ?>>CABANG LUBUK GADANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG LUBUK SIKAPING') ? 'selected' : '' ?>>CABANG LUBUK SIKAPING</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG MANTRAMAN JAKARTA') ? 'selected' : '' ?>>CABANG MANTRAMAN JAKARTA</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG MENTAWAI') ? 'selected' : '' ?>>CABANG MENTAWAI</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG MUARA LABUH') ? 'selected' : '' ?>>CABANG MUARA LABUH</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PADANG PANJANG') ? 'selected' : '' ?>>CABANG PADANG PANJANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PANGKALAN') ? 'selected' : '' ?>>CABANG PANGKALAN</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PARIAMAN') ? 'selected' : '' ?>>CABANG PARIAMAN</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PAYAKUMBUH') ? 'selected' : '' ?>>CABANG PAYAKUMBUH</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PEKANBARU') ? 'selected' : '' ?>>CABANG PEKANBARU</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG PULAU PUNJUNG') ? 'selected' : '' ?>>CABANG PULAU PUNJUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SAWAHLUNTO') ? 'selected' : '' ?>>CABANG SAWAHLUNTO</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SIJUNJUNG') ? 'selected' : '' ?>>CABANG SIJUNJUNG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SYARIAH PAYAKUMBUH') ? 'selected' : '' ?>>CABANG SYARIAH PAYAKUMBUH</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG SYARIAH SOLOK') ? 'selected' : '' ?>>CABANG SYARIAH SOLOK</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG TAPAN') ? 'selected' : '' ?>>CABANG TAPAN</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CABANG TAPUS') ? 'selected' : '' ?>>CABANG TAPUS</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM AUR KUNING BUKITTINGGI') ? 'selected' : '' ?>>CAPEM AUR KUNING BUKITTINGGI</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM AIR HAJI') ? 'selected' : '' ?>>CAPEM AIR HAJI</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM BY PASS PADANG') ? 'selected' : '' ?>>CAPEM BY PASS PADANG</option>
                                                <option <?php echo ($row['cabang_pembantu'] == 'CAPEM BAWAN') ? 'selected' : '' ?>>CAPEM BAWAN</option>
                                            </select>
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
                                        $kode_marketing = $_SESSION['user_name'];
                                        $sql2 = "SELECT * FROM temp_form2 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
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
                                            <h4 class="card-title">Data Marketing</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        $kode_marketing = $_SESSION['user_name'];
                                        $sql3 = "SELECT * FROM temp_form3 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result3 = $conn->query($sql3);
                                        if ($result3->num_rows > 0) {
                                            $row = $result3->fetch_assoc();
                                        } else {
                                            echo "No data found.";
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput1">Nama Marketing</label>
                                            <input name="nama_debitur" type="text" class="form-control" id="formGroupExampleInput1" value="<?php echo $row['nama_debitur'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['tempat_lahir'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput3">Tanggal Lahir</label><br>
                                            <input id="formGroupExampleInput3" name="tanggal_lahir" type="date"  value="<?php echo $row['tanggal_lahir'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput4">NIK Debitur</label>
                                            <input name="nik_debitur" type="number" class="form-control" id="formGroupExampleInput4" value="<?php echo $row['nik_debitur'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput5">NIP Debitur</label>
                                            <input name="nip_debitur" type="number" class="form-control" id="formGroupExampleInput5" value="<?php echo $row['nip_debitur'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput6">Nomor Pensiun</label>
                                            <input name="nomor_pensiun" type="number" class="form-control" id="formGroupExampleInput6" value="<?php echo $row['nomor_pensiun'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput7">Alamat Rumah</label>
                                            <input name="alamat_rumah" type="text" class="form-control" id="formGroupExampleInput7" value="<?php echo $row['alamat_rumah'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput8">Nama Ibu</label>
                                            <input name="nama_ibu" type="text" class="form-control" id="formGroupExampleInput8" value="<?php echo $row['nama_ibu'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput9">Nama Instansi</label>
                                            <input name="nama_instansi" type="text" class="form-control" id="formGroupExampleInput9" value="<?php echo $row['nama_instansi'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput10">Pangkat dan Golongan</label>
                                            <select class="form-control" name="pangkat_golongan" id="formGroupExampleInput10">
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV A Pembina') ? 'selected' : '' ?>>Golongan IV A Pembina</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV B Pembina Tingkat 1') ? 'selected' : '' ?>>Golongan IV B Pembina Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV C Pembina Utama Muda') ? 'selected' : '' ?>>Golongan IV C Pembina Utama Muda</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV D Pembina Utama Madya') ? 'selected' : '' ?>>Golongan IV D Pembina Utama Madya</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan IV E Pembina Utama') ? 'selected' : '' ?>>Golongan IV E Pembina Utama</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan III A Penata Muda') ? 'selected' : '' ?>>Golongan III A Penata Muda</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan III B Penata Muda Tingkat 1') ? 'selected' : '' ?>>Golongan III B Penata Muda Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan III C Penata') ? 'selected' : '' ?>>Golongan III C Penata</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan III D Penata Tingkat 1') ? 'selected' : '' ?>>Golongan III D Penata Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan II A Pengatur Muda') ? 'selected' : '' ?>>Golongan II A Pengatur Muda</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan II B Pengatur Muda Tingkat 1') ? 'selected' : '' ?>>Golongan II B Pengatur Muda Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan II C Pengatur') ? 'selected' : '' ?>>Golongan II C Pengatur</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan II D Pengatur Tingkat 1') ? 'selected' : '' ?>>Golongan II D Pengatur Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan I A Juru Muda') ? 'selected' : '' ?>>Golongan I A Juru Muda</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan I B Juru Muda Tingkat 1') ? 'selected' : '' ?>>Golongan I B Juru Muda Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan I C Juru') ? 'selected' : '' ?>>Golongan I C Juru</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Golongan I D Juru Tingkat 1') ? 'selected' : '' ?>>Golongan I D Juru Tingkat 1</option>
                                                <option <?php echo ($row['pangkat_golongan'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput14">Gaji Bulanan</label>
                                            <input id="formGroupExampleInput14" class="form-control" type="text" name="gaji_debitur" inputmode="numeric" oninput="handleInputChange(this);" value="<?php echo $row['gaji_debitur'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput11">Nomor Rekening</label>
                                            <input name="nomor_rekening" type="number" class="form-control" id="formGroupExampleInput11" value="<?php echo $row['nomor_rekening'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput12">Nomor NPWP</label>
                                            <input name="nomor_npwp" type="number" class="form-control" id="formGroupExampleInput12" value="<?php echo $row['nomor_npwp'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput13">Nomor Telepon</label>
                                            <input name="nomor_telepon" type="number" class="form-control" id="formGroupExampleInput13" value="<?php echo $row['nomor_telepon'] ?>">
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Data Kalkulasi</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        $kode_marketing = $_SESSION['user_name'];
                                        $sql4 = "SELECT * FROM temp_form4 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
                                        $result4 = $conn->query($sql4);
                                        if ($result4->num_rows > 0) {
                                            $row = $result4->fetch_assoc();
                                        } else echo "No data found.";
                                        echo $row['jenis_payroll'];
                                        ?>
                                        <div class="form-group">
                                            <div class="card-body">
                                                <label for="inlineRadio01">Jenis Payroll</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_payroll" <?php echo ($row['jenis_payroll'] == 'Bank Nagari') ? 'checked' : '' ?> id="inlineRadio01" value="Bank Nagari">
                                                    <label class="form-check-label" for="inlineRadio01">Bank Nagari</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_payroll" <?php echo ($row['jenis_payroll'] == 'Non Nagari') ? 'checked' : '' ?> id="inlineRadio02" value="Non Nagari">
                                                    <label class="form-check-label" for="inlineRadio02">Non Nagari</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>Jumlah Pinjaman: Rp <?php echo number_format($row['jumlah_pinjaman'], 0, ',', '.') ?></h5>
                                            <h5>Waktu Pinjaman : <?php echo $row['waktu_pinjaman'] ?> Tahun</h5>
                                            <h5>Umur Waktu Pinjaman : <?php echo $row['umur_pengajuan'] ?> Tahun</h5>
                                            <h5>Suku Bunga : <?php echo $row['suku_bunga'] ?> %</h5>
                                            <h5>Total Premi: Rp <?php echo number_format($row['total_premi'], 0, ',', '.') ?></h5>
                                        </div>
                                    </div>
                                    <div class="card-header d-sm-flex justify-content-between align-items-center py-3">
                                        <div class="card-heading mb-3 mb-sm-0">
                                            <h4 class="card-title">Dokumen Check List dan Tanda Terima Dokumen</h4>
                                        </div>
                                    </div>
                                    <div class="card-body scrollbar scroll_dark" style="max-height: 420px;">
                                    <?php
                                        $kode_marketing = $_SESSION['user_name'];
                                        $sql6 = "SELECT * FROM temp_form6 WHERE kode_marketing = '$kode_marketing' ORDER BY id_pengajuan DESC LIMIT 1";
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
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_1" <?php echo ($row['kredit_file_1'] == 'Ada') ? 'checked' : '' ?> id="inlineRadio11" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio11">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_1" <?php echo ($row['kredit_file_1'] == 'Tidak') ? 'checked' : '' ?> id="inlineRadio12" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio12">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_1" type="text" class="form-control" value="<?php echo $row['catatan_file_1'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Asli SK Pengangkatan sebagai PNS (100%) / SK Pensiun</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_2" <?php echo ($row['kredit_file_2'] == 'Ada') ? 'checked' : '' ?> id="inlineRadio21" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio22">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_2" <?php echo ($row['kredit_file_2'] == 'Tidak') ? 'checked' : '' ?> id="inlineRadio22" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio22">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_2" type="text" class="form-control" value="<?php echo $row['catatan_file_2'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Asli SK Pangkat Terakhir</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_3" <?php echo ($row['kredit_file_3'] == 'Ada') ? 'checked' : '' ?> id="inlineRadio31" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio31">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_3" <?php echo ($row['kredit_file_3'] == 'Tidak') ? 'checked' : '' ?> id="inlineRadio32" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio32">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_3" type="text" class="form-control" value="<?php echo $row['catatan_file_3'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Slip Gaji Bulan Terakhir</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_4"
                                                                    <?php echo ($row['kredit_file_4'] == 'Ada') ? 'checked' : '' ?>
                                                                    id="inlineRadio41" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio41">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_4"
                                                                    <?php echo ($row['kredit_file_4'] == 'Tidak') ? 'checked' : '' ?>
                                                                    id="inlineRadio42" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio42">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_4" type="text" class="form-control" value="<?php echo $row['catatan_file_4'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Copy Kartu Tanda Penduduk (KTP)</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_5" id="inlineRadio51" value="Ada"
                                                                    <?php echo ($row['kredit_file_5'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio51">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_5" id="inlineRadio52" value="Tidak"
                                                                    <?php echo ($row['kredit_file_5'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio52">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_5" type="text" class="form-control" value="<?php echo $row['catatan_file_5'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Copy Kartu Keluarga</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_6" id="inlineRadio61" value="Ada"
                                                                    <?php echo ($row['kredit_file_6'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio61">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_6" id="inlineRadio62" value="Tidak"
                                                                    <?php echo ($row['kredit_file_6'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio62">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_6" type="text" class="form-control" value="<?php echo $row['catatan_file_6'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Asli Bukti Kepemilikan Agunan bagi kredit yang disyaratkan<br>menggunakan agunan tambahan</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_7" id="inlineRadio71" value="Ada"
                                                                    <?php echo ($row['kredit_file_7'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio71">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_7" id="inlineRadio72" value="Tidak"
                                                                    <?php echo ($row['kredit_file_7'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio72">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_7" type="text" class="form-control" value="<?php echo $row['catatan_file_7'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Copy Kartu Taspen</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_8" id="inlineRadio81" value="Ada"
                                                                    <?php echo ($row['kredit_file_8'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio81">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_8" id="inlineRadio82" value="Tidak"
                                                                    <?php echo ($row['kredit_file_8'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio82">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_8" type="text" class="form-control" value="<?php echo $row['catatan_file_8'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Copy NPWP untuk jumlah permohonan kredit yang wajib<br>dilengkapi NPWP sesuai aturan yang berlaku</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_9" id="inlineRadio91" value="Ada"
                                                                    <?php echo ($row['kredit_file_9'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio91">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_9" id="inlineRadio92" value="Tidak"
                                                                    <?php echo ($row['kredit_file_9'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio92">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_9" type="text" class="form-control" value="<?php echo $row['catatan_file_9'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Menyerahkan Surat Kuasa Memotong Gaji<br>diatas materi secukupnya</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_10" id="inlineRadio101" value="Ada"
                                                                    <?php echo ($row['kredit_file_10'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio101">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_10" id="inlineRadio102" value="Tidak"
                                                                    <?php echo ($row['kredit_file_10'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio102">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_10" type="text" class="form-control" value="<?php echo $row['catatan_file_10'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Menyerahkan Surat Kuasa Pendebetan<br>Rekening diatas material secukupnya</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_11" id="inlineRadio111" value="Ada"
                                                                    <?php echo ($row['kredit_file_11'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio111">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_11" id="inlineRadio112" value="Tidak"
                                                                    <?php echo ($row['kredit_file_11'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio112">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_11" type="text" class="form-control" value="<?php echo $row['catatan_file_11'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Membuat Surat Pernyataan dan<br>Kuasa diatas materai secukupnya yang memuat :</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Pernyataan dari debitur tidak akan memindahkan<br>gaji/mengganti rekening gaji debitur dari PT Bank Nagari<br>walaupun debitur pindah tugas ke daerah lain sampai kredit<br>dinyatakan Lunas Oleh PT Bank Nagari</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_12" id="inlineRadio121" value="Ada"
                                                                    <?php echo ($row['kredit_file_12'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio121">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_12" id="inlineRadio122" value="Tidak"
                                                                    <?php echo ($row['kredit_file_12'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio122">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_12" type="text" class="form-control" value="<?php echo $row['catatan_file_12'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>Menyetujui penggunaan Hak Substitusi dari Bendahara gaji lama kepada<br>bendahara gaji yang baru untuk memotong gajinya dan meneruskannya<br>/mengirimkan/transfer ke Bank Nagari untuk angsuran kreditnya</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_13" id="inlineRadio131" value="Ada"
                                                                    <?php echo ($row['kredit_file_13'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio131">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_13" id="inlineRadio132" value="Tidak"
                                                                    <?php echo ($row['kredit_file_13'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio132">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_13" type="text" class="form-control" value="<?php echo $row['catatan_file_13'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>Memberikan kuasa kepada Bank Nagari untuk<br>melakukan penagihan kepada lembaga/instansi tempat debitur<br>bekerja apabila debitur pindah dinas ke daerah lain</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_14" id="inlineRadio141" value="Ada"
                                                                    <?php echo ($row['kredit_file_14'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio141">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_14" id="inlineRadio142" value="Tidak"
                                                                    <?php echo ($row['kredit_file_14'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio142">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_14" type="text" class="form-control" value="<?php echo $row['catatan_file_14'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>Menyetujui pendampingan pengurusan dan<br>pengarahan yang dilakukan oleh staf PT<br>Bank Nagari agar uang pensiun Debitur dibayarkan melalui PT Bank Nagari</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_15" id="inlineRadio151" value="Ada"
                                                                    <?php echo ($row['kredit_file_15'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio151">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_15" id="inlineRadio152" value="Tidak"
                                                                    <?php echo ($row['kredit_file_15'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio152">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_15" type="text" class="form-control" value="<?php echo $row['catatan_file_15'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>Untuk debitur Selang 2 (dua) Waktu wajib dilengkapi dengan I-Deb SLIK</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_16" id="inlineRadio161" value="Ada"
                                                                    <?php echo ($row['kredit_file_16'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio161">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_16" id="inlineRadio162" value="Tidak"
                                                                    <?php echo ($row['kredit_file_16'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio162">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_16" type="text" class="form-control" value="<?php echo $row['catatan_file_16'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Kwitansi/bukti lunas/keterangan lunas dari<br>bank lain tersebut setelah kredit di bank lain dilunasi</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_17" id="inlineRadio171" value="Ada"
                                                                    <?php echo ($row['kredit_file_17'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio171">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_17" id="inlineRadio172" value="Tidak"
                                                                    <?php echo ($row['kredit_file_17'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio172">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_17" type="text" class="form-control" value="<?php echo $row['catatan_file_17'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>Form Fronting Agent ditandatangi oleh Calon Debitur dan Bank</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_18" id="inlineRadio181" value="Ada"
                                                                    <?php echo ($row['kredit_file_18'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio181">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_18" id="inlineRadio182" value="Tidak"
                                                                    <?php echo ($row['kredit_file_18'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio182">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_18" type="text" class="form-control" value="<?php echo $row['catatan_file_18'] ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>Format Form Fronting Agent sebagaimana diatur dalam Lampiran</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_19" id="inlineRadio191" value="Ada"
                                                                    <?php echo ($row['kredit_file_19'] == 'Ada') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio191">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_19" id="inlineRadio192" value="Tidak"
                                                                    <?php echo ($row['kredit_file_19'] == 'Tidak') ? 'checked' : '' ?>>
                                                                    <label class="form-check-label" for="inlineRadio192">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input name="catatan_file_19" type="text" class="form-control" value="<?php echo $row['catatan_file_19'] ?>">
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