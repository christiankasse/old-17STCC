<div class="col-md-8 mx-auto">
	<div class="card border-dark mb-3">
	  	<div class="card-header text-center">
	  		<h6><?php echo $events['title'] ; ?></h6>
	  	</div>

	  	<div class="card-body text-dark">
		   	
		   

		    <p class="card-text">
		    	<?php echo $events['description'] ; ?>
		    </p>

		    <p class="detail_events">
		    	<small>Posté le <?php echo $events['created_at'] ; ?></small> <br>
		    	<small class="text-muted">Lieu : <strong><?php echo $events['location'] ; ?></strong></small>
		    </p>

		   <p> 
				<a href="<?php echo site_url().'/crud/delete_events/'?><?php echo $events['slug'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
				<a href="<?php echo site_url().'/crud/edit_events'?>/<?php echo $events['slug'] ?>" class="btn btn-warning btn-sm">Editer la page</a>

				<a href="<?php echo site_url().'/admin/events'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
			</p>
		</div>
	</div>
</div>	