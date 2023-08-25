<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['submit'])){
    $kode_marketing = $_SESSION['user_name'];
    $kredit_file_1 = $_POST['kredit_file_1'];
    $kredit_file_2 = $_POST['kredit_file_2'];
    $kredit_file_3 = $_POST['kredit_file_3'];
    $kredit_file_4 = $_POST['kredit_file_4'];
    $kredit_file_5 = $_POST['kredit_file_5'];
    $kredit_file_6 = $_POST['kredit_file_6'];
    $kredit_file_7 = $_POST['kredit_file_7'];
    $kredit_file_8 = $_POST['kredit_file_8'];
    $kredit_file_9 = $_POST['kredit_file_9'];
    $kredit_file_10 = $_POST['kredit_file_10'];
    $kredit_file_11 = $_POST['kredit_file_11'];
    $kredit_file_12 = $_POST['kredit_file_12'];
    $kredit_file_13 = $_POST['kredit_file_13'];
    $kredit_file_14 = $_POST['kredit_file_14'];
    $kredit_file_15 = $_POST['kredit_file_15'];
    $kredit_file_16 = $_POST['kredit_file_16'];
    $kredit_file_17 = $_POST['kredit_file_17'];
    $kredit_file_18 = $_POST['kredit_file_18'];
    $kredit_file_19 = $_POST['kredit_file_19'];
    

    $insert = "INSERT INTO temp_form6(kredit_file_1, kredit_file_2, kredit_file_3, kredit_file_4, kredit_file_5, kredit_file_6, kredit_file_7, kredit_file_8, kredit_file_9, kredit_file_10, kredit_file_11, kredit_file_12, kredit_file_13, kredit_file_14, kredit_file_15, kredit_file_16, kredit_file_17, kredit_file_18, kredit_file_19, kode_marketing) 
    VALUES('$kredit_file_1','$kredit_file_2','$kredit_file_3','$kredit_file_4','$kredit_file_5','$kredit_file_6','$kredit_file_7','$kredit_file_8','$kredit_file_9','$kredit_file_10','$kredit_file_11','$kredit_file_12','$kredit_file_13','$kredit_file_14','$kredit_file_15','$kredit_file_16','$kredit_file_17','$kredit_file_18','$kredit_file_19','$kode_marketing')";
    mysqli_query($conn, $insert);
    
    header('Location: prapensiun_kredit_final.php');
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
                                    <h1>Syarat dan Ketentuan</h1>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->
                    <!-- start Tabs contant -->
                    <div class="row tabs-contant">
                        <div class="col-xxl-12 m-b-30">
                            <div class="card card-statistics h-100 mb-0">
                                <form action="" method="post">
                                    <div class="card-header d-sm-flex justify-content-between align-items-center py-3">
                                        <div class="card-heading mb-3 mb-sm-0">
                                            <h4 class="card-title">Dokumen Check List dan Tanda Terima Dokumen</h4>
                                        </div>
                                    </div>
                                    <div class="card-body scrollbar scroll_dark" style="max-height: 420px;">
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
                                                                    <input class="form-check-input" type="radio" name="kredit_file_1" id="inlineRadio11" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio11">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_1" id="inlineRadio12" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio12">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Asli SK Pengangkatan sebagai PNS (100%) / SK Pensiun</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_2" id="inlineRadio21" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio21">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_2" id="inlineRadio22" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio22">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Asli SK Pangkat Terakhir</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_3" id="inlineRadio31" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio31">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_3" id="inlineRadio32" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio32">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Slip Gaji Bulan Terakhir</td>
                                                        <td>
                                                            <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_4" id="inlineRadio41" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio41">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="kredit_file_4" id="inlineRadio42" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio42">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_5" id="inlineRadio51" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio51">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_5" id="inlineRadio52" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio52">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_6" id="inlineRadio61" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio61">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_6" id="inlineRadio62" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio62">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_7" id="inlineRadio71" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio71">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_7" id="inlineRadio72" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio72">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_8" id="inlineRadio81" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio81">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_8" id="inlineRadio82" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio82">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_9" id="inlineRadio91" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio91">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_9" id="inlineRadio92" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio92">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_10" id="inlineRadio101" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio101">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_10" id="inlineRadio102" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio102">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_11" id="inlineRadio111" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio111">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_11" id="inlineRadio112" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio112">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_12" id="inlineRadio121" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio121">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_12" id="inlineRadio122" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio122">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_13" id="inlineRadio131" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio131">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_13" id="inlineRadio132" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio132">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_14" id="inlineRadio141" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio141">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_14" id="inlineRadio142" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio142">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_15" id="inlineRadio151" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio151">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_15" id="inlineRadio152" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio152">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_16" id="inlineRadio161" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio161">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_16" id="inlineRadio162" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio162">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_17" id="inlineRadio171" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio171">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_17" id="inlineRadio172" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio172">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_18" id="inlineRadio181" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio181">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_18" id="inlineRadio182" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio182">Tidak</label>
                                                                </div>
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
                                                                    name="kredit_file_19" id="inlineRadio191" value="Ada">
                                                                    <label class="form-check-label" for="inlineRadio191">Ada</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                    name="kredit_file_19" id="inlineRadio192" value="Tidak">
                                                                    <label class="form-check-label" for="inlineRadio192">Tidak</label>
                                                                </div>
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