<div class="container">

	<div class="row">
	  	<div class=col-md-3">
			<?php  require('layout/navbar.php'); ?>
	  	</div>

	  	<div class=" col-md-9">
		   <p>
		   	 	<a href="<?php echo site_url()?>/crud/community" class="btn btn-primary btn-sm">Inserez une communauté</a>
		   </p>
		   <div class="row">

		   		<?php
					$query = $this->community->community();
					foreach ($query->result() as $row) {
				?>
		   	
				<div class="col-md-4">
					<div class="card border-dark mb-3">
					  	<div class="card-header text-center">
					  		<h6><?php echo $row->name; ?></h6>
					  		<p><?php echo $row->denomination; ?></p>
					  	</div>
					  	<div class="card-body text-dark">
						    
						    <p class="card-text"><?php echo word_limiter($row->description, 10); ?></p>
						    <p>
						    	<a href="<?php echo site_url() ?>/crud/view_community/<?php echo $row->slug ?>" class="btn btn-primary btn-sm">Consultez | Modifier</a>
						    	
						    	<?php if ($row->post == 0): ?>
									<a href="<?php echo site_url() ?>/crud/active_community/<?php echo $row->slug ?>" class="btn btn-warning btn-sm">post</a>

								<?php else: ?>
									<a href="<?php echo site_url() ?>/crud/desactive_community/<?php echo $row->slug ?>" class="btn btn-success btn-sm">post</a>
								<?php endif ?>
						    </p>
						  </div>
					</div>
				</div>

				<?php } ?>

		   </div>

		</div>
	</div>
</div>