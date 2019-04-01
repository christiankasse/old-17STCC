<section class="commentaires">
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				
				<h4 class="text-center" style="font-size: 23pt"><?php echo $news['title']; ?></h4>

				<small class="text-muted">Posté le <?php echo $news['created_at']; ?></small>
				<p class="text-muted pull-right">Partager sur <a href="#">Facebook</a></p>

				<figure>
					<img class="first-slide img-fluid" src="<?php echo base_url().'uploads/news/'. $news['url']?>" alt="First slide">
				</figure>
				
				<p class="text-center text-muted">Resumé</p>
				<div><?php echo $news['description']; ?></div>
			</div>

			<div class="col-md-4 mx-auto">
				<div class="card card-fonctionnement">
					  	<div class="card-header">
					    	<h5 class="text-center">Récentes actualités</h5>
					  	</div>
					  	<ul class="list-group list-group-flush">
					  		<?php
								$query = $this->news->getLastNews();
								foreach ($query->result() as $row) {
							?>
						   
						    <li class="list-group-item">
						    	<a href="<?php echo site_url().'/news/show/'.$row->slug ?>"><?php echo $row->title; ?></a>
						    </li>
						<?php } ?>
		  				</ul>
					</div>
			</div>
		</div>
	</div>
</section>