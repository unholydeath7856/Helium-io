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
            <div class="select-container"></div>
            <select id="select" class="state js-select-skin" name="state">
              <option value="Al">Alabama</option>
              <option value="Ak">Alaska</option>
              <option value="Az">Arizona</option>
              <option value="Ar">Arkansas</option>
              <option value="Ca">California</option>
              <option value="Co">Colorado</option>
              <option value="Ct">Connecticut</option>
              <option value="De">Deleware</option>
              <option value="Fl">Florida</option>
              <option value="Ga">Georgia</option>
              <option value="Hi">Hawaii</option>
              <option value="Id">Idaho</option>
              <option value="Il">Illinois</option>
              <option value="In">Indiana</option>
              <option value="Ia">Iowa</option>
              <option value="Ks">Kansas</option>
              <option value="Ky">Kentucky</option>
              <option value="La">Louisiana</option>
              <option value="Me">Maine</option>
              <option value="Md">Maryland</option>
              <option value="Ma">Massachusetts</option>
              <option value="Mi">Michigan</option>
              <option value="Mn">Minnesota</option>
              <option value="Ms">Mississippi</option>
              <option value="Mo">Missouri</option>
              <option value="Mt">Montana</option>
              <option value="Ne">Nebraska</option>
              <option value="Nv">Nevada</option>
              <option value="Nh">New Hampshire</option>
              <option value="Nj">New Jersey</option>
              <option value="Nm">New Mexico</option>
              <option value="Ny">New York</option>
              <option value="Nc">North Carolina</option>
              <option value="Nd">North Dakota</option>
              <option value="Oh">Ohio</option>
              <option value="Ok">Oklahoma</option>
              <option value="Or">Oregan</option>
              <option value="Pa">Pennsylvania</option>
              <option value="Ri">Rhode Island</option>
              <option value="Sc">South Carolina</option>
              <option value="Sd">South Dakota</option>
              <option value="Tn">Tennessee</option>
              <option value="Tx">Texas</option>
              <option value="Ut">Utah</option>
              <option value="Vt">Vermont</option>
              <option value="Va">Virgina</option>
              <option value="Wa">Washington</option>
              <option value="Wv">West Virginia</option>
              <option value="Wi">Wisconsin</option>
              <option value="Wy">Wyoming</option>
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
    <script src="Assets/Scripts/JS/customize-input.js"></script>
    <script src="Assets/Scripts/JS/functions.js"></script>
  </body>
</html>
