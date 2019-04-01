<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/update_community'));?>
			    <h2 class="text-center">Update Community </h2><hr>

			    <input type="hidden" name="slug" class="form-control" value="<?php echo $community['slug']; ?>">

				<div class="form-group">
					<input type="text" name="name" class="form-control" value="<?php echo $community['name']; ?>">
				</div>

				<div class="form-group">
					<input type="text" name="denomination" class="form-control" value="<?php echo $community['denomination']; ?>">
				</div>

				<div class="form-group">
					<input type="text" name="siege" class="form-control" value="<?php echo $community['siege']; ?>">
				</div>

				<div class="form-group">
					<input type="text" name="email" class="form-control" value="<?php echo $community['email']; ?>">
				</div>

				<div class="form-group">
					<input type="text" name="representant" class="form-control" value="<?php echo $community['representant']; ?>">
				</div>

				<div class="form-group">
					<textarea type="text" name="description" id="editor1" rows="10" cols="80"  class="form-control"><?php echo $community['description']; ?></textarea>
				</div>

			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Upload</button>
			    </div>
		    </form>
		    <p>
				<a href="<?php echo site_url().'/admin/community'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

