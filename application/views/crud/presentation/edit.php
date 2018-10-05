<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open(site_url('crud/update_about_presentation'));?>

			    <h2 class="text-center">Upload Presentation</h2><hr>
			    <input type="hidden" name="slug" value="<?php echo $presentation['slug'] ?>">

				<div class="form-group">
				  	<textarea type="" name="historique" class="form-control"><?php echo $presentation['historique'] ?></textarea>
				</div>

				<div class="form-group">
				  	<textarea type="" name="status" class="form-control"><?php echo $presentation['status'] ?></textarea>
				</div>

				<div class="form-group">
				  	<textarea type="" name="mission" class="form-control"><?php echo $presentation['mission'] ?></textarea>
				</div>

				<div class="form-group">
				  	<textarea type="" name="symbole" class="form-control"><?php echo $presentation['symbole'] ?></textarea>
				</div>

				<div class="form-group">
				  	<textarea type="" name="vision" class="form-control"><?php echo $presentation['vision'] ?></textarea>
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

