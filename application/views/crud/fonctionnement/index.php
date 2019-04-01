<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open(site_url('crud/upload_about_fonctionnement'));?>

			    <h2 class="text-center">Upload Fonctionnement ECC</h2><hr>

				<div class="form-group">
					<label>Structure</label>
				  	<textarea type="" name="structure" id="editor1" rows="10" cols="80"  class="form-control" placeholder="Placez la structure ici"></textarea>
				</div>

				<div class="form-group">
					<label>Départements</label>
				  	<textarea type="" name="departement" id="editor2" rows="10" cols="80"  class="form-control" placeholder="Placez les departements ici"></textarea>
				</div>

				<div class="form-group">
					<label>Organismes</label>
				  	<textarea type="" name="organisme" id="editor3" rows="10" cols="80"  class="form-control" placeholder="Placez les organismes partenaire ici"></textarea>
				</div>

			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Upload</button>
			    </div>
		    </form>

		    <p>
				<a href="<?php echo site_url().'/admin/about'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

