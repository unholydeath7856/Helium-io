<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Helium.io</title>
    <link rel="stylesheet" href="Assets/Styles/CSS/main.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="nav-button">
      <img src="Assets/Images/MenuBar.png" alt="NavBtn" />
    </div>
    <div class="navbar-pop">
      <div id="target-nav" class="navbar-container">
        <h2>Helium.io</h2>
        <ul class="nav-list">
          <li class="nav-item"><a class="nav-item-link" href="#top">Top</a></li>
          <li class="nav-item"><a class="nav-item-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-item-link" href="#submit">Submit</a></li>
          <li class="nav-item"><a class="nav-item-link" href="#map">Map</a></li>
          <li class="nav-item"><a class="nav-item-link" href="#bot">Bottom</a></li>
        </ul>
      </div>
    </div>

    <header id="top" class="header">

    </header>

    <section id="about" class="about">

    </section>

    <section id="map" class="map">
      <div class="submit">
        <form class="map-submit" action="index.php" method="post">
           <select class="state" name="state">
             <option value="Al">Alabama</option>
             <option value="Ak">Alaska</option>
           </select>
        </form>
      </div>
      <div id="" class="map">

      </div>
    </section>

    <footer id="bot" class="footer">

    </footer>
    <script src="Assets/Scripts/JS/jquery.js"></script>
    <script src="Assets/Scripts/JS/functions.js"></script>
  </body>
</html>
