<?php
require_once("proses/koneksi.php");
require_once("layout/header.php");
require_once("layout/sidebar.php");
$id = $_GET['id'];
$query = mysqli_query($konek,"SELECT * FROM posisi WHERE id_posisi = '$id'");
$getdata = mysqli_fetch_array($query);
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
      <div class="section-header">
          <h1>Ubah Posisi</h1>
      </div>
      <div class="row">
          <div class="col-12 col-md-8 col-lg-8">
              <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputNIPD3" class="col-sm-3 col-form-label">Nama Posisi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_posisi" placeholder="Contoh : Staff TU" value="<?= $getdata['nama_posisi']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNISN3" class="col-sm-3 col-form-label">Gaji</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="gaji" placeholder="Contoh : 4000000" value="<?= $getdata['gaji']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAlamat3" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                              <textarea type="text" class="form-control" id="deskripsi" placeholder="Contoh : Memanagemen semua administrasi fakultas teknik"><?= $getdata['deskripsi']; ?></textarea>
                            </div>
                        </div>                                
                    </div>  
                    <div class="card-footer">       
                        <button class="btn btn-primary float-right" onclick="ubahDataPosisi(<?= $id; ?>)">Ubah</button>
                        <a href="posisi.php">
                            <button type="button" class="btn btn-success mr-2 mb-4 float-right">
                                Kembali
                            </button>
                        </a>
                    </div>
              </div>
          </div>
    </div>
  </section>
</div>
<?php require_once("layout/footer.php"); ?>