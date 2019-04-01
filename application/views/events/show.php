<section class="commentaires">
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				
				<h4 class="text-center"><?php echo $events['title']; ?></h4>
				<p><small class="text-muted">Du <?php echo $events['created_at']; ?></small></p>
				<p><small class="text-muted"><strong>A : </strong> <?php echo $events['location']; ?></small></p>

				
				<p class="text-center text-muted">Programme</p><hr>
				<div><?php echo $events['description']; ?></div>
			</div>

			<div class="col-md-4 mx-auto">
				<div class="card card-fonctionnement">
					  	<div class="card-header">
					    	<h5 class="text-center">Récents Activités et Programe</h5>
					  	</div>
					  	<ul class="list-group list-group-flush">
					  		<?php
								$query = $this->events->getLastEvents();
								foreach ($query->result() as $row) {
							?>
						   
						    <li class="list-group-item">
						    	<a href="<?php echo site_url().'/events/show/'.$row->slug ?>"><?php echo $row->title; ?></a>
						    </li>
						<?php } ?>
		  				</ul>
					</div>
			</div>
		</div>
	</div>
</section>