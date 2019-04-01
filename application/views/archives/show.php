<section class="commentaires">
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				
				<h4 class="text-center"><?php echo $archives['title']; ?></h4>
				<small class="text-muted">Posté le <?php echo $archives['created_at']; ?></small>

				<figure>
					<img class="first-slide img-fluid" src="<?php echo base_url().'uploads/archives/'. $archives['image']?>" alt="First slide">
				</figure>
				<p class="text-center text-muted">Resumé</p>
				<div><?php echo $archives['description']; ?></div>
			</div>

			<div class="col-md-4 mx-auto">
				<div class="card card-fonctionnement">
					  	<div class="card-header">
					    	<h5 class="text-center">Récents Archives</h5>
					  	</div>
					  	<ul class="list-group list-group-flush">
					  		<?php
								$query = $this->archives->getLastArchives();
								foreach ($query->result() as $row) {
							?>
						   
						    <li class="list-group-item">
						    	<a href="<?php echo site_url().'/archives/show/'.$row->slug ?>"><?php echo $row->title; ?></a>
						    </li>
						<?php } ?>
		  				</ul>
					</div>
			</div>
		</div>
	</div>
</section>