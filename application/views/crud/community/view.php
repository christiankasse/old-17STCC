<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">

				<h3 class="text-center ecc_detail"><?php echo $community['name'] ?></h3>
				<h6 class="text-muted">[<?php echo $community['denomination'] ?>]</h6>

				<div>
					<?php echo $community['description'] ?>
				</div>

				<p> 
					<a href="<?php echo site_url().'/crud/delete_community/'?><?php echo $community['slug'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
					<a href="<?php echo site_url().'/crud/edit_community'?>/<?php echo $community['slug'] ?>" class="btn btn-warning btn-sm">Editer la page</a>

					<a href="<?php echo site_url().'/admin/community'?>" class="btn btn-success btn-sm">Rentrez à la page</a>

				</p>
				
			</p>
		</div>
	</div>
</div>

