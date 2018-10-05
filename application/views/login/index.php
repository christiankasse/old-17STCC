<div class="container">
	<div class="row">
		<div class="col-sm-5 mx-auto">
			<div class="card border-dark mb-3" >
				<div class="card-header bg-transparent border-dark text-center">
					<h4>Connectez vous </h4>
				</div>

				<div class="card-body ">
					<?php if (validation_errors()) {?>
						<div class="alert alert-danger">
							<?php echo validation_errors();?>
						</div>
					<?php }?>

					<?php if (!empty($this->input->get('msg')) && $this->input->get('msg') == 1) {?>
						<div class="alert alert-success text-center">
							<strong>Votre accès doit etre garantie par votre Administrateur</strong>
						</div>
					<?php }

					if (!empty($this->input->get('msg')) && $this->input->get('msg') == 2) {?>
						<div class="alert alert-danger text-center">
							<strong>Contactez votre administrateur pour  votre niveau d'accès</strong>
						</div>

						<div class="alert alert-success text-center">
							Entrez votre email et le mot de passe
						</div>
					<?php }?>



					<?php echo form_open('login/dologin');?>
					<div class="form-group">
						    <input type="text" name="email" class="form-control" id="email" placeholder="Votre email">
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe">
					</div>

					<div class="form-group">
						<a href="#">Mot de passe oublie</a>
					</div>

					<div class="form-group pull-right">
					    <button type="submit" id="login" class="btn btn-primary btn-sm">Connexion</button>
					</div>
					<?php echo form_close();?>
				</div>

				<div class="card-footer bg-transparent border-dark">
					Nouveau chez nous ? <a href="<?php echo site_url()?>/login/register">Créez un compte ECC</a>
				</div>
			</div>
		</div>
	</div>
</div>