<section class="nav_current">
	<div class="container">
		<p>
			Actualités
		</p>
	</div>
</section>

<div class="container">
	<section class="news">
		<h2>Dernières Nouvelles et Activités</h2>
		<?php 
			$this->db->from('news');
			$this->db->where('post', 1); 
		 ?>
		 <?php if ($this->db->count_all_results() == 0): ?><br><br>
		 	<div class="alert alert-info text-center">
		 		<h5>Il n' ya pas d'actualités à votre porté, veillez passer ulterieurement</h5>
		 		<h5>Nous vous rémercions de votre visite ! </h5>
		 	</div><br><br>
		 <?php endif ?>
		<div class="row">

			<?php
				$query = $this->news->getAllNews();
				foreach ($query->result() as $row) {
			?>

			<div class="col-md-3">
				
					<figure class="text-center">
						<img style="width: 200pt ;height: 200pt" src="<?php echo base_url().'uploads/news/'. $row->url?>" class="img-fluid">
					</figure>

					<div class="card-body">
						<p class="card-text">
							<span class=""><small>Postée le <?php echo $row->created_at; ?></small></span>
						</p>
						<p class="card-text text-center" style="font-size: 15pt">
							<a href="<?php echo site_url().'/news/show/'.$row->slug ?>"> 
								<strong><?php echo $row->title; ?></strong> 
							</a>
						</p>
						<?php echo word_limiter($row->description, 20); ?>
					</div>
			
			</div>
			<?php } ?>
		</div>
	</section>
</div>