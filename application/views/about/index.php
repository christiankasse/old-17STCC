<section class="nav_current">
	<div class="container">
		<p>
			A propos de l'ECC
		</p>
	</div>
</section>
<section class="apropos_ecc">
	
	<div class="container">
		<h2 class="text-center">Présentation de l'Eglise du Christ au Congo</h2><hr>

		<div class="row">

			<div class="col-md-4">
				<div class="card card-presentation">
				  	<div class="card-header">
				    	<h5 class="text-center">Présentation</h5>
				  	</div>
				  	<ul class="list-group list-group-flush">
					    <li class="list-group-item"><a href="#Historique_de_l_ECC">Historique de l'ECC</a></li>
					    <li class="list-group-item"><a href="#Statut">Statut</a></li>
					    <li class="list-group-item"><a href="#Mission">Mission</a></li>
					    <li class="list-group-item"><a href="#Symbole">Symbole</a></li>
					    <li class="list-group-item"><a href="#Vision">Vision</a></li>
	  				</ul>
				</div>

				<div class="card card-fonctionnement">
				  	<div class="card-header">
				    	<h5 class="text-center">Fonctionnement</h5>
				  	</div>
				  	<ul class="list-group list-group-flush">
					    <li class="list-group-item"><a href="<?php echo site_url()?>/about/fonctionnement#Structure_de_l_ECC">Structure de l'ECC</a></li>
					    <li class="list-group-item"><a href="<?php echo site_url()?>/about/fonctionnement#Departements">Les Directions Nationales</a></li>
					    <li class="list-group-item"><a href="<?php echo site_url()?>/about/fonctionnement#Organismes_associes">Organismes Associés</a></li>
	  				</ul>
				</div>

				<div class="card card-organisationnelle">
					
				  	<div class="card-header">
				    	<h5 class="text-center">Hiérarchie organisationnelle</h5>
				  	</div>

				  	<ul class="list-group list-group-flush">
					    <li class="list-group-item">
					    	<a href="<?php echo site_url('about/hierachie#Presidence_National')?>">Mandataires au niveau national </a>
					    </li>

					     <li class="list-group-item">
					    	<a href="<?php echo site_url('about/province')?>">Mandataires au niveau provincial </a>
					    </li>
	  				</ul>
				</div>
			</div>
			
			<div class="col-md-8">

				<?php
					$query = $this->presentation->presentation();
					foreach ($query->result() as $row) {
				?>

				<h5 class="text-muted" id="Historique_de_l_ECC">HISTORIQUE DE L'ECC</h5>
				<div><?php echo $row->historique; ?></div>

				<h5 class="text-muted" id="Statut">STATUT</h5>
				<div><?php echo $row->status; ?></div>

				<h5 class="text-muted" id="Mission">MISSION</h5>
				<div><?php echo $row->mission; ?></div>

				<h5 class="text-muted" id="Symbole">SYMBOLE</h5>
				<div><?php echo $row->symbole; ?></div>

				<h5 class="text-muted" id="Vision">VISION</h5>
				<div><?php echo $row->vision; ?></div>
			<?php } ?>
			</div>
		</div>
	</div>
</section>