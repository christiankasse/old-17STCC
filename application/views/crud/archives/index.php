<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/upload_archives'));?>

			    <h2 class="text-center">Upload Archives </h2><hr>
				<div class="form-group">
				    <label >Photos de la partie</label>
				    <input type="file" name="image">
				</div>

				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Indiquez le Titre ici">
				</div>

				<div class="form-group">
					<input type="text" name="location" class="form-control" placeholder="Indiquez le Lieu ici">
				</div>


				<div class="form-group">
					<label>Description</label>
					<textarea type="text" name="description" class="form-control" id="editor1" rows="10" cols="80"  placeholder="Description de la partie"></textarea>
				</div>

			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Upload</button>
			    </div>
		    </form>
		    <p>
				<a href="<?php echo site_url().'/admin/archives'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

