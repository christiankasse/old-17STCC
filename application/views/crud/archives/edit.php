<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/update_archives'));?>

			    <h2 class="text-center">Upload Archives </h2><hr>
			    <input type="hidden" name="slug" value="<?php echo $archives['slug'] ?>">

				<div class="form-group">
				    <label >Photos de la partie</label>
				    <input type="file" name="image" value="<?php echo $archives['image'] ?>">
				</div>

				<div class="form-group">
					<input type="text" name="title" class="form-control" value="<?php echo $archives['title'] ?>">
				</div>

				<div class="form-group">
					<input type="text" name="location" class="form-control" value="<?php echo $archives['location'] ?>">
				</div>


				<div class="form-group">
					<textarea type="text" name="description" class="form-control" ><?php echo $archives['description'] ?></textarea>
				</div>

			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">
			    		Upload
			    	</button>
			    </div>
		    </form>
		    <p>
				<a href="<?php echo site_url().'/admin/archives'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

