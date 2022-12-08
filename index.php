<?php
    $title = 'Home'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 


?>
   
   
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/noble.jpg" class="d-block w-100" alt="Noblesse">
      <div class="carousel-caption d-none d-md-block">
      <h3 class="text-center">Welcome to Anime Central</h3>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/anime2.png" class="d-block w-100" alt="Anime">
      <div class="carousel-caption d-none d-md-block">
      <h3>Welcome to Anime Central</h3>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/sword.webp" class="d-block w-100" alt="Sword Art Online">
      <div class="carousel-caption d-none d-md-block">
      <h3>Welcome to Anime Central</h3>
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

<P> Hottas </p>



<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

