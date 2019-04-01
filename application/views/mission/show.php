<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
			
			<h3 class="text-center ecc_detail"><?php echo $feed['title']; ?></h3>

			<figure>
				<img class="first-slide img-fluid" src="<?php echo base_url("uploads/feed/").$feed['url'] ?>" alt="First slide">
			</figure>

			<div>
				<?php echo $feed['description']; ?>
			</div>
		</div>
		

	</div>
</div>