<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href=<?php  get_template_directory_uri().'/assets/images/favicon.png' ?> type="">

      <?php wp_head() ?>
 
       </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section py-3">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href=""><?php 
    if (function_exists('the_custom_logo')) {
        the_custom_logo(); 
      } 
      else {
        echo get_bloginfo('name');
      }
      ?></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                     <?php 
                        wp_nav_menu(
                          array(
                            'menu'=>'primary',
                            'container'=>'',
                            'theme_location'=>'primary',
                            'items_wrap'=>'<ul class="navbar-nav me-auto mb-2 mb-lg-0" id="">%3$s</ul>'
                          )
                        );
                    ?>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->