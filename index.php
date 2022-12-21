<?php
    $title = 'Home'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 


?>
   
   
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators 
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  -->
   
  <!-- Heading-->
  <br>

  <h1 class="text-center">Welcome to Anime Central</h1>
  <br>

  <!-- The slideshow -->
  <div class="carousel-inner ">
    <div class="carousel-item active">

      <img src="images/noblesse.jpg" class="d-block w-100" alt="Noblesse">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/anime.png" class="d-block w-100" alt="Anime">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/sword.png" class="d-block w-100" alt="Sword Art Online">
      <div class="carousel-caption d-none d-md-block">
      </div>
        </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<br>
<br>
<h4 class="text-center"> New Anime Releases </h4>

<br>

<div class="container text-center">
  <div class="row">
    <div class="col">
    <img src="images/spy.jfif" class="rounded float-start" alt="Spy X Family">
    <a href="https://www.crunchyroll.com/series/G4PH0WXVJ/spy-x-family" class="list-group-item bg-dark">Spy X Family Season 2</a>
    </div>

    <div class="col">
    <img src="images/devil.png" class="rounded float-end" alt="The Devil is a Part-Timer">
    <a href="https://www.crunchyroll.com/series/GR75Z5KKY/the-devil-is-a-part-timer" class="list-group-item bg-dark">The Devil is a Part-Timer</a>
    </div>

    <div class="col">
    <img src="images/bleach.jpg" class="rounded float-end" alt="Bleach">
    <a href="https://www.crunchyroll.com/series/GG5H5XK80/bleach-international-dubs" class="list-group-item bg-dark">Bleach</a>
    </div>

    <div class="col">
    <img src="images/mob.jpg" class="rounded float-end" alt="Mob Psycho 100">
    <a href="https://www.crunchyroll.com/series/GY190DKQR/mob-psycho-100" class="list-group-item bg-dark">Mob Psycho 100 Season 3</a>
    </div>
  </div>
</div>


<br>
<br>
<h4 class="text-center"> Popular Anime </h4>

<br>

<div class="container text-center">
  <div class="row">
    <div class="col">
    <img src="images/luffy.jpeg" class="rounded float-start" alt="One Piece">
    <a href="https://www.crunchyroll.com/series/GRMG8ZQZR/one-piece" class="list-group-item bg-dark">One Piece</a>
    </div>
    
    <div class="col">
    <img src="images/Hero.png" class="rounded float-end" alt="My Hero Acadamia">
    <a href="https://www.crunchyroll.com/series/G6NQ5DWZ6/my-hero-academia" class="list-group-item bg-dark">My Hero Acadamia</a>
    </div>

    <div class="col">
    <img src="images/death.jpg" class="rounded float-end" alt="Death Note">
    <a href="https://www.crunchyroll.com/series/G6QWD3EE6/death-note" class="list-group-item bg-dark">Death Note</a>
    </div>

    <div class="col">
    <img src="images/naruto.jpeg" class="rounded float-end" alt="Naruto Shippuden">
    <a href="https://www.crunchyroll.com/series/GYQ4MW246/naruto-shippuden" class="list-group-item bg-dark">Naruto Shippuden</a>
    </div>
  </div>
</div>

<br>
<br>

<h4 class="text-left"> Trending </h4>

<div class="list-group">
  <a href="crunchyroll.com/series/GVDHX8QNW/chainsaw-man" class="list-group-item list-group-item-action active bg-dark" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">1. Chainsaw Man</h5>
      <small>1 day ago</small>
    </div>
    <img src="images/chainsaw.png" class="rounded float-end" alt="Chainsaw Man">
    <small>Episode 4</small>

  </a>
  <a href="https://www.crunchyroll.com/series/GR75Q020Y/boruto-naruto-next-generations" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">2. Boruto: Naruto Next Generation</h5>
      <small class="text-muted">2 days ago</small>
    </div>
    <img src="images/boruto.png" class="rounded float-end" alt="Boruto: Naruto Next Generation">
    <small class="text-muted">Episode 202</small>
  </a>
  <a href="https://www.crunchyroll.com/series/G69PZ5PDY/overlord" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">3. Overlord Season 4</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <img src="images/overlord.png" class="rounded float-end" alt="Overlord Season 4">
    <small class="text-muted">Episode 24</small>
    </a>
    <a href="https://www.crunchyroll.com/series/GR751KNZY/attack-on-titan" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">4. Attack on Titan- Final Season</h5>
      <small class="text-muted">4 days ago</small>
    </div>
    <img src="images/titan.png" class="rounded float-end" alt="Attack on Titan">
    <small class="text-muted">Episode 26</small>
    </a>
    <a href="https://www.crunchyroll.com/series/GG5H5XK80/bleach-international-dubs" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">5. Bleach:Thousand Year Blood War Arc </h5>
      <small class="text-muted">1 week ago</small>
    </div>
    <img src="images/bleach2.png" class="rounded float-end" alt="Bleach:Thousand Year Blood War Arc">
    <small class="text-muted">Episode 7</small>
    </a>
  </div>
<br>
<br>

<h4 class="text-left"> Popular Anime Genres </h4>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Genre</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Slice of Life</td>
      <td>Stories featuring in a Slice of Life genre are based on the actual life settings.</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Adventure</td>
      <td>The adventure genre mainly focuses on undertaking epic quests and traveling around the world.</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Fantasy</td>
      <td>The fantasy genre animes mainly cover themes of fantasy worlds, dreamlike locations, and magical events.</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Magic</td>
      <td>Magic themed anime involve and revolve around magical kinds of stuff such as incantations and spells. Some stories also cover places where characters can source magical powers and characters that can grant wishes.</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Romance</td>
      <td>The romance genre mainly involve sweet moments of persons falling in love.</td>
    </tr>
  </tbody>
</table>

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

