<?php 
require_once("proses/koneksi.php");
?>
<table class="table table-striped">
    <thead>                                 
        <tr>
            <th>#</th>
            <th>Nama Posisi</th>
            <th>Deskripsi</th>
            <th>Gaji</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>                                 
        <?php 
              $query = mysqli_query($konek, "SELECT * FROM posisi");
              $no = 0;
              if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                $no++;
          ?>
          <tr>
              <td><?= $no; ?></td>
              <td><?= $data['nama_posisi']; ?></td>
              <td><?= $data['deskripsi']; ?></td>
              <td><?= $data['gaji']; ?></td>
              <td>
                  <a class="btn btn-warning" href="ubah_posisi.php?id=<?= $data['id_posisi']; ?>">Ubah</a>
                  <a class="btn btn-danger" onclick="hapusDataPosisi(<?= $data['id_posisi']; ?>)">Hapus</a>
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