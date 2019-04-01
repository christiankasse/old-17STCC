<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
				<div class="alert alert-danger">
				<?php echo validation_errors();?>
				</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/update_news'));?>
			    <h2 class="text-center">Upload News </h2><hr>
		    	<input type="hidden" name="slug" class="form-control" value="<?php echo $news['slug'] ?>">
		    	<input type="hidden" name="url" class="form-control" value="<?php echo $news['url'] ?>">
		    	
				<div class="form-group">
				    <label >Photos de la partie</label>
				    <input type="file" name="url">
				</div>

				<div class="form-group">
					<input type="text" name="title" class="form-control" value="<?php echo $news['title'] ?>">
				</div>


				<div class="form-group">
					<textarea type="text" name="description" id="editor1" rows="10" cols="80"  class="form-control" placeholder="Description de la partie"><?php echo $news['description'] ?></textarea>
				</div>

			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Upload</button>
			    </div>
		    </form>
		    <p>
				<a href="<?php echo site_url().'/admin/news'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

