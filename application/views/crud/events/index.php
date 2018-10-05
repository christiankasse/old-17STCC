<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open(site_url('crud/upload_events'));?>
			    <h2 class="text-center">Upload Events </h2><hr>

				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Indiquez le Titre ou Thème ici">
				</div>

				<div class="form-group">
					<input type="text" name="location" class="form-control" placeholder="Indiquez l'endroit ici">
				</div>


				<div class="form-group">
					<select class="custom-select" name="categorie">
						<option selected>Categorie</option>
						<option value="Sorties_Officielles">Sorties Officielles</option>
						<option value="Evenements_en_vues">Evénements en vues</option>
						<option value="Manifestations_entrevues">Manifestations entrevues</option>
					</select>
				</div>

				<div class="form-group">
					<input type="date" name="date_events" class="form-control" placeholder="Selectionnez la date ici">
				</div>

				<div class="form-group">
					<textarea type="text" name="description" class="form-control" placeholder="Description de la partie"></textarea>
				</div>


			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Upload</button>
			    </div>
		    </form>
		    <p>
				<a href="<?php echo site_url().'/admin/events'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

