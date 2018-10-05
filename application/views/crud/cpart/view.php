<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

				<h3 class="text-center ecc_detail"><?php echo $cpart['title'] ?></h3>

				<figure>
					<img class="first-slide img-fluid" src="<?php echo base_url()."uploads/feed/"?><?php echo $cpart['url'] ?>" alt="First slide">
				</figure>
				<p>
					<?php echo $cpart['description'] ?>
				</p>

				<p> 
					<a href="<?php echo site_url().'/crud/delete_cpart/'?><?php echo $cpart['slug'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
					<a href="<?php echo site_url().'/crud/edit_cpart'?>/<?php echo $cpart['slug'] ?>" class="btn btn-warning btn-sm">Editer la page</a>

					<a href="<?php echo site_url().'/admin/cpart'?>" class="btn btn-success btn-sm">Rentrez à la page</a>

				</p>
				
			</p>
		</div>
	</div>
</div>

