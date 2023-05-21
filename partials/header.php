<?php
 include("./inc/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="autor" content="Matej Svrcek">
    <meta name="description" content="Safari stranka">
    <title>Safari Kolta</title>
</head>
<body>
  <div class="header">
    <div class="slideshow-container">

      <div class="slide">
        <img src="./img/slideshow_1.jpeg" class="slideshow-image">
      </div>
    
      <div class="slide">
        <img src="./img/slideshow_2.jpeg" class="slideshow-image">
      </div>
    
      <div class="slide">
        <img src="./img/slideshow_3.jpeg" class="slideshow-image">
      </div>
    </div>
    
    <div class="header-text"> 
      <?php
      include("./partials/banner.php");
      ?>
    </div>
  </div>
  
  <nav class="navbar" id="nav">
    <img class="logo" src="./img/navbar_logo.png">

    <ul class="nav-links">
    <input type="checkbox" id="checkbox_toggle" />
    <label for="checkbox_toggle" class="hamburger">&#9776;</label>
    
    <div class="menu">
      <?php

        include("./partials/location.php");

      ?>
    <li><a href="./index.php">Home</a></li>
    <li><a href="./about.php">O nás</a></li>
    <li><a href="./gallery.php">Galéria</a></li>
    <li><a href="./contact.php">Kontakt</a></li>
    <li>
      <?php
        echo $Status->get_status();
      ?>
    </li>
    
    </div>
    </ul>
  </nav>
  </header>

  
