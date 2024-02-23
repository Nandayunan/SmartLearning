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

 
 
 <!-- Page Heading -->
 <h1 class="mb-3 text-gray-800">Rekap Absensi</h1>
 <a href="cetakabsensi.php?kelas=<?=$id_kelas;?>" class="btn btn-danger mb-4 btn-icon-split">
 <span class="icon text-gray-100">
     <i class="fas fa-file"></i>
 </span>
 <span class="text">Download PDF</span>
 </a>
 <!-- DataTales -->
<div class="card shadow mb-4">
 <div class="card-header py-3">
   <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa </h6>
 </div>
 <div class="card-body">             
   <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
         <tr align="center">
           <th>No</th>
           <th>Profil</th>
           <th>NPM</th>
           <th>Nama</th>
           <th>Aksi</th>
           <?php	
             while ($data=mysqli_fetch_array($query)){?>
                  <th><?=$data[0].' '?><br><a href="hapusabsensi.php?id=<?=$id_kelas?>&jadwal=<?=$data[0]?>">(Hapus)</a></th>  
             <?php }?>
         </tr>
       </thead>
       <tbody align="center">
         <?php
         $id_kelas=$_GET['kelas'];
         $sql="SELECT * FROM mahasiswa WHERE id_kelas='$id_kelas'";
         $query=mysqli_query($koneksi,$sql);
         $i = 1;
         while ($data=mysqli_fetch_array($query)){
             $npm=$data["npm"];
             $nama=$data["nama"];
         ?>
         <tr>
           <td><?=$i++;?></td>
           <td><img class="img-profile rounded-circle" style="width:50px;height:50px;" src="img/<?= $data["foto"];?>"></td>
           <td><?= $npm;?></td>
           <td><?= $nama;?></td>
           <td> <a href="detaileditabsensi.php?kelas=<?=$id_kelas;?>&npm=<?=$npm;?>" class="btn btn-warning btn-icon-split btn-sm">
                     <span class="icon text-white-50">
                     <i class="fas fa-edit"></i>
                     </span>
                     <span class="text">Ubah</span>
                 </a></td>
                 <?php
                 $sqla="SELECT * FROM absensi WHERE npm='$npm'";
                 $querya=mysqli_query($koneksi,$sqla);
                 while($data2=mysqli_fetch_array($querya)){
                 ?>			           
                     <td><?php echo $data2["keterangan"]; ?></td>
                 <?php } ?>
                 </tr>
         <?php } ?>
         </tbody>
     </table>
 </div>    
 </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
 <span>Copyright &copy; Smart Learning 2023</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->