<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">News Dashboard</span>
    <h3 class="page-title"><?= $title ?></h3>
  </div>
</div>
<!-- End Page Header -->
<form action="<?= $action ?>" method="post">
  <div class="row">
  	<div class="info-box col-lg-9 col-md-12">
     <!-- Show errors if available -->
      <?php if ($message && $message['message'] != NULL): ?>
        <div class="alert <?= $message['type'] == 'error' ? 'alert-danger' : 'alert-success' ?>">
          <?= $message['message'] ?>
        </div>
      <?php endif ?> 
    </div>
    <div class="col-lg-9 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div class="card-body">
          <div class="add-new-post">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title" name="post_title" value="<?= $query ? $query->post_title : '' ?>">
            <div id="editor-container" class="add-new-post__editor mb-1"></div>
            <textarea name="post_content" cols="0" rows="0" class="d-none"><?= $query ? $query->post_content : '' ?></textarea>
          </div>
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
    <div class="col-lg-3 col-md-12">
      <!-- Post Overview -->
      <div class='card card-small mb-3'>
        <div class="card-header border-bottom">
          <h6 class="m-0">Actions</h6>
        </div>
        <div class='card-body p-0'>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <span class="d-flex mb-2">
                <i class="material-icons mr-1">visibility</i>
                <strong class="mr-1">Visibility:</strong>
                <strong class="text-success">Public</strong>
              </span>
              <span class="d-flex mb-2">
                <i class="material-icons mr-1">calendar_today</i>
                <strong class="mr-1">Created:</strong> <?= $query ? $query->created_at : 'Now' ?>
              </span>
              <span class="d-flex">
                <i class="material-icons mr-1">score</i>
                <strong class="mr-1">Readability:</strong>
                <strong class="text-warning">Ok</strong>
              </span>
            </li>
            <li class="list-group-item d-flex px-3 text-right">
              <button class="btn btn-sm btn-accent ml-auto submit" type="submit">
                <i class="material-icons">file_copy</i> Publish</button>
            </li>
          </ul>
        </div>
      </div>
      <!-- / Post Overview -->

      <!-- Post Overview -->
      <div class='card card-small mb-3'>
        <div class="card-header border-bottom">
          <h6 class="m-0">Categories</h6>
        </div>
        <div class='card-body p-0'>
          <ul class="list-group list-group-flush">
            <li class="list-group-item px-3 pb-2">
            	<?php if ($categories AND $categories !== NULL): ?>
            		<?php foreach ($categories as $cat): ?>
            			<div class="custom-control custom-radio mb-1">
  		              <input type="radio" name="post_cat_id" class="custom-control-input" id="<?= $cat->id ?>" value="<?= $cat->id ?>" <?= $query ? ($query->post_cat_id == $cat->id ? 'checked' : '') : ''; ?>>
  		              <label class="custom-control-label" for="<?= $cat->id ?>"><?= $cat->cat_title ?></label>
  		            </div>
            		<?php endforeach ?>
            		<?php else: ?>
            			<div class="text-center">
            				<span class="d-block">Categories not found.</span>
            				<a class="btn btn-warning my-3 text-white">Create category</a>
            			</div>
            	<?php endif ?>
            </li>
          </ul>
        </div>
      </div>
      <!-- / Post Overview -->
    </div>
  </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
<script src="<?= base_url('assets/js/app/app-blog-new-post.1.1.0.js') ?>"></script>
<script>
  $(document).ready(function () {
    $('.ql-editor').blur(function () {
      let data = $('.ql-editor').html();
      $('textarea[name=post_content]').html(data);
    });
    let content = '<?= html_entity_decode($query->post_content); ?>';
    $('.ql-editor').html(content);
  });
</script>