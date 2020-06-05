<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
 
</head>
<body>
    <header>
      <div class="navbar">
        <div class="navbar__logo">
          <a href="<?php echo home_url(); ?>">O'training</a>
        </div>

        <div class="menu-desktop">
          <ul id="menu">
            <li>
        <div class="navbar__formations">
            <a href="#" class="drop menu-title session__log-in"><i class="drop fa fa-chevron-circle-down" aria-hidden="true"></i>Formations</a>
        </div>

        <div class="dropdown_4columns">
                           
          <div class="col_1 col_categories">
                               
            <h3>Catégories de Formation</h3>
              <ul>
                <li><a href="#">Art</a></li>
                <li><a href="#">Musique</a></li>
                <li><a href="#">Immobilier</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Informatique</a></li>
                <li><a href="#">Art</a></li>
                <li><a href="#">Musique</a></li>
                <li><a href="#">Immobilier</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Informatique</a></li>
              </ul>   
                                    
          </div>
                       
          <div class="col_1">
                               
            <p>Nouveau sur le site ? Faite un tour sur nos formations 100% gratuites</p>  
            <a href="<?php echo home_url(); ?>/inscription"><button class="col_button">Formations gratuite</button></a>
            <p>Vous souhaitez partager vos connaissances en creant facilement une formation ?</p>  
            <a href="<?php echo home_url(); ?>/devenir-formateur"><button class="col_button">Devenez Formateur</button></a>
                                  
                                    
            </div>
                       
            <div class="col_1">
           
              <p class= "strong">Eleves ou formateur, l'inscription à o'training est 100% gratuite !</p>
                <ul class="inline">
                  <li><a href="<?php echo home_url(); ?>/a-propos">A propos</a></li>
                  <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
                  <li><a href="<?php echo home_url(); ?>/aide">Aide</a></li>
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </ul>
            </div>
         </div>
      </li>
   </ul>
</div>
<div class="jirei-post-list">
          <?php echo do_shortcode('[ivory-search id="107" title="Default Search Form"]'); ?>
        </div>
        <div class="menu-bg"></div>
        <div class="menu-burger"><i class="fa fa-bars" aria-hidden="true"></i>
          <i class="fa fa-close" aria-hidden="true"></i></div>
        <div class="menu-items">
          <form class="searchform cf">
            <input type="text" placeholder="Recherchez">
            <i class="fa fa-search" aria-hidden="true"></i>
          </form>
          <a href="<?php echo home_url(); ?>/catalogue">Formations</a>
          <a href="<?php echo home_url(); ?>/a-propos">A propos</a>
          <a href="<?php echo home_url(); ?>/contact">Contact</a>
          <a href="<?php echo home_url(); ?>/connexion">Connexion</a>
          <a href="<?php echo home_url(); ?>/inscription">Inscription</a>
          <a href="<?php echo home_url(); ?>/aide">Aide</a>
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-instagram" aria-hidden="true"></i>
          <i class="fa fa-linkedin" aria-hidden="true"></i>
          <p>
            Copyright 2020 - O'training
          </p>


        </div>
        <div class="session">
          <a href="<?php echo home_url(); ?>/connexion" class="session__log-in">Connexion</a>
          <a href="<?php echo home_url(); ?>/inscription" class="session__sign-up">Inscription</a>
        </div>
      </div>
    </header>