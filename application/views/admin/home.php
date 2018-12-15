<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Dashboard</span>
    <h3 class="page-title">News Overview</h3>
  </div>
</div>
<!-- End Page Header -->
<!-- Small Stats Blocks -->
<div class="row">
  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <div class="card-body p-0 d-flex">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <span class="stats-small__label text-uppercase">Posts</span>
            <h6 class="stats-small__value count my-3"><?= $post_numrows ?></h6>
          </div>
        </div>
        <canvas height="120" class="blog-overview-stats-small-1"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg col-md-6 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <div class="card-body p-0 d-flex">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <span class="stats-small__label text-uppercase">Categories</span>
            <h6 class="stats-small__value count my-3"><?= $category_numrows ?></h6>
          </div>
        </div>
        <canvas height="120" class="blog-overview-stats-small-2"></canvas>
      </div>
    </div>
  </div>
  <div class="col-lg col-md-4 col-sm-6 mb-4">
    <div class="stats-small stats-small--1 card card-small">
      <div class="card-body p-0 d-flex">
        <div class="d-flex flex-column m-auto">
          <div class="stats-small__data text-center">
            <span class="stats-small__label text-uppercase">Users</span>
            <h6 class="stats-small__value count my-3"><?= $user_numrows ?></h6>
          </div>
        </div>
        <canvas height="120" class="blog-overview-stats-small-4"></canvas>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url('assets/js/app/app-blog-overview.1.1.0.js') ?>"></script>
