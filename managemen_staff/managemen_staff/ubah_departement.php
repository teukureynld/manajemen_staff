<?php
require_once("proses/koneksi.php");
require_once("layout/header.php");
require_once("layout/sidebar.php");
$id = $_GET['id'];
$query = mysqli_query($konek,"SELECT * FROM departement WHERE id_departement = '$id'");
$getdata = mysqli_fetch_array($query);
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
      <div class="section-header">
          <h1>Ubah Departement</h1>
      </div>
      <div class="row">
          <div class="col-12 col-md-8 col-lg-8">
              <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputNIPD3" class="col-sm-3 col-form-label">Nama Departement</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_departement" placeholder="Contoh : Administrasi" value="<?= $getdata['nama_departement']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNISN3" class="col-sm-3 col-form-label">Gaji</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lokasi" placeholder="Contoh : Kampus B" value="<?= $getdata['lokasi']; ?>">
                            </div>
                        </div>                                
                    </div>  
                    <div class="card-footer">       
                        <button class="btn btn-primary float-right" onclick="ubahDataDepartement(<?= $id; ?>)">Ubah</button>
                        <a href="departement.php">
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