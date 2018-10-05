<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open(site_url('crud/update_events'));?>
			
			    <h2 class="text-center">Upload Events </h2><hr>
			    <input type="hidden" name="slug" value="<?php echo $events['slug'] ?>">

				<div class="form-group">
					<input type="text" name="title" class="form-control" value="<?php echo $events['title'] ?>">
				</div>

				<div class="form-group">
					<input type="text" name="location" class="form-control" value="<?php echo $events['location'] ?>">
				</div>


				<div class="form-group">
					<select class="custom-select" name="categorie">
						<option selected value="<?php echo $events['categorie'] ?>">Categorie : <?php echo $events['categorie'] ?></option>
						<option value="Sorties_Officielles">Sorties Officielles</option>
						<option value="Evenements_en_vues">Evénements en vues</option>
						<option value="Manifestations_entrevues">Manifestations entrevues</option>
					</select>
				</div>

				<div class="form-group">
					<input type="date" name="date_events" class="form-control" value="<?php echo $events['date_events'] ?>">
				</div>

				<div class="form-group">
					<textarea type="text" name="description" class="form-control" placeholder="Description de la partie"><?php echo $events['description'] ?></textarea>
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

