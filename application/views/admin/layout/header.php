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
        <meta name="theme-color" content="#ffffff"> 
        <script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>

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

