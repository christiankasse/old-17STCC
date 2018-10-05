<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/upload_cpart'));?>
			    <h2 class="text-center">Upload Center Part | Feed </h2><hr>
				<div class="form-group">
				    <label >Photos de la partie</label>
				    <input type="file" name="url">
				</div>

				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Indiquez le titre ici">
				</div>

				<div class="form-group">
					<select class="custom-select" name="categorie">
						<option selected>Selectionnez une categorie</option>
						<option value="evangelisation">Evangélisation et vie de l'Eglise</option>
						<option value="education">Education chrétienne</option>
						<option value="femme_famille">Femmes et Familles</option>
						<option value="oeuvre_sociale">Oeuvre Sociales</option>
					</select>
				</div>

				<div class="form-group">
					<textarea type="text" name="description" class="form-control" placeholder="Description de la partie"></textarea>
				</div>

			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Upload</button>
			    </div>
		    </form>
		    <p>
				<a href="<?php echo site_url().'/admin/mission'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

