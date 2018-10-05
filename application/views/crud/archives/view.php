<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

				<h3 class="text-center ecc_detail"><?php echo $archives['title'] ?></h3>

				<figure>
					<img class="first-slide img-fluid" src="<?php echo base_url()."uploads/archives/"?><?php echo $archives['image'] ?>" alt="First slide">
				</figure>
				<p>
					<?php echo $archives['description'] ?>
				</p>

				<p>
					<small>A : <?php echo $archives['location'] ?></small><br>
					<small class="text-muted">Du : <?php echo $archives['created_at'] ?></small>
				</p>

				<p> 
					<a href="<?php echo site_url().'/crud/delete_archives/'?><?php echo $archives['slug'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
					<a href="<?php echo site_url().'/crud/edit_archives'?>/<?php echo $archives['slug'] ?>" class="btn btn-warning btn-sm">Editer la page</a>

					<a href="<?php echo site_url().'/admin/archives'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
				</p>
				
			</p>
		</div>
	</div>
</div>

