<div class="container">
	<h4 class="text-center">Fonctionnement de l'ECC</h4><hr>

	<h6><strong>Historique</strong></h6>
	<p><?php echo $fonctionnement['structure']; ?></p>

	<h6><strong>Status</strong></h6>
	<p><?php echo $fonctionnement['departement']; ?></p>

	<h6><strong>Mission</strong></h6>
	<p><?php echo $fonctionnement['organisme']; ?></p>

	

	<p>
		<a href="<?php echo site_url().'/crud/delete_about_fonctionnement/'?><?php echo $fonctionnement['slug'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
		<a href="<?php echo site_url().'/crud/edit_fonctionnement'?>/<?php echo $fonctionnement['slug'] ?>" class="btn btn-warning btn-sm">Editer la page</a>
		<a href="<?php echo site_url().'/admin/about'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
	</p>
</div>