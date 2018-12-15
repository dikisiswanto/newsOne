<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?> - NewsOne</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="<?= base_url('assets/css/shards-dashboards.1.1.0.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/extras.1.1.0.min.css') ?>">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
  <script src="<?= base_url('assets/js/extras.1.1.0.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/shards-dashboards.1.1.0.min.js') ?>"></script>
</head>
<body class="h-100">
	 <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                	<i class="material-icons">dashboard</i>
                  <span class="d-none d-md-inline ml-1">NewsOne</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(1) === 'dashboard' && $this->uri->segment(2) === NULL ? 'active' : '' ?>" href="<?= base_url('dashboard') ?>">
                  <i class="material-icons">home</i>
                  <span>News Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(2) === 'create' ? 'active' : ''?>" href="<?= base_url('news/create') ?>">
                  <i class="material-icons">note_add</i>
                  <span>Add New Post</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(1) === 'news' && $this->uri->segment(2) === NULL ? 'active' : '' ?>" href="<?= base_url('news') ?>">
                  <i class="material-icons">notes</i>
                  <span>All Posts</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(1) === 'categories'  ? 'active' : '' ?>" href="<?= base_url('categories') ?>">
                  <i class="material-icons">category</i>
                  <span>Categories</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  <?= $this->uri->segment(2) === 'about'  ? 'active' : '' ?>" href="<?= site_url('dashboard/about') ?>">
                  <i class="material-icons">info</i>
                  <span>About</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <div class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
              </div>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item dropdown align-items-stretch">
                  <a class="nav-link dropdown-toggle text-nowrap px-2" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="<?= base_url('assets/img/user.png') ?>" alt="User Avatar">
                    <span class="d-none d-md-inline-block"><?= $this->session->userdata('full_name') ?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small px-0">
                    <a class="dropdown-item text-danger" href="<?= base_url('logout') ?>">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
          	<?php $this->load->view($module); ?>
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <span class="copyright ml-auto my-auto mr-2">Copyright &copy; <?= date('Y') ?>
              <a href="#" rel="nofollow">Diki Siswanto - D42116316</a>.
              <span>Template by DesignRevision</span>
            </span>
          </footer>
        </main>
      </div>
    </div>
  </body>
</html>
