<?php 
require_once("proses/koneksi.php");
?>
<table class="table table-striped">
    <thead>                                 
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Tgl Lahir</th>
            <th>Jenis Kelamin</th>
            <th>No. HP</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>                                 
        <?php 
              $query = mysqli_query($konek, "SELECT * FROM pegawai");
              $no = 0;
              if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                $no++;
          ?>
          <tr>
              <td><?= $no; ?></td>
              <td><?= $data['nama_lengkap']; ?></td>
              <td><?= $data['tgl_lahir']; ?></td>
              <td><?= $data['jenis_kelamin']; ?></td>
              <td><?= $data['no_hp']; ?></td>
              <td>
                  <a class="btn btn-warning" href="ubah_pegawai.php?id=<?= $data['id_pegawai']; ?>">Ubah</a>
                  <a class="btn btn-danger" onclick="hapusDataPegawai(<?= $data['id_pegawai']; ?>)">Hapus</a>
              </td>
          </tr>
        <?php   } }else { ?>
            <tr>
                <td colspan="6" style="text-align: center;">Tidak ada data yang di tampilkan</td>
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
            <th></th>
        </tr>
    </tfoot>
</table>    