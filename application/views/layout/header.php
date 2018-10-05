<?php if (!empty($this->input->get('connect')) 
        && $this->input->get('connect') == 'user' 
        && $this->session->userdata('name')
    ):
?>
    <br>

    <div class="alert alert-success text-center connect" role="alert">

        <strong>
            <?php echo strtoupper($this->session->userdata('name'))?>&nbsp;
            <?php echo strtoupper($this->session->userdata('lastname')); ?>, 
            Bienvenue à l'Eglise du Christ au Congo
        </strong><br>

        Votre indentifiant pour les forums et actualités est soit votre adresse email 
        <strong>[<?php echo $this->session->userdata('email'); ?>]</strong> soit  
        <strong><?php echo $this->session->userdata('name'); ?></strong>
    </div>
    
<?php $this->session->unset_userdata('name'); ?>

<?php endif ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.ico">
        <title>Eglise du Christ au Congo</title>

        <link type="text/css" href="<?php echo css_url('bootstrap.min')?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url()?>assets/stylesheets/main.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url()?>assets/stylesheets/responsive.css" rel="stylesheet">

      
        <link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/ux/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/ux/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/ux/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="//img1.wsimg.com/ux/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/ux/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/ux/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/ux/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/ux/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/ux/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="//img1.wsimg.com/ux/favicon/android-icon-192x192.png">
        
        <link rel="icon" type="image/png" sizes="32x32" href="//img1.wsimg.com/ux/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="//img1.wsimg.com/ux/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="//img1.wsimg.com/ux/favicon/favicon-16x16.png">
        <link rel="mask-icon" href="//img1.wsimg.com/ux/favicon/favicon-16x16.svg" color="black">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="//img1.wsimg.com/ux/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff"> 

    </head>
<body>
<?php require 'navbar.php';?>

