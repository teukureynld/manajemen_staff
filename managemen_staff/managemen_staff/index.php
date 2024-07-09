<?php 
require_once("proses/koneksi.php");
require_once("layout/header.php");
require_once("layout/sidebar.php");
$posisi = mysqli_query($konek,"SELECT COUNT(*) as jumlah FROM posisi");
$getposisi = mysqli_fetch_array($posisi);
$departement = mysqli_query($konek,"SELECT COUNT(*) as jumlah FROM departement");
$getdepartement = mysqli_fetch_array($departement);
$pegawai = mysqli_query($konek,"SELECT COUNT(*) as jumlah FROM pegawai");
$getpegawai = mysqli_fetch_array($pegawai);
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
              <i class="fas fa-envelope"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Data Posisi</h4>
            </div>
            <div class="card-body">
              <?= $getposisi['jumlah']; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
          <i class="fas fa-tasks"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Data Departement</h4>
            </div>
            <div class="card-body">
              <?= $getdepartement['jumlah']; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
          <i class="fas fa-stamp"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Data Pegawai</h4>
            </div>
            <div class="card-body">
            <?= $getpegawai['jumlah']; ?>
            </div>
          </div>
        </div>
      </div>                 
    </div>
  </section>
</div>

<?php require_once("layout/footer.php"); ?>
      