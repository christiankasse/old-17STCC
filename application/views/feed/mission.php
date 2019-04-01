<?php if ($mission['title'] == 'Nos communautés'): ?>

	<section class="nav_current">
	<div class="container">
		<p>
			<strong>Communautés constitutives de l'ECC</strong><br>
			<span>[<?php 
						$this->db->from('community');
						$this->db->where('post', 1);
						echo number_format($this->db->count_all_results()); 
					?> Communautés]</span>
		</p>
	</div>
</section>

<div class="container">
	<div class="row">
		<?php
			$query = $this->community->getAllcommunity();
			foreach ($query->result() as $row) {
		?>
		<div class="col-xs-4 col-sm-4 col-md-3 ">
			<div class="card border-dark mb-3">
			  	<div class="card-header text-center"><h4><?php echo $row->name; ?></h4></div>
			  	<div class="card-body text-dark">
				    <h6 class="card-title">
				    	<a href="<?php echo site_url().'/feed/community/'.$row->slug ?>">
				    		<?php echo $row->denomination; ?>
				    	</a>
				    </h6>
				    
				   	<div class="card-text">
				    	<?php echo word_limiter($row->description, 10); ?>
				    </div><hr>

				    <h6 class="text-center">
				    	Siège Social<br>
				    	<span class="text-muted"><strong><?php echo $row->siege; ?></strong></span>
				    </h6><hr>

				    <h6 class="text-center">
				    	Répresentant Légal<br>
				    	<span class="text-muted"><?php echo $row->representant; ?></span>
				    </h6>
				  </div>
			</div>
		</div>
	<?php }	 ?>
	</div>
	
</div>
<?php else: ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			
			<h3 class="text-center ecc_detail"><?php echo $mission['title']; ?></h3>

			<figure>
				<img class="first-slide img-fluid" src="<?php echo base_url()?>assets/images/bootstrap-social.png" alt="First slide">
			</figure>

			<p><?php echo $mission['description']; ?></p>
		</div>
		

	</div>
</div>
<?php endif ?>