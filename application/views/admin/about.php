<div class="container">

	<div class="row">
	  	<div class=col-md-3">
			<?php  require('layout/navbar.php'); ?>
	  	</div>

	  	<div class=" col-md-9">
		   <p>
		   	 	<a href="<?php echo site_url()?>/crud/presentation" class="btn btn btn-outline-primary  btn-sm"><strong>Insérez la présentation</strong></a>
		   </p>

			<div class="table-responsive-sm">
				<h4 class="text-center text-muted">PRESENTATION</h4><hr>

				<table class="table table-hover">

					<thead>
					    <tr>
					      	<th scope="col">Historique</th>
					      	<th scope="col">Status</th>
					      	<th scope="col">Mission</th>
					      	<th scope="col">Vision</th>
					      	<th scope="col">Symbole</th>
					      	<th scope="col">Post</th>
					    </tr>
					</thead>
					<tbody>
						<?php
							$query = $this->presentation->presentation();
							foreach ($query->result() as $row) {
						?>
						
						<tr>
							<td><?php echo word_limiter($row->historique, 15); ?></td>
							<td><?php echo word_limiter($row->status, 15); ?></td>
							<td><?php echo word_limiter($row->mission, 15); ?></td>
							<td><?php echo word_limiter($row->vision, 15); ?></td>
							<td><?php echo word_limiter($row->symbole, 15); ?></td>
							
							<td>
								<?php if ($row->post == 0): ?>
									<a href="<?php echo site_url() ?>/crud/active_about_presentation/<?php echo $row->slug ?>" class="btn btn-warning btn-sm">post</a>

								<?php else: ?>
									<a href="<?php echo site_url() ?>/crud/desactive_about_presentation/<?php echo $row->slug ?>" class="btn btn btn-success btn-sm">post</a>
								<?php endif ?>
							</td>

							<td><a href="<?php echo site_url() ?>/crud/view_presentation/<?php echo $row->slug ?>" class="btn btn btn-outline-primary btn-sm">Editer</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div><hr>

			<p>
		   	 	<a href="<?php echo site_url()?>/crud/fonctionnement" class="btn btn btn-outline-primary  btn-sm"><strong>Insérez le fonctionnement</strong></a>
		   </p>

			<div class="table-responsive-sm">
				<h4 class="text-center text-muted">FONCTIONNEMENT</h4><hr>
				<table class="table table-hover">

					<thead>
				    <tr>
				      	<th scope="col">Structure</th>
				      	<th scope="col">Departement</th>
				      	<th scope="col">Organismes</th>

				    </tr>
					</thead>
					<tbody>

						<?php
							$query = $this->fonctionnement->fonctionnement();
							foreach ($query->result() as $row) {
						?>

						<tr>
							<td><?php echo word_limiter($row->structure, 15); ?></td>
							<td><?php echo word_limiter($row->departement, 15); ?></td>
							<td><?php echo word_limiter($row->organisme, 15); ?></td>

							<td>
								<?php if ($row->post == 0): ?>
									<a href="<?php echo site_url() ?>/crud/active_about_fonctionnement/<?php echo $row->slug ?>" class="btn btn-warning btn-sm">post</a>

								<?php else: ?>
									<a href="<?php echo site_url() ?>/crud/desactive_about_fonctionnement/<?php echo $row->slug ?>" class="btn btn btn-success btn-sm">post</a>
								<?php endif ?>
							</td>

							<td><a href="<?php echo site_url() ?>/crud/view_fonctionnement/<?php echo $row->slug ?>" class="btn btn btn-outline-primary btn-sm">Editer</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div><hr>

			<p>
		   	 	<a href="<?php echo site_url()?>/crud/hierachie" class="btn btn btn-outline-primary  btn-sm"><strong>Insérez l'hierachie</strong></a>
		   </p>

			<div class="table-responsive-sm">
				<h4 class="text-center text-muted">HIERACHIE</h4><hr>
				<table class="table table-hover">

					<thead>
				    <tr>
				      	<th scope="col">Nom</th>
				      	<th scope="col">Fonction</th>
				      	<th scope="col">provenance</th>
				      	<th scope="col">Mandat</th>

				    </tr>
					</thead>
					<tbody>

						<?php
							$query = $this->hierachie->hierachie();
							foreach ($query->result() as $row) {
						?>

						<tr>
							<!-- <td>
								<figure>
									<img src="<?php echo base_url()."uploads/hierachie/".$row->profile;?>" class="figure-img img-fluid rounded" alt="img slide">
								</figure>
							</td> -->
							<td><?php echo $row->nom; ?></td>
							<td><?php echo $row->fonction; ?></td>
							<td><?php echo $row->provenance; ?></td>
							<td><?php echo $row->mandat; ?></td>
							

							<td>
								<?php if ($row->post == 0): ?>
									<a href="<?php echo site_url() ?>/crud/active_hierachie/<?php echo $row->slug ?>" class="btn btn-warning btn-sm">post</a>

								<?php else: ?>
									<a href="<?php echo site_url() ?>/crud/desactive_hierachie/<?php echo $row->slug ?>" class="btn btn btn-success btn-sm">post</a>
								<?php endif ?>
							</td>

							<td><a href="<?php echo site_url() ?>/crud/view_hierachie/<?php echo $row->slug ?>" class="btn btn btn-outline-primary btn-sm">Editer</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>