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
          <a href="#"><?= bloginfo('name'); ?></a>
        </div>
        <div class="navbar__formations">
            <a href="#" class="session__log-in"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>Formations</a>
        </div>
        <form action="">
          <p>
            <input type="search" id="search" value="Recherchez" placeholer="">
            <i class="fa fa-search" aria-hidden="true"></i>
          </p>
        </form>
        <div class="menu-bg"></div>
        <div class="menu-burger"><i class="fa fa-bars" aria-hidden="true"></i>
          <i class="fa fa-close" aria-hidden="true"></i></div>
        <div class="menu-items">
          <form class="searchform cf">
            <input type="text" placeholder="Recherchez">
            <i class="fa fa-search" aria-hidden="true"></i>
          </form>
          <a href="#">Formations</a>
          <a href="#">A propos</a>
          <a href="#">Contact</a>
          <a href="#">Connexion</a>
          <a href="#">Inscription</a>
          <a href="#">Aide</a>
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-instagram" aria-hidden="true"></i>
          <i class="fa fa-linkedin" aria-hidden="true"></i>
          <p>
            Copyright 2020 - O'training
          </p>
          

          <!-- <p class="navbar__burger__copyright">Copyright 2020 <i class="fa fa-copyright" aria-hidden="true"></i>- O'training</p> -->
        </div>
        <div class="session">
          <a href="#" class="session__log-in">Connexion</a>
          <a href="#" class="session__sign-up">Inscription</a>
        </div>
      </div>
    </header>