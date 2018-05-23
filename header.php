<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Ramón Reinier Nuñez Rondón">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fontawesome-all.min.css">
    
    
    <!-- Mi hoja CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?> 
  </head>
  <body>
   <section class="pantalla">
       <header class="cabecera">
         <div class="branding">
               <div class="container">
               <a href="<?php bloginfo('url') ?>" class="logo2 col-2">
                  <img src="<?php bloginfo('template_url') ?>/img/logo-amistad.svg" alt="">
              </a>
                <h2 class="display-4 "><?php bloginfo('name') ?></h2>
                </div>  
         </div>
          <div class="container">
              <a href="<?php bloginfo('url') ?>" class="logo">
                  <img src="<?php bloginfo('template_url') ?>/img/logo-amistad.svg" alt="Familia Amistad cd Obregón" title="<?php bloginfo('description') ?>">
              </a>
              <button type="button" class="btn-menu" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false"><i class="fas fa-bars"></i></button>
              
              <?php wp_nav_menu (array(
                        'theme_location' => 'top-menu',
                        'container' => '',
                        'menu_id' => 'menu-principal',          
                        'menu_class' => 'collapse' ))             
              ?> 
                           
          </div>           
       </header>
       <div class="videosamd">
          <div class="container">
              
              
              
          </div>          
       </div>      
   </section>