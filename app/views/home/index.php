<div class="container alert-info shadow ">
    <div class="jumbotron mt-4">
      <h1 class="display-6">Welcome <?= $data['title']?></h1>
      <p class="lead">Helo, my name is <?= $data['nama']; ?></p>
      <hr class="my-6">
    </div>
</div>
<div class="container"></div>
<div class="container">
    <div class="alert s" role="alert">
      A simple primary alert—check it out!
    </div>
</div>

<!-- Carousel Crossfade -->
<div class="container">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cdn.pixabay.com/photo/2019/12/15/18/24/winter-4697776_960_720.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2016/09/19/22/46/lake-1681485_960_720.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2020/12/03/20/54/mountains-5801628_960_720.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>