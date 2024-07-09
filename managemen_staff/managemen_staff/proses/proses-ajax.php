<?php
require_once('koneksi.php');

$action = $_REQUEST['aksi'];
$response = array();

switch ($action) {
    case 'HapusPosisi':
        extract($_POST);
        $query = mysqli_query($konek, "DELETE FROM posisi WHERE id_posisi = '$id'");
        if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false);
		}
    break;
    case 'TambahPosisi':
        extract($_POST);
        $query = mysqli_query($konek, "INSERT INTO posisi (nama_posisi,gaji,deskripsi) 
		VALUES('$nama_posisi','$gaji','$deskripsi')");
		if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false,"error"=>$conn->error);
		}
    break;
    case 'UbahPosisi':
        extract($_POST);
        $query = mysqli_query($konek, "UPDATE posisi SET nama_posisi= '$nama_posisi', gaji = '$gaji', deskripsi = '$deskripsi' WHERE id_posisi = '$id'");
		if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false,"error"=>$conn->error);
		}
    break;
    case 'HapusDepartement':
        extract($_POST);
        $query = mysqli_query($konek, "DELETE FROM departement WHERE id_departement = '$id'");
        if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false);
		}
    break;
    case 'TambahDepartement':
        extract($_POST);
        $query = mysqli_query($konek, "INSERT INTO departement (nama_departement,lokasi) 
		VALUES('$nama_departement','$lokasi')");
		if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false,"error"=>$conn->error);
		}
    break;
    case 'UbahDepartement':
        extract($_POST);
        $query = mysqli_query($konek, "UPDATE departement SET nama_departement= '$nama_departement', lokasi = '$lokasi' WHERE id_departement = '$id'");
		if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false,"error"=>$conn->error);
		}
    break;
    case 'HapusPegawai':
        extract($_POST);
        $query = mysqli_query($konek, "DELETE FROM pegawai WHERE id_pegawai = '$id'");
        if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false);
		}
    break;
    case 'TambahPegawai':
        extract($_POST);
        $query = mysqli_query($konek, "INSERT INTO pegawai (nama_lengkap,tgl_lahir,jenis_kelamin,no_hp,alamat) 
		VALUES('$nama_lengkap','$tgl_lahir','$jenis_kelamin','$no_hp','$alamat')");
		if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false,"error"=>$conn->error);
		}
    break;
    case 'UbahPegawai':
        extract($_POST);
        $query = mysqli_query($konek, "UPDATE pegawai SET nama_lengkap= '$nama_lengkap', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', no_hp = '$no_hp', alamat = '$alamat' WHERE id_pegawai = '$id'");
		if ($query) {
			$response = array("success" => true);
		} else {
			$response = array("success" => false,"error"=>$conn->error);
		}
    break;
}

echo  json_encode($response);