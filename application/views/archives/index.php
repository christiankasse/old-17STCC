<section class="nav_current">
	
	<div class="container">
		<p>
			Archives
		</p>
	</div>
</section>
<div class="container">
<section class="archives">

	<?php 
			$this->db->from('archives');
			$this->db->where('post', 1); 
		 ?>
		 <?php if ($this->db->count_all_results() == 0): ?><br><br>
		 	<div class="alert alert-info text-center">
		 		<h4>Nous ne disposons pas des Archives à vous présenter, veillez passer ulterieurement</h4>
		 		<h4>Nous vous rémercions de votre visite ! </h4>
		 	</div><br><br>
		 <?php endif ?>
	
	<div class="row">
		<?php
			$query = $this->archives->getAllArchives();
			foreach ($query->result() as $row) {
		?>
		<div class="col-md-4">
			<div class="card">
		    	<figure>
					<img  src="<?php echo base_url().'uploads/archives/'. $row->image?>" class="img-fluid">
				</figure>
		    	<div class="card-body">
		      	<h6 class="card-title text-center"><a href="<?= site_url().'/archives/show/'.$row->slug ?>"><?= $row->title ?></a></h6>
		      	<p class="card-text"><?= word_limiter($row->description, 10) ?></p>
		      	<p class="card-text">
		      		<small class="text-muted">publié le <?= $row->created_at ?></small>
		      	</p>
		      	<p class="card-text text-center"><?= $row->location ?></p>
		    	</div>
		  	</div>
		</div>
	<?php } ?>
	</div>
</section>
</div>