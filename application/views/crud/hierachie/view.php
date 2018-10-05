<div class="container">

	<div class="col-md-8 mx-auto text-center">
	<h4 class="text-center text-muted">Hierachie ausein de l'ECC</h4><hr>
	<figure>
		<img src="<?php echo base_url()."uploads/hierachie/".$hierachie['profile'];?>" class="figure-img img-fluid "  alt="img slide" >
	</figure>
	<h6><strong>Nom</strong></h6>
	<p><?php echo $hierachie['nom']; ?></p>

	<h6><strong>Fonction</strong></h6>
	<p class="text-muted"><?php echo $hierachie['fonction']; ?></p>

	<h6><strong>Présentation</strong></h6>
	<p><?php echo $hierachie['presentation']; ?></p>


	<p>
		<a href="<?php echo site_url().'/crud/delete_hierachie/'?><?php echo $hierachie['slug'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
					
		<a href="<?php echo site_url().'/crud/edit_hierachie'?>/<?php echo $hierachie['slug'] ?>" class="btn btn-warning btn-sm">Editer la page</a>
		<a href="<?php echo site_url().'/admin/about'?>" class="btn btn-success btn-sm">Rentrez à la page</a>
	</p>

	</div>
</div>