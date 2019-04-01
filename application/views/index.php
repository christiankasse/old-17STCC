<?php require 'layout/carroussel.php';?>

<div class="container"><br>	
	<section class="missions">
		<div class="row">
			<?php
					$query = $this->mission->getMission();
					foreach ($query->result() as $row) {
			?>
			<div class="col-md-4 mx-auto">
				<div class="card mb-3">
				    <div class="card-body">
				      	<h3 class="card-title text-center"><?php echo $row->title; ?></h3>
				      	<p class="card-text"><?php echo word_limiter($row->description, 15) ?></p>
				    </div>
				    <div class="card-footer">
				      	<p class="text-center"><a href="<?php echo site_url().'/feed/mission/'.$row->slug
				      	 ?>" class="btn btn-primary btn-sm">Consulter plus</a></p>
				    </div>
	  			</div>
			</div>
		<?php } ?>
		
		</div>
	</section>
</div> 

<section class="message_provider">
	<div class="container">

		<h6 style="padding-bottom: 10pt;">
			<strong>Echo de la Présidence Nationale</strong>
		</h6>
	</div>
</section>

<section class="message_presidence">
	<div class="container">

		<?php
			$query = $this->speech->getOnSpeech();
			foreach ($query->result() as $row) {
		?>
		<div style="font-size: 15pt">
			<?php echo word_limiter( $row->description, 50); ?><br>
			
			<small>
				<strong><h5>
					Du : <?php $date = date_create($row->created_at);echo date_format($date, 'd/m/Y');  ?>
				</strong></h5>
			</small>

		</div>

		<h5 class="text-right  president"><span><?php echo $row->speaker; ?></span></h5>

		<h6 class="text-right  president"><?php echo $row->role; ?></h6>
		<?php } ?>
		<p class=" col-md-2"><a href="<?php echo site_url().'/feed/speech/'.$row->slug ?>" class="btn btn-important btn-sm btn-block">Voir plus</a></p>
	</div>
</section>

<section id="center_part">
	<div class="container">
		<div class="row">

			<?php
				$query = $this->feed->getAllFeed();
				foreach ($query->result() as $row) {
			?>
			<div class="col-md-6">
				<figure>
					<img src="<?php echo base_url().'uploads/feed/'. $row->url ?>" class="img-fluid">
				</figure>
				<h4 class="text-center"><?php echo $row->title; ?></h4>

				<p>
					<?php echo word_limiter($row->description, 50); ?>
				</p>
				<p class="text-center"><a href="<?php echo site_url().'/mission/show/'.$row->slug ?>" class="btn btn-primary btn-sm">Lire plus</a></p>
			</div>
		<?php } ?>
		</div>
	</div>
</section>


