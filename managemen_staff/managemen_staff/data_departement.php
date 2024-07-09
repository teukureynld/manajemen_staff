<?php 
require_once("proses/koneksi.php");
?>
<table class="table table-striped" style="width:100%">
    <thead>                                 
        <tr>
            <th>#</th>
            <th>Nama Departement</th>
            <th>Lokasi</th>
            <th></th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>                                 
        <?php 
              $query = mysqli_query($konek, "SELECT * FROM departement");
              $no = 0;
              if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                $no++;
          ?>
          <tr>
              <td><?= $no; ?></td>
              <td><?= $data['nama_departement']; ?></td>
              <td><?= $data['lokasi']; ?></td>
              <td></td>
              <td>
                  <a class="btn btn-warning" href="ubah_departement.php?id=<?= $data['id_departement']; ?>">Ubah</a>
                  <a class="btn btn-danger" onclick="hapusDataDepartement(<?= $data['id_departement']; ?>)">Hapus</a>
              </td>
          </tr>
        <?php   } }else { ?>
            <tr>
                <td colspan="5" style="text-align: center;">Tidak ada data yang di tampilkan</td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>                                 
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </tfoot>
</table>    