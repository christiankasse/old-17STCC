<section class="nav_current">
	<div class="container">
		<p>
			A propos de l'ECC
		</p>
	</div>
</section>

<section class="apropos_ecc">
	
	<div class="container">
		<h3 class="text-center">Fonctionnement de  l'Eglise du Christ au Congo</h3>

		<div class="row">

			<div class="col-md-4">
				
				<div class="card card-fonctionnement">
				  	<div class="card-header">
				    	<h5 class="text-center">Fonctionnement</h5>
				  	</div>
				  	<ul class="list-group list-group-flush">
					    <li class="list-group-item"><a href="#Structure_de_l_ECC">Structure de l'ECC</a></li>
					    <li class="list-group-item"><a href="#Departements">Les Directions Nationales</a></li>
					    <li class="list-group-item"><a href="#Organismes_associes">Organismes Associés</a></li>
	  				</ul>
				</div>
			</div>

			<div class="col-md-8">
				<?php
					$query = $this->fonctionnement->fonctionnement();
					foreach ($query->result() as $row) {
				?>
					<h4 class="text-muted" id="Structure_de_l_ECC">Structure de l'ECC</h4>
					<div><?php echo $row->structure; ?></div>

					<h4 class="text-muted" id="Departements">Les Directions Nationales</h4>
					<div><?php echo $row->departement; ?></div>

					<h4 class="text-muted" id="Organismes_associes">Organismes Associés</h4>
					<div><?php echo $row->organisme; ?></div>

				<?php } ?>
			</div>
		</div>
	</div>
</section>