<x-layout>
  {{-- banner --}}
  <header class="main-header">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item" style="background-color: black">
          <img src="img/4.jpg" class="d-block w-50" style="margin: 0 auto;" alt="...">
        </div>
        <div class="carousel-item active" style="background-color:white">
          <img src="img/1.jpg" class="d-block w-50" style="margin: 0 auto" alt="...">
        </div>
        <div class="carousel-item" style="background-color: black">
          <img src="img/3.jpg" class="d-block w-50" style="margin: 0 auto;" alt="...">
        </div>
        <div class="carousel-item" style="background-color:white">
          <img src="img/2.jpg" class="d-block w-50" style="margin: 0 auto" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev h-75" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next h-75 next-button" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
</x-layout>