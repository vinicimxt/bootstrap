
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <?php
    for($i=0;$i<10;$i++){
    ?>
        <div class="carousel-item">
    <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="..." class="d-block w-50" alt="...">
    </div>
    <?php
    }
    ?>
    
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 