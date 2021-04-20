<?php
session_start();

    include("connections.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<html>
    <head>
        <title>HomePage
        </title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <section class="sec-games">
          <div class="row">
            <form action="login.php">
              <input type="submit" name="" value="Logout">
         </form> 
              <h1>Top Games</h1>
            <div class="col-1">
              <a href="https://www.ea.com/en-gb/games/fifa/fifa-21">
                <h2>FIFA 21</h2>
                <img src="6890.jpg"/>
              </a>
            </div>
            <div class="col-2">
              <a href="https://www.playstation.com/en-us/games/the-last-of-us-part-ii/">
                <h2>The Last of Us Part II</h2>
                <img src="220px-TLOU_P2_Box_Art_2.png"/>
              </a>
            </div>
            <div class="col-3">
              <a href="https://www.playstation.com/en-us/games/marvels-spider-man-miles-morales/">
                <h2>Marvel's Spider-Man</h2>
                <img src="Spider-Man_Miles_Morales.jpeg"/>
              </a>
            </div>
            <div class="col-4">
              <a href="https://nba.2k.com/">
                <h2>NBA 2K21</h2>
                <img src="NBA_2K21_-_Damian_Lilliard_cover_art.jpg"/>
              </a>
            </div>
          </div>
          </section>
          <footer>
          <div class="col-5">
            <h2>Categories</h2>
            <ul class="footer-cat">
              <li><a href="https://store.steampowered.com/">Action</a></li>
              <li><a href="https://store.steampowered.com/">Puzzle</a></li>
              <li><a href="https://store.steampowered.com/">RPG</a></li>
              <li><a href="https://store.steampowered.com/">Simulation</a></li>
              <li><a href="https://store.steampowered.com/">Sport</a></li>
              <li><a href="https://store.steampowered.com/">Strategy</a></li>
           </ul>
          </div>
          <div class="col-5">
          <h2>Platforms</h2>
          <ul class="footer-platforms">
            <li><a href="https://www.ea.com/en-gb/games/library/pc-download">PC</a></li>
            <li><a href="https://www.playstation.com/en-us/ps4/">PS4</a></li>
            <li><a href="https://www.gametop.com/category/windows-vista-games.html">Vita</a></li>
            <li><a href="https://www.xbox.com/en-IN/consoles/xbox-one-s">Xbox One</a></li>            
            <li><a href="https://www.metacritic.com/browse/games/score/metascore/all/wii-u/filtered">Wii U</a></li>
            <li><a href="https://www.nintendo.com/games/3ds/nintendo-3ds-games-with-dlc/">3DS</a></li>
          </ul>
          </div>
          </footer>
        </div>
    </body>
</html> 