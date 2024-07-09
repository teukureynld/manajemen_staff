<?php
  $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri_segments = explode('/', $uri_path);
?>
<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">Reynaldi</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.php">Rey</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Starter</li>
            <li class="<?= ($uri_segments[2] == 'index.php') ? 'active' : ''; ?>"><a class="nav-link" href="index.php"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Data Kepegawaian</li>
            <li class="<?= ($uri_segments[2] == 'posisi.php') ? 'active' : ''; ?>"><a class="nav-link" href="posisi.php"><i class="fas fa-user"></i> <span>Posisi</span></a></li>
            <li class="<?= ($uri_segments[2] == 'departement.php') ? 'active' : ''; ?>"><a class="nav-link" href="departement.php"><i class="fas fa-chalkboard-teacher"></i> <span>Departement</span></a></li>
            <li class="<?= ($uri_segments[2] == 'pegawai.php') ? 'active' : ''; ?>"><a class="nav-link" href="pegawai.php"><i class="fas fa-user-graduate"></i> <span>Pegawai</span></a></li>
          </ul>
       </aside>
      </div>