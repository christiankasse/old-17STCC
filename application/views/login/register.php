<div class="container">
	<div class="row">
		<div class="col-sm-5 mx-auto">
			<div class="card border-dark mb-3" >
				<div class="card-header bg-transparent border-dark text-center">
					<h4>Crée un compte ECC</h4>
				</div>

				<div class="card-body ">
					<?php if (validation_errors()) {?>
						<div class="alert alert-danger">
						<?php echo validation_errors();?>
						</div>
						<?php }?>

					<?php if (!empty($this->input->get('msg')) && $this->input->get('msg') == 'email_adress') {?>
						<div class="alert alert-danger text-center">
							Votre adresse email est déjà utilisé <br>Essayez un autre
						</div>

						<?php }?>

					    <?php echo form_open('login/actionregister');?>
					<div class="form-group">
					    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Prenom">
					</div>
					<div class="form-group">
					    <input type="text" name="name" class="form-control" id="name" placeholder="Nom">
					</div>
					<div class="form-group">
					    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
					</div>
					<div class="form-group">
					    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
					</div>
					<div class="form-group">
					    <input type="password" name="confirm_password" class="form-control" id="confirm-password" placeholder="Confirmez votre mot de passe">
					</div>
					<div class="form-group pull-right">
					    <button type="submit" id="register" class="btn btn-primary btn-sm">Inscription</button>
					</div>
					<?php echo form_close();?>
				</div>

			</div>

			<div class="card-footer bg-transparent border-dark">
				Vous avez déjà un compte ? <a href="<?php echo site_url()?>/login">Connexion</a>
			</div>
		</div>
	</div>
</div>

