<?php
require_once("proses/koneksi.php");
require_once("layout/header.php");
require_once("layout/sidebar.php");
$id = $_GET['id'];
$query = mysqli_query($konek,"SELECT * FROM pegawai WHERE id_pegawai = '$id'");
$getdata = mysqli_fetch_array($query);
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
      <div class="section-header">
          <h1>Ubah Pegawai</h1>
      </div>
      <div class="row">
          <div class="col-12 col-md-8 col-lg-8">
              <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputNIPD3" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_lengkap" placeholder="Contoh : Teuku Reynaldi" value="<?= $getdata['nama_lengkap']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNISN3" class="col-sm-3 col-form-label">Tgl Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tgl_lahir" value="<?= $getdata['tgl_lahir']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki" <?= ($getdata['jenis_kelamin'] == 'Laki - Laki') ? 'selected' : ''; ?>>Laki - Laki</option>
                                  <option value="Perempuan" <?= ($getdata['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNIPD3" class="col-sm-3 col-form-label">No. HP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_hp" placeholder="Contoh : 088812345678" value="<?= $getdata['no_hp']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAlamat3" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                              <textarea type="text" class="form-control" id="alamat" placeholder="Contoh : Ciracas, Jakarta Timur"><?= $getdata['alamat']; ?></textarea>
                            </div>
                        </div>                                
                    </div>  
                    <div class="card-footer">       
                        <button class="btn btn-primary float-right" onclick="ubahDataPegawai(<?= $id; ?>)">Ubah</button>
                        <a href="pegawai.php">
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