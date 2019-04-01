<?php if ($speech['post'] == 0) {
    redirect('feed');
} ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 mx-auto">
		
			<h3 class="text-center ecc_detail">Echo de la Présidence Nationale</h3>

  				<div>
                    <?php echo $speech['description']; ?>          
                </div>
                <br>

  				<h4 class="text-muted text-center"><?php echo $speech['speaker']; ?></h4>
  			
  				<footer class="text-center">
  					<strong><?php echo $speech['role']; ?></strong> 
  				</footer><br>

		</div>
	</div>
</div>