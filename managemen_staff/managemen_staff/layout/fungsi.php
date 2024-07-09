<script>
    $(document).ready(function () {
        data_posisi();
        data_departement();
        data_pegawai();
    });

    function data_posisi() {
        $.ajax({
          url: 'data_posisi.php',
          type: 'get',
          success: function(data) {
            $('#hasil_input_posisi').html(data);
          }
        });
    }

    function hapusDataPosisi(id) {
        var conf = confirm('Yakin data ini akan dihapus ??');
        if(!conf) { return false; } else {
            var hapus = 'aksi=HapusPosisi&id=' + id;
            $.ajax({
            url: './proses/proses-ajax.php',
            type: 'POST',
            data: hapus,
            dataType: 'text',
            success: function(respon) {
                var result = JSON.parse(respon);
                if (result.success != true) {
                  alert(result.error);
                } else {
                  alert("Berhasil Hapus Data!!!");
                  data_posisi();
                }
            }
            });
        }
    }

    function tambahDataPosisi() {
        var nama_posisi = $("#nama_posisi").val();
        var gaji = $("#gaji").val();
        var deskripsi = $("#deskripsi").val();
        var tambah = new FormData();
        tambah.append('aksi', "TambahPosisi");
        tambah.append('nama_posisi', nama_posisi);
        tambah.append('gaji',gaji);
        tambah.append('deskripsi',deskripsi);
        if (nama_posisi !== '' || gaji !=='' || deskripsi !=='') {
            $.ajax({
                url: './proses/proses-ajax.php',
                type: 'POST',
                contentType: false,
                data: tambah,
                processData: false,
                cache: false,
                success:function(respon){
                    var result = JSON.parse(respon);
                    if (result.success != true) {
                        alert("Gagal Tambah Data karena : "+result.error);
                    } else {
                        alert("Berhasil Tambah Data!!!");
                        window.location.href = "./posisi.php";
                    }
                }
            });
        } else {
            alert('Tidak boleh ada data yang kosong!!!');            
        }
    }

    function ubahDataPosisi(id) {
        var nama_posisi = $("#nama_posisi").val();
        var gaji = $("#gaji").val();
        var deskripsi = $("#deskripsi").val();
        var ubah = new FormData();
        ubah.append('aksi', "UbahPosisi");
        ubah.append('nama_posisi', nama_posisi);
        ubah.append('gaji',gaji);
        ubah.append('deskripsi',deskripsi);
        ubah.append('id',id);
        if (nama_posisi !== '' || gaji !=='' || deskripsi !=='') {
            $.ajax({
                url: './proses/proses-ajax.php',
                type: 'POST',
                contentType: false,
                data: ubah,
                processData: false,
                cache: false,
                success:function(respon){
                    var result = JSON.parse(respon);
                    if (result.success != true) {
                        alert("Gagal Ubah Data karena : "+result.error);
                    } else {
                        alert("Berhasil Ubah Data!!!");
                        window.location.href = "./posisi.php";
                    }
                }
            });
        } else {
            alert('Tidak boleh ada data yang kosong!!!');            
        }
    }

    function data_departement() {
        $.ajax({
          url: 'data_departement.php',
          type: 'get',
          success: function(data) {
            $('#hasil_input_departement').html(data);
          }
        });
    }

    function hapusDataDepartement(id) {
        var conf = confirm('Yakin data ini akan dihapus ??');
        if(!conf) { return false; } else {
            var hapus = 'aksi=HapusDepartement&id=' + id;
            $.ajax({
            url: './proses/proses-ajax.php',
            type: 'POST',
            data: hapus,
            dataType: 'text',
            success: function(respon) {
                var result = JSON.parse(respon);
                if (result.success != true) {
                  alert(result.error);
                } else {
                    alert("Berhasil Hapus Data!!!");
                  data_departement();
                }
            }
            });
        }
    }

    function tambahDataDepartement() {
        var nama_departement = $("#nama_departement").val();
        var lokasi = $("#lokasi").val();
        var tambah = new FormData();
        tambah.append('aksi', "TambahDepartement");
        tambah.append('nama_departement', nama_departement);
        tambah.append('lokasi',lokasi);
        if (nama_departement !== '' || lokasi !=='') {
            $.ajax({
                url: './proses/proses-ajax.php',
                type: 'POST',
                contentType: false,
                data: tambah,
                processData: false,
                cache: false,
                success:function(respon){
                    var result = JSON.parse(respon);
                    if (result.success != true) {
                        alert("Gagal Tambah Data karena : "+result.error);
                    } else {
                        alert("Berhasil Tambah Data!!!");
                        window.location.href = "./departement.php";
                    }
                }
            });
        } else {
            alert('Tidak boleh ada data yang kosong!!!');            
        }
    }

    function ubahDataDepartement(id) {
        var nama_departement = $("#nama_departement").val();
        var lokasi = $("#lokasi").val();
        var ubah = new FormData();
        ubah.append('aksi', "UbahDepartement");
        ubah.append('nama_departement', nama_departement);
        ubah.append('lokasi',lokasi);
        ubah.append('id',id);
        if (nama_departement !== '' || lokasi !=='') {
            $.ajax({
                url: './proses/proses-ajax.php',
                type: 'POST',
                contentType: false,
                data: ubah,
                processData: false,
                cache: false,
                success:function(respon){
                    var result = JSON.parse(respon);
                    if (result.success != true) {
                        alert("Gagal Ubah Data karena : "+result.error);
                    } else {
                        alert("Berhasil Ubah Data!!!");
                        window.location.href = "./departement.php";
                    }
                }
            });
        } else {
            alert('Tidak boleh ada data yang kosong!!!');            
        }
    }

    function data_pegawai() {
        $.ajax({
          url: 'data_pegawai.php',
          type: 'get',
          success: function(data) {
            $('#hasil_input_pegawai').html(data);
          }
        });
    }

    function hapusDataPegawai(id) {
        var conf = confirm('Yakin data ini akan dihapus ??');
        if(!conf) { return false; } else {
            var hapus = 'aksi=HapusPegawai&id=' + id;
            $.ajax({
            url: './proses/proses-ajax.php',
            type: 'POST',
            data: hapus,
            dataType: 'text',
            success: function(respon) {
                var result = JSON.parse(respon);
                if (result.success != true) {
                  alert(result.error);
                } else {
                    alert("Berhasil Hapus Data!!!");
                  data_pegawai();
                }
            }
            });
        }
    }

    function tambahDataPegawai() {
        var nama_lengkap = $("#nama_lengkap").val();
        var tgl_lahir = $("#tgl_lahir").val();
        var jenis_kelamin = $("#jenis_kelamin").val();
        var no_hp = $("#no_hp").val();
        var alamat = $("#alamat").val();
        var tambah = new FormData();
        tambah.append('aksi', "TambahPegawai");
        tambah.append('nama_lengkap', nama_lengkap);
        tambah.append('tgl_lahir',tgl_lahir);
        tambah.append('jenis_kelamin', jenis_kelamin);
        tambah.append('no_hp',no_hp);
        tambah.append('alamat',alamat);
        if (nama_lengkap !== '' || tgl_lahir !=='' || jenis_kelamin !== '' || no_hp !=='' || alamat !=='') {
            $.ajax({
                url: './proses/proses-ajax.php',
                type: 'POST',
                contentType: false,
                data: tambah,
                processData: false,
                cache: false,
                success:function(respon){
                    var result = JSON.parse(respon);
                    if (result.success != true) {
                        alert("Gagal Tambah Data karena : "+result.error);
                    } else {
                        alert("Berhasil Tambah Data!!!");
                        window.location.href = "./pegawai.php";
                    }
                }
            });
        } else {
            alert('Tidak boleh ada data yang kosong!!!');            
        }
    }

    function ubahDataPegawai(id) {
        var nama_lengkap = $("#nama_lengkap").val();
        var tgl_lahir = $("#tgl_lahir").val();
        var jenis_kelamin = $("#jenis_kelamin").val();
        var no_hp = $("#no_hp").val();
        var alamat = $("#alamat").val();
        var ubah = new FormData();
        ubah.append('aksi', "UbahPegawai");
        ubah.append('nama_lengkap', nama_lengkap);
        ubah.append('tgl_lahir',tgl_lahir);
        ubah.append('jenis_kelamin', jenis_kelamin);
        ubah.append('no_hp',no_hp);
        ubah.append('alamat',alamat);
        ubah.append('id',id);
        if (nama_lengkap !== '' || tgl_lahir !=='' || jenis_kelamin !== '' || no_hp !=='' || alamat !=='') {
            $.ajax({
                url: './proses/proses-ajax.php',
                type: 'POST',
                contentType: false,
                data: ubah,
                processData: false,
                cache: false,
                success:function(respon){
                    var result = JSON.parse(respon);
                    if (result.success != true) {
                        alert("Gagal Ubah Data karena : "+result.error);
                    } else {
                        alert("Berhasil Ubah Data!!!");
                        window.location.href = "./pegawai.php";
                    }
                }
            });
        } else {
            alert('Tidak boleh ada data yang kosong!!!');            
        }
    }
</script>