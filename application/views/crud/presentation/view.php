<div class="container">
	<h4 class="text-center">Présentation de l'ECC</h4><hr>

	<h6><strong>Historique</strong></h6>
	<p><?php echo $presentation['historique']; ?></p>

	<h6><strong>Status</strong></h6>
	<p><?php echo $presentation['status']; ?></p>

	<h6><strong>Mission</strong></h6>
	<p><?php echo $presentation['mission']; ?></p>

	<h6><strong>Symbole</strong></h6>
	<p><?php echo $presentation['symbole']; ?></p>

	<h6><strong>Vision</strong></h6>
	<p><?php echo $presentation['vision']; ?></p>

	<p>
		<a href="<?php echo site_url().'/crud/delete_about_presentation/'?><?php echo $presentation['slug'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
		<a href="<?php echo site_url().'/crud/edit_presentation'?>/<?php echo $presentation['slug'] ?>" class="btn btn-warning btn-sm">Editer la page</a>
		<a href="<?php echo site_url().'/admin/about'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
	</p>
</div>