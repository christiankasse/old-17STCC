<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

			<?php if (validation_errors()) {?>
			<div class="alert alert-danger">
				<?php echo validation_errors();?>
			</div>
			<?php }?>

			<?php echo form_open_multipart(site_url('crud/update_slide'));?>

			    <h2 class="text-center">Upload Slides</h2><hr>
			    <input type="hidden" name="slug" value="<?php echo $slide['slug'] ?>">
			    <input type="hidden" name="url" value="<?php echo $slide['url'] ?>">
			    
				<div class="form-group ">
				    <label for="InputFile">Photos du slide</label>
				    <input type="file" name="url" id="InputFile">
				</div>

				<div class="form-group">
					<input type="" name="title" class="form-control" value="<?php echo $slide['title'] ?>">
				</div>

				<div class="form-group">
				  	<textarea type="" name="content" id="editor1" rows="10" cols="80"  class="form-control" id="editor1"><?php echo $slide['content']; ?></textarea>
				
				</div>

			    <div class="form-group">
			    	<button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Upload</button>
			    </div>
		    </form>

		    <p>
				<a href="<?php echo site_url().'/admin/slides'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>

