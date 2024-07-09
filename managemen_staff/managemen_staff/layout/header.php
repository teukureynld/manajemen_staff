<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$title = "";
if ($uri_segments[2] == 'posisi.php' || $uri_segments[2] == 'tambah_posisi.php' || $uri_segments[2] == 'edit_posisi.php') {
  $title = "Posisi";
}elseif ($uri_segments[2] == 'departement.php' || $uri_segments[2] == 'tambah_departement.php' || $uri_segments[2] == 'edit_departement.php') {
  $title = "Departement";
}elseif ($uri_segments[2] == 'pegawai.php' || $uri_segments[2] == 'tambah_pegawai.php' || $uri_segments[2] == 'edit_pegawai.php') {
  $title = "Pegawai";
}else {
    $title = "Dashboard";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="./assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="./assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="./assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="./assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="./assets/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="./assets/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="./assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="./assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            </ul>
            </form>
        </nav>