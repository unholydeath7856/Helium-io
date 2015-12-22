<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Helium.io</title>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,700' rel='stylesheet' type='text/css'>
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
          <li class="nav-item active"><a class="nav-item-link" href="#top">Top</a></li>
          <li class="nav-item"><a class="nav-item-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-item-link" href="#submit">Submit</a></li>
          <li class="nav-item"><a class="nav-item-link" href="#map">Map</a></li>
          <li class="nav-item"><a class="nav-item-link" href="#bot">Bottom</a></li>
        </ul>
      </div>
    </div>

    <header id="top" class="header">
      <h2 class="hero-title">Helium.io</h2>
      <h4 class="hero-kicker">A simple US State Map Application</h4>
    </header>

    <section id="about" class="about">
      <div class="container">
        <div class="col-1">
          <h3 class="col-header">About</h3>
          <p class="col-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac metus nec magna ullamcorper iaculis. Donec sagittis nibh quis sollicitudin faucibus. Praesent vel posuere mauris. In lacinia lectus diam, a aliquam nisi lobortis in. Nulla facilisi. Cras rutrum eros ac dolor porttitor pellentesque. Nunc ac aliquam massa, sed sollicitudin sem.
Mauris turpis ligula, pharetra quis auctor eu, convallis sit amet purus. Etiam eget quam a nulla egestas consequat. Vivamus dapibus ultricies lorem vel ullamcorper. Donec suscipit efficitur mi sed egestas. Pellentesque ornare a dolor et sollicitudin. Aliquam semper nunc eros, vitae feugiat neque eleifend congue. Vivamus eleifend risus eu tincidunt sagittis. Mauris suscipit, ex id volutpat fringilla, odio magna finibus risus, vitae lacinia mi felis consectetur mi.
          </p>
        </div>
        <div class="col-2">
          <h3 class="col-header">How To Use</h3>
          <p class="col-text">
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam in tempus velit, sit amet dictum mauris. Curabitur laoreet finibus facilisis. Nam condimentum, dolor auctor egestas dapibus, enim eros pellentesque turpis, quis vehicula ex leo ut nibh. Donec at elit consectetur, porttitor justo nec, consequat ligula. In molestie tempus efficitur. Morbi fermentum ut turpis vitae ultricies. Vivamus rhoncus nisi lorem, id porttitor massa tempus quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus lacus nunc, vestibulum eget risus ac, mattis malesuada libero. Maecenas lobortis in tellus eget volutpat. Proin commodo vitae arcu vitae iaculis.
Etiam interdum metus iaculis eros ornare, eget efficitur metus fringilla. Morbi pretium facilisis lorem, in condimentum mi malesuada a. Vestibulum in neque leo. Donec venenatis placerat finibus. Donec condimentum metus eros, a tristique lectus blandit a. Cras congue urna urna, sit amet sodales massa varius sed. Proin id velit facilisis lacus posue
          </p>
        </div>
      </div>
    </section>

    <section id="submit" class="submit-section">
      <div class="container">
        <h3 class="section-header">Submit</h3>
          <form class="map-submit" action="index.php" method="post">
            <select class="state" name="state">
              <option value="Al">Alabama</option>
              <option value="Ak">Alaska</option>
            </select><br>
            <label for="map-style">Road</label><input class="map-style" type="radio" name="name">
          </form>
      </div>
    </section>

    <section id="map" class="map">
      <div id="" class="map">

      </div>
    </section>

    <footer id="bot" class="footer">

    </footer>
    <script src="Assets/Scripts/JS/jquery.js"></script>
    <script src="Assets/Scripts/JS/functions.js"></script>
  </body>
</html>
