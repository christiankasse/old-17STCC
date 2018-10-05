<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.ico">
        <title>Eglise du Christ au Congo</title>

        <link href="<?php echo base_url()?>assets/stylesheets/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/stylesheets/main.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/stylesheets/responsive.css" rel="stylesheet">

      
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


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="<?php echo site_url()?>/admin/feed">ECC Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url()?>/admin/feed">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url() ?>/admin/newsletter">
                    Newsletter
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    Administration
                </a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url() ?>/admin/manager_users">
                    Users
                </a>
            </li>

            <li class="nav-item">
                 <a class="nav-link" href="#">
                    <strong><?php echo $this->session->userdata('username'); ?></strong>
                </a>    
            </li>

            <!-- <li class="nav-item">
                 <a class="nav-link" href="<?php //echo site_url() ?>/login/logout">
                    <strong><?php //echo $this->session->userdata('username'); ?></strong>
                </a>    
            </li> -->
        </ul>
    </div>
</nav>

