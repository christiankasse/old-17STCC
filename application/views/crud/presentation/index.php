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
					<label>Historique de l'ECC</label>
				  	<textarea type="" name="historique" id="editor1" rows="10" cols="80"  class="form-control" placeholder="Placez l'historique ici"></textarea>
				</div>

				<div class="form-group">
					<label>Status de l'ECC</label>
				  	<textarea type="" name="status" id="editor2" rows="10" cols="80"  class="form-control" placeholder="Placez les status ici"></textarea>
				</div>

				<div class="form-group">
					<label>Mission de l'ECC</label>
				  	<textarea type="" name="mission" id="editor3" rows="10" cols="80"  class="form-control" placeholder="Placez la mission ici"></textarea>
				</div>

				<div class="form-group">
					<label>Symbole</label>
				  	<textarea type="" name="symbole" id="editor4" rows="10" cols="80"  class="form-control" id="editor1" rows="10" cols="80" placeholder="Placez la symbole ici"></textarea>
				</div>

				<div class="form-group">
					<label>Vision de l'ECC</label>
				  	<textarea type="" name="vision" id="editor5" rows="10" cols="80"  class="form-control" placeholder="Placez la vision ici"></textarea>
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

