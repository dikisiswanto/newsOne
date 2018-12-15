<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">News Dashboard</span>
    <h3 class="page-title"><?= $title ?></h3>
  </div>
</div>
<div class="row">
	<div class="col-lg-6">
		<form action="categories/create" method="post" class="mb-4">
			<div class="input-group">
				<input type="text" class="form-control" name="cat_title" placeholder="Category Name">
				<div class="input-group-append">
					<button class="btn btn-info border-0" type="submit">Add</button>
				</div>
			</div>
		</form>
		<div class="card card-lg mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0">Categories</h6>
      </div>
      <div class="card-body p-0 pb-3 text-center">
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th scope="col" class="border-0">#</th>
              <th scope="col" class="border-0">Category Name</th>
              <th class="border-0" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php $num = 1 ?>
            <?php foreach ($query as $category): ?>
            	<tr>
            		<td><?= $num ?></td>
            		<td><?= $category->cat_title ?></td>
            		<td>
            			<button class="btn btn-info btn-sm update" data-id="<?= $category->id ?>" data-title="<?= $category->cat_title ?>">
            				<i class="material-icons">edit</i> Edit
            			</button>
            		</td>
            		<td>
            			<form action="<?= base_url('categories/delete') ?>" method="post">
            				<input type="hidden" class="d-none" name="id" value="<?= $category->id ?>">
            				<button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to delete this category?');">
            					<i class="material-icons">delete_outline</i> Delete
            				</button>
            			</form>
            		</td>
            	</tr>
            	<?php $num++; ?>
            <?php endforeach ?>
          </tbody>
        </table>
				
        
      </div>
    </div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Edit category</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="<?= base_url('categories/update') ?>" method="post">
	      	<div class="modal-body">
		      	<div class="input-group">
		      		<div class="input-group-prepend">
		      			<button class="btn btn-disabled">Category Name</button>
		      		</div>
		      		<input type="text" class="form-control" name="cat_name">
		      	</div>
		      	<input type="hidden" name="id">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button class="btn btn-primary" type="submit">Update</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
</div>
<script>
	$(document).ready(function () {
		$('.update').click(function () {
			$('input[name=id]').val($(this).attr('data-id'));
			$('input[name=cat_name]').val($(this).attr('data-title'));
			$('#modal_edit').modal('show');
		})
	})
</script>