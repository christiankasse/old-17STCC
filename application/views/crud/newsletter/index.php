<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php //echo form_open_multipart(site_url('crud/upload_predication'));?>
			    <h2 class="text-center">Send Email </h2><hr>
				

				<div class="form-group">
					<select class="custom-select" name="categorie">
						<option>Provenance</option>
					  	<option>conatc@ecc-co.org</option>
					  	<option>info@ecc-co.org</option>
					  	<option>notreplay@ecc-co.org</option>
					</select>
				</div>

				<div class="form-group">
					<select class="custom-select" name="categorie">
						<option>Destinantaire</option>
						<option>Envoie multiple</option>
					  	<option>nom de la personne 2</option>
					  	<option>nom de la personne 3</option>
					  	<option>nom de la personne 4</option>
					</select>
				</div>

				<div class="form-group">
					<textarea type="text" name="description" class="form-control" placeholder="Description de la partie"></textarea>
				</div>

			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Send Email</button>
			    </div>
		    </form>
		    <p>
				<a href="<?php echo site_url().'/admin/newsletter'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

