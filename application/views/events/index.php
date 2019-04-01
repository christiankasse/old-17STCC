<section class="nav_current">
	<div class="container">
		<p>
			Programme et Calendrier de la Présidence Nationale
		</p>
	</div>
</section>

<div class="container">

	<section class="evenements">
		
		<h2 class="text-center">Evénements de l'an <?= date('Y'); ?></h2>

		<div class="row">
			<div class="col-md-4 text-center">

				<p>
					<?php 
						$this->db->from('events');
						$this->db->where('categorie', 'Sorties_Officielles');
						$this->db->where('post', 1);
						echo number_format($this->db->count_all_results()); 
					?>
				</p>
				<p>Sorties Officielles</p>
			</div>

			<div class="col-md-4 text-center">

				<p>
					<?php 
						$this->db->from('events');
						$this->db->where('categorie', 'Evenements_en_vues');
						$this->db->where('post', 1);
						echo number_format($this->db->count_all_results()); 
					?>
				</p>
				<p>Evénements en vues</p>
			</div>

			<div class="col-md-4 text-center">

				<p>
					<?php 
						$this->db->from('events');
						$this->db->where('categorie', 'Manifestations_entrevues');
						$this->db->where('post', 1);
						echo number_format($this->db->count_all_results()); 
					?>
				</p>
				<p>Manifestations entrevues</p>
			</div>
		</div>
	</section>

	<section class="table-events">
		<table class="table table-striped table-hover table-responsive">
			<thead>
			    <tr>
			      	<th scope="col">DATE</th>
			      	<th scope="col">EVENEMENT</th>
			      	<th scope="col">LOCALISATION</th>
			    </tr>
			</thead>

			<tbody>
				<?php
					$query = $this->events->getAllEvents();
					foreach ($query->result() as $row) {
				?>
			    <tr>

			      	<td>

						<?php 
							$date = date_create($row->date_events);
							echo date_format($date, 'd/m/Y');
						?>
			      	</td>

			      	<td><a href="<?php echo site_url().'/events/show/'.$row->slug ?>"><?= $row->title ?></a></td>
			      	<td><?= $row->location ?></td>
			    </tr>
			<?php } ?>
			</tbody>
		</table>
	</section>
</div>

<section class="upcoming">
	<div class="container">
		<div class="row">
			
			<div class="col-md-4">
				<?php
					$query = $this->events->getLastestEvents();
					foreach ($query->result() as $row) {
				?>
				<h3>Upcoming Event</h3>

				<h6><strong>Du</strong> :  
					<?php 
						$date = date_create($row->date_events);
						echo date_format($date, 'd/m/Y');
					?></h6>
				<h6><strong>Lieu</strong> : <?= $row->location ?> </h6>
			</div>

			<div class="col-md-4">
				<h5>Brève description</h5><hr>
				<?php echo word_limiter($row->description, 15); ?>
			</div>
		<?php } ?>
		</div>
	</div>
</section>