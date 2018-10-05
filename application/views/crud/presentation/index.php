<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open(site_url('crud/upload_about_presentation'));?>

			    <h2 class="text-center">Upload Presentation</h2><hr>

				<div class="form-group">
				  	<textarea type="" name="historique" class="form-control" placeholder="Placez l'historique ici"></textarea>
				</div>

				<div class="form-group">
				  	<textarea type="" name="status" class="form-control" placeholder="Placez les status ici"></textarea>
				</div>

				<div class="form-group">
				  	<textarea type="" name="mission" class="form-control" placeholder="Placez la mission ici"></textarea>
				</div>

				<div class="form-group">
				  	<textarea type="" name="symbole" class="form-control" placeholder="Placez la symbole ici"></textarea>
				</div>

				<div class="form-group">
				  	<textarea type="" name="vision" class="form-control" placeholder="Placez la vision ici"></textarea>
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

