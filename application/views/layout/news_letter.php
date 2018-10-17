<div id="newsletter">

    <?php if (!empty($this->input->get('msg')) 
            && $this->input->get('msg') == 'news_accept' 
            && $this->session->userdata('news_accept') == TRUE
        ):
    ?>
    
    <div class="alert alert-success text-center news_accept" role="alert"><br>
        <h4 class="alert-heading"><strong>Enregistrement au Newsletter!</strong></h4><hr>
        
        <p><strong><?php echo '<strong>'.strtoupper($this->session->userdata('name')).'</strong>'; ?></strong> bienvenue au Newsletter de l'ECC, vous venez de vous enregitrez à notre newsletter</p>
        <p >Merci de votre confiance, et decouvrez toutes informations concernant l'ECC partant de votre adress email !</p>
    </div>

    <?php $this->session->unset_userdata('news_accept'); ?>

    <?php endif ?>
</div>


<div id="email_error">
    
<?php if (!empty($this->input->get('msg')) 
            && $this->input->get('msg') == 'error_email' 
            && $this->session->userdata('error_email') == TRUE
        ):
    ?>
    <br>    
    <div class="alert alert-warning  text-center error_email" role="alert">
        <h6 class="alert-heading"><strong><?php echo strtoupper($this->session->userdata('name')); ?></strong>, Cet Email est déjà utilisé essayé un autre !</h6>
    </div>

    <?php $this->session->unset_userdata('error_email'); ?>
    <?php endif ?>
</div>

<section id="footer_mail">
    <div class="container">
        <div class="col-md-8 mx-auto text-center">
        <h5>Recevez continuellement notre newsletter</h5><br>
        
            <?php echo form_open(site_url('crud/upload_newsletter')); ?>
            <div class="form-row">
                <div class="col-md-6 mb-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Inserez votre nom" required>
                </div>
                <div class="col-md-6 mb-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Inserez votre adress email" required>
                </div>
            </div>
            
            <div class="form-group text-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="news_accept" name="status" required>
                    J'accepte les termes et conditions. <a href=""><i>Lire les termes et conditions</i></a>
                </div>
            </div>
            <p>
                <button class="btn btn-primary btn-sm"  type="submit">Accéptez et Enregistrez</button>
            </p> 
        </form>
    </div>
    </div>
</section>