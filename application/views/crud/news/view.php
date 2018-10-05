<div class="col-md-8 mx-auto">
	<div class="card border-dark mb-3">
	  	<div class="card-header text-center">
	  		<h6><?php echo $news['title'] ; ?></h6>
	  	</div>

	  	<div class="card-body text-dark">
		   	
		   	<figure>
				<img class="first-slide img-fluid" src="<?php echo base_url()."uploads/news/"?><?php echo $news['url'] ?>" alt="First slide">
			</figure>

		    <p class="card-text">
		    	<?php echo $news['description'] ; ?>
		    </p>

		    <p class="detail_news">
		    	<small>Posté le <?php echo $news['created_at'] ; ?></small>
		    	<small>152 Commentaires</small>
		    </p>

		   <p> 
				<a href="<?php echo site_url().'/crud/delete_news/'?><?php echo $news['slug'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
				<a href="<?php echo site_url().'/crud/edit_news'?>/<?php echo $news['slug'] ?>" class="btn btn-warning btn-sm">Editer la page</a>

				<a href="<?php echo site_url().'/admin/news'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>	