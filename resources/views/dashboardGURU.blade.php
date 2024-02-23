<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>SMART LEARNING !.</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body >
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
      <!-- Navbar -->
      @include('partials.header-brand')
      @include('partials.header-navigation')
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <!-- <div class="page-pretitle">
                  Info
                </div>
                <h2 class="page-title">
                  User
                </h2>
              </div> -->

<!-- Lihat Mahasiswa  -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <div class="row">
<div class="col-xl-3 col-md-6 mb-4 ">
    <div class="card border-left-success shadow h-100 py-2">
       <a href="lihatmhs.php" style="text-decoration:none;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Siswa <br>yang diajarkan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_siswa?> (Siswa)</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-user fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
  <!-- Akhir Lihat Mahasiswa -->

  <!-- Tugas -->
  <div class="col-xl-3 col-md-6 mb-4 ">
    <div class="card border-left-primary shadow h-100 py-2">
    <a href="lihatkelas.php" style="text-decoration:none;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelas <br> yang diajarkan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_kelas?> (Kelas)</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
  <!-- Akhir Tugas -->

  <!-- Rekap Absensi -->
  <div class="col-xl-3 col-md-6 mb-4 ">
    <div class="card border-left-danger shadow h-100 py-2">
    <a href="lihatmatkul.php" style="text-decoration:none;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mata Pelajaran <br> Yang diajarkan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$jumlah_matkul?> (Mapel)</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-book fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
  <!-- Akhir Rekap Absensi -->
  <!-- Rekap Absensi -->
<div class="col-xl-3 col-md-6 mb-4 ">
    <div class="card border-left-warning shadow h-100 py-2">
    <a href="#" style="text-decoration:none;" data-toggle="modal" data-target="#comingModal">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rekap <br> absen</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">(Recap)</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-book fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
  <!-- Akhir Rekap Absensi -->
  
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
  <span>Copyright &copy; Smart learning 2023</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>


