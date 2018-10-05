<div class="container">

	<div class="row">
	  	<div class=col-md-3">
			<?php  require('layout/navbar.php'); ?>
	  	</div>

	  	<div class=" col-md-9">
		   <p>
		   	 	<a href="<?php echo site_url()?>/crud/manage_users" class="btn btn-primary btn-sm">Ajouter un utilisateur</a>
		   </p>

			<div class="table-responsive-sm">
				<table class="table table-hover">

					<thead>
				    <tr>
				      	<th scope="col">Nom</th>
				      	<th scope="col">Nom Utilisateur</th>
				      	<th scope="col">Email</th>
				      	<th scope="col">Role</th>
				    </tr>
					</thead>
					<tbody>
						<?php
							$query = $this->login->get_user();
							foreach ($query as $row) {
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['email']; ?></td>
							
							<td>
								<div class="dropdown">
  									<button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" 		aria-expanded="false">
    									<?php echo $row['role']; ?>
  									</button>

  									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item" href="<?php echo site_url() ?>/login/active_user_r0/<?php echo $row['slug'] ?>">r0</a>
									    <a class="dropdown-item" href="<?php echo site_url() ?>/login/active_user_r1/<?php echo $row['slug'] ?>">r1</a>

									    <?php if ($row['admin'] != 1): ?>
									    	
									    	<a class="dropdown-item" href="<?php echo site_url() ?>/login/active_admin/<?php echo $row['slug'] ?>">Act. admin</a>

									    	<?php else: ?>

									    	<a class="dropdown-item" href="<?php echo site_url() ?>/login/desactive_admin/<?php echo $row['slug'] ?>">Des. Admin</a>

									    <?php endif ?>
  									</div>
								</div>
							</td>
							<td>
								<?php if ($row['status'] != 1): ?>
									<a href="<?php echo site_url() ?>/login/active_user/<?php echo $row['slug'] ?>" class="btn btn-danger btn-sm">Desactiver</a>

								<?php else: ?>
									<a href="<?php echo site_url() ?>/login/desactive_user/<?php echo $row['slug'] ?>" class="btn btn-success btn-sm">Activer</a>
								<?php endif ?>
							</td>
							
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>