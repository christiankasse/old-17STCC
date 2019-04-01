<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/upload_mission'));?>
			    <h2 class="text-center">Upload Mission </h2><hr>
				<div class="form-group">
				    <label >Photos de la partie</label>
				    <input type="file" name="url">
				</div>

				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Indiquez le titre ici">
				</div>

				<div class="form-group">
					<select class="custom-select" name="categorie">
						<option selected>Selectionnez la categorie</option>
						<option value="ecc_mission">Mise de l'Ecc</option>
						<option value="ecc_societe">Ecc & Société</option>
						<option value="ecc_communautes">Nos communauté</option>
					</select>
				</div>

				<div class="form-group">
					<label>Description</label>
					<textarea type="text" name="description" id="editor1" rows="10" cols="80"  class="form-control" placeholder="Description de la partie"></textarea>
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

