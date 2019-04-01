<div class="container">

	<div class="row">
	  	<div class=col-md-3">
			<?php  require('layout/navbar.php'); ?>
	  	</div>

	  	<div class=" col-md-9">
		   <p>
		   	 	<a href="<?php echo site_url()?>/crud/mission" class="btn btn-primary btn-sm">Inserez un élement</a>
		   </p>
		   <div class="row">
   				<?php
					$query = $this->mission->mission();
					foreach ($query->result() as $row) {
				?>
				<div class="col-md-4">
					<div class="card border-dark mb-3">
					  	<div class="card-header text-center"><h4><?php echo $row->title; ?></h4></div>
					  	<div class="card-body text-dark">
						    
						    <p class="card-text">
						    	<?php echo word_limiter($row->description, 20); ?>
						    </p>
						    <p>
						    	<a href="<?php echo site_url() ?>/crud/view_mission/<?php echo $row->slug ?>" class="btn btn-primary btn-sm">Consultez | Modifier</a>
						    	
						    	<?php if ($row->post == 0): ?>
									<a href="<?php echo site_url() ?>/crud/active_mission/<?php echo $row->slug ?>" class="btn btn-warning btn-sm">post</a>

								<?php else: ?>
									<a href="<?php echo site_url() ?>/crud/desactive_mission/<?php echo $row->slug ?>" class="btn btn-success btn-sm">post</a>
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