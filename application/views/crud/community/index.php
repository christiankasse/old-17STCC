<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/upload_community'));?>
			    <h2 class="text-center">Upload Community </h2><hr>

			    <div class="form-group">
				    <label >Photos de la partie</label>
				    <input type="file" name="url">
				</div>

				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Indiquez l'abréviation ici">
				</div>

				<div class="form-group">
					<input type="text" name="denomination" class="form-control" placeholder="Indiquez le nom de la communauté ici">
				</div>

				

				<div class="form-group">
					<textarea type="text" name="description" class="form-control" placeholder="Petite description de la communauté"></textarea>
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

