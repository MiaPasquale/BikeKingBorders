<?php require('connect.php');?>
<?php include('header.php');?>
  <!-- gallery carousel -->
  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
      
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
      </div>
      <div class="carousel-inner" data-interval="3000">
        <div class="carousel-item active">
          <img src="images/bike_pic6.avif" class="d-block w-100" alt="bike1" onclick="showImage('images/bike_pic6.avif');">
          </div>
        <div class="carousel-item">
          <img src="images/bike_pic3.avif" class="d-block w-100" alt="bike2">
        </div>
        <div class="carousel-item">
          <img src="images/bike_pic4.avif" class="d-block w-100" alt="bike3">
        </div>
        <div class="carousel-item">
          <img src="images/bike_pic5.avif" class="d-block w-100" alt="bike4">
        </div>
        <div class="carousel-item">
          <img src="images/bike_pic8.avif" class="d-block w-100" alt="bike5">
        </div>
        <div class="carousel-item">
          <img src="images/bic_pic9.avif" class="d-block w-100" alt="bike6">
        </div>
        <div class="carousel-item">
          <img src="images/bike_pic10.avif" class="d-block w-100" alt="bike7">
        </div>
        <div class="carousel-item">
          <img src="images/bike_pic11.avif" class="d-block w-100" alt="bike8">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      
    </div>
  </div>
  <?php include('footer.php');?>