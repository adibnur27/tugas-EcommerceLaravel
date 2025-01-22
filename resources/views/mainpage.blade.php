<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- banner --}}
  <header>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" style="border-bottom:.1px solid rgba(97, 97, 97, 0.402);">
      <div class="carousel-inner">
        <div class="carousel-item" style="background-color: black">
          <img src="img/4.jpg" class="d-block w-75" style="margin: 0 auto;" alt="...">
        </div>
        <div class="carousel-item active" style="background-image: url(img/bg1.jpg); background-repeat: repeat; background-size:contain;">
          <img src="img/1.jpg" class="d-block w-75" style="margin: 0 auto" alt="...">
        </div>
        <div class="carousel-item" style="background-color: black">
          <img src="img/3.jpg" class="d-block w-75" style="margin: 0 auto;" alt="...">
        </div>
        <div class="carousel-item" style="background-color: white;">
          <img src="img/2.jpg" class="d-block w-75" style="margin: 0 auto" alt="...">
        </div>
      </div>
      <button class="prev carousel-control-prev h-100" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="next carousel-control-next h-100 next-button" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
  <main>
    <img src="img/main1.png" alt="" width="100%" style="margin-top: 60px">
    <img src="img/main2.png" alt="" width="100%" style="margin-top: 60px">
    <img src="img/main3.png" alt="" width="100%" style="margin-top: 60px">
    <img src="img/main4.png" alt="" width="100%" style="margin-top: 60px">
  </main>
</x-layout>