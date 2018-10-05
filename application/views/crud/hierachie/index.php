<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/upload_hierachie'));?>

			    <h2 class="text-center">Upload Hierachie</h2><hr>


				<div class="form-group">
					<label>Inserez la photo de profile</label>
					<input type="file" name="profile" class="form-control" >
				</div>

				<div class="form-group">
					<input type="text" name="nom" class="form-control" placeholder="Nom du serviteur">
				</div>

				<div class="form-group">
					<input type="text" name="fonction" class="form-control" placeholder="fonction occupée">
				</div>

				<div class="form-group">
				  	<textarea type="text" name="presentation" class="form-control" placeholder="Une breve présentation ici"></textarea>
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

