<section class="nav_current">
	<div class="container">
		<p>
			Mandataires au niveau national
		</p>
	</div>
</section>
<section class="apropos_ecc">
	
	<div class="container">
		<h3 class="text-center">Responsables au niveau national</h3><hr>

		<div class="row">
			<?php
				$query = $this->hierachie->getHierachie();
				foreach ($query->result() as $row) {
			?>
			<div class="col-md-3 mx-auto">
				<div class="card border-dark mb-3">
				  	<div class="card-header text-center"><h5>
				  		<!-- <a href="<?php echo site_url().'/about/profile/'.$row->slug ?>"><?php echo $row->nom; ?></a> -->
				  	<h6 class="text-primary"><?php echo $row->nom; ?></h6>	
				  	</h5></div>
				  	<div class="card-body text-dark">
					   
					    <h6 class="text-center text-muted">
					    	<strong><?php echo strtoupper($row->fonction); ?></strong>
					    </h6><hr>

					    <h6 class="text-center text-muted">
					    	<strong>Provenance</strong> <br>
					    	<?php echo $row->provenance; ?>
					    </h6><hr>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</section>