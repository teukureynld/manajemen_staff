<?php
require_once("proses/koneksi.php");
require_once("layout/header.php");
require_once("layout/sidebar.php");
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Departement</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                    <div class="card-header justify-content-end">
                        <a href="tambah_departement.php" class="btn btn-primary">Tambah Departement</a>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <div id="hasil_input_departement">

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once("layout/footer.php"); ?>