<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

				<h3 class="text-center ecc_detail"><?php echo $community['name'] ?></h3>

				<figure>
					<img class="first-slide img-fluid" src="<?php echo base_url()."uploads/community/"?><?php echo $community['url'] ?>" alt="First slide">
				</figure>
				<p>
					<?php echo $community['description'] ?>
				</p>

				<p> 
					<a href="<?php echo site_url().'/crud/delete_community/'?><?php echo $community['name'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
					<a href="<?php echo site_url().'/crud/edit_community'?>/<?php echo $community['name'] ?>" class="btn btn-warning btn-sm">Editer la page</a>

					<a href="<?php echo site_url().'/admin/community'?>" class="btn btn-success btn-sm">Rentrez à la page</a>

				</p>
				
			</p>
		</div>
	</div>
</div>

