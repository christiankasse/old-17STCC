<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open(site_url('crud/upload_speech'));?>

			    <h2 class="text-center">Upload Speech</h2><hr>

				<div class="form-group">
					<input type="" name="speaker" class="form-control" placeholder="Indiquez le Nom ici">
				</div>

				<div class="form-group">
					<input type="" name="role" class="form-control" placeholder="Indiquez le Role ici">
				</div>

				<div class="form-group">
					<label>Descritption</label>
				  	<textarea type="" name="description" id="editor1" rows="10" cols="80"  class="form-control" placeholder="Placez la citation ici"></textarea>
				</div>
				
			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Upload</button>
			    </div>
		    </form>

		    <p>
				<a href="<?php echo site_url().'/admin/speech'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

