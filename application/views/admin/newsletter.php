<div class="container">

	<div class="row">
	  	<div class=col-md-3">
			<?php  require('layout/navbar.php'); ?>
	  	</div>

	  	<div class=" col-md-9">
	  		<p><a href="" class="btn btn-success btn-sm">Envoie multiple</a></p>
			<div class="table-responsive-sm">
				<table class="table table-hover">

					<thead>
				    <tr>
				      	<th scope="col">Nom</th>
				      	<th scope="col">Email</th>
				      	<th scope="col">status</th>
				    </tr>
					</thead>
					<tbody>

						<?php
							$query = $this->newsletter->newsletter();
							foreach ($query->result() as $row) {
						?>
						
						<tr>
							
							<td><?php echo $row->name;?></td>
							<td><i><?php echo $row->email;?></i></td>
							<td>---</td>
							<td><a href="<?php echo site_url()?>/crud/newsletter" class="btn btn-success btn-sm">Envoyez un Email</a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>