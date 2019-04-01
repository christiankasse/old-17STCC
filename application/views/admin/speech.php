<div class="container">

	<div class="row">
	  	<div class=col-md-3">
			<?php  require('layout/navbar.php'); ?>
	  	</div>

	  	<div class=" col-md-9">
		   <p>
		   	 	<a href="<?php echo site_url()?>/crud/speech" class="btn btn-primary btn-sm">Insérez une citation</a>
		   </p>

			<div class="table-responsive-sm">
				<table class="table table-hover">

					<thead>
				    <tr>
				      	<th scope="col">Nom</th>
				      	<th scope="col">Role</th>
				      	<th scope="col">Message</th>
				      	<th scope="col">Post</th>

				    </tr>
					</thead>
					<tbody>

						<?php
							$query = $this->speech->speech();
							foreach ($query->result() as $row) {
						?>
						<tr>
							<td><?php echo $row->speaker; ?></td>
							<td><strong><?php echo $row->role; ?></strong></td>
							
							<td><i><?php echo word_limiter($row->description, 20); ?></i></td>

							<td>

								<?php if ($row->post == 0): ?>
									<a href="<?php echo site_url() ?>/crud/active_speech/<?php echo $row->slug ?>" class="btn btn-warning btn-sm">post</a>

								<?php else: ?>
									<a href="<?php echo site_url() ?>/crud/desactive_speech/<?php echo $row->slug ?>" class="btn btn-success btn-sm">post</a>
								<?php endif ?>
							</td>
							<td>
								<a href="<?php echo site_url() ?>/crud/delete_speech/<?php echo $row->slug ?>" class="btn btn-danger btn-sm">Suppr</a>
							</td>
							<td><a href="<?php echo site_url() ?>/crud/edit_speech/<?php echo $row->slug ?>" class="btn btn-primary btn-sm">Editer</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>