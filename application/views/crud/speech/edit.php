<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open(site_url('crud/update_speech'));?>

			    <h2 class="text-center">Update Speech</h2><hr>
			    <input type="hidden" name="slug" value="<?php echo $speech['slug'] ?>">
				<div class="form-group">
					<input type="" name="speaker" class="form-control" value="<?php echo $speech['speaker'] ?>">
				</div>

				<div class="form-group">
					<input type="" name="role" class="form-control" value="<?php echo $speech['role'] ?>">
				</div>

				<div class="form-group">
				  	<textarea type="" name="description" class="form-control" placeholder="Placez la citation ici"><?php echo $speech['description'] ?></textarea>
				</div>

				<div class="form-group">
					<label>Couleur du Contenue</label>
					<input type="color" name="color_description" class="form-control" value="<?php echo $speech['color_description'] ?>">
				</div>

				<div class="form-group">
					<label>Couleur du titre</label>
					<input type="color" name="color_text" class="form-control" value="<?php echo $speech['color_text'] ?>">
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

