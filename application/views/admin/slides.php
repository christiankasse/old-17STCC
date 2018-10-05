<div class="container">

	<div class="row">
	  	<div class=col-md-3">
			<?php  require('layout/navbar.php'); ?>
	  	</div>

	  	<div class=" col-md-9">
		   <p>
		   	 	<a href="<?php echo site_url()?>/crud/slides" class="btn btn-primary btn-sm">Insérez les slides</a>
		   </p>

			<div class="table-responsive-sm">
				<table class="table table-hover">

					<thead>
				    <tr>
				      	<th scope="col">Photo</th>
				      	<th scope="col">Titre</th>
				      	<th scope="col">Descrption</th>
				      	<th scope="col">Post</th>
				      	<th scope="col">Suppr</th>
				      	<th scope="col">Edit</th>

				    </tr>
					</thead>
					<tbody>
						<?php
							$query = $this->slide->slides();
							foreach ($query->result() as $row) {
						?>
						<tr>
							<td><img src="<?php echo base_url()."uploads/slides/".$row->url;?>" class="figure-img img-fluid rounded" alt="img slide"></td>
							<td><?php echo $row->title;?></td>
							<td><?php echo $row->content;?></td>
							<td>

								<?php if ($row->post == 0): ?>
									<a href="<?php echo site_url() ?>/crud/active_slide/<?php echo $row->slug ?>" class="btn btn-warning btn-sm">post</a>

								<?php else: ?>
									<a href="<?php echo site_url() ?>/crud/desactive_slide/<?php echo $row->slug ?>" class="btn btn-success btn-sm">post</a>
								<?php endif ?>
							</td>

							<td>
								<a href="<?php echo site_url() ?>/crud/delete_slide/<?php echo $row->slug ?>" class="btn btn-danger btn-sm">Suppr</a>
							</td>
							<td><a href="<?php echo site_url() ?>/crud/edit_slides/<?php echo $row->slug ?>" class="btn btn-primary btn-sm">Editer</a></td>
						</tr>
						<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>