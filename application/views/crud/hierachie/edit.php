<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/update_hierachie'));?>

			    <h2 class="text-center">Upload Hierachie</h2><hr>
			    <input type="hidden" name="slug" value="<?php echo $hierachie['slug']; ?>">
			    <input type="hidden" name="profile" value="<?php echo $hierachie['profile']; ?>">

				<div class="form-group">
					<label>Inserez la photo de profile</label>
					<input type="file" name="profile" class="form-control" >
				</div>

				<div class="form-group">
					<input type="text" name="nom" class="form-control" value="<?php echo $hierachie['nom']; ?>">
				</div>

				<div class="form-group">
					<input type="text" name="fonction" class="form-control" value="<?php echo $hierachie['fonction']; ?>">
				</div>

				<div class="form-group">
				  	<textarea type="text" name="presentation" class="form-control"><?php echo $hierachie['presentation']; ?></textarea>
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

