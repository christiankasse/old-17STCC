<section class="nav_current">
	<div class="container">
		<p>
			<?php echo $community['denomination']; ?>
		</p>
		<span>[ <?php echo $community['email']; ?> ]</span>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
		  	<div class="card-body text-dark">
			   	<h2 class="card-title text-primary "><?php echo $community['name']; ?></h2>
			   	<small class="text-muted">[<?php echo $community['denomination']; ?>]</small><hr>

			   	<div class="card-text">
			    	<?php echo $community['description']; ?>
			    </div>

			    <p>
			    	Siège social: 	<strong>
			    						<span class="text-muted"><?php echo $community['siege']; ?></span>
			    					</strong>
			    </p>
			    <hr>

			    <h5>
			    	Répresentant Légal<br>
			    	<span class="text-muted"> 
			    		<strong><?php echo $community['representant']; ?></strong>
			    	</span>
			    </h5>
			</div>
		</div>
	</div>
</div>