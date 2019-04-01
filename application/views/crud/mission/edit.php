<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/update_mission'));?>

			    <h2 class="text-center">Update mission</h2><hr>
			    <input type="hidden" name="slug" value="<?php echo $mission['slug'] ?>">
			    <input type="hidden" name="url" value="<?php echo $mission['url'] ?>">
			    
				<div class="form-group ">
				    <label for="InputFile">Photos du mission</label>
				    <input type="file" name="url" id="InputFile" value="<?php echo $mission['url'] ?>">
				</div>

				<div class="form-group">
					<input type="" name="title" class="form-control" value="<?php echo $mission['title'] ?>">
				</div>

				<div class="form-group">
					<select class="custom-select" name="categorie">
						<option value="<?php echo $mission['categorie'] ?>" selected>
							Categorie : <?php echo $mission['categorie'] ?>
						</option>
						<option value="ecc_mission">Mise de l'Ecc</option>
						<option value="ecc_societe">Ecc & Société</option>
						<option value="ecc_communautes">Nos communauté</option>
					</select>
				</div>

				<div class="form-group">
				  	<textarea type="" name="description" id="editor1" rows="10" cols="80"  class="form-control" id="editor1"><?php echo $mission['description']; ?></textarea>
				
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

