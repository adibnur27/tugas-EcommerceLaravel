<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card" style="max-width: 100%;">
      <div class="row g-0 justify-content-between align-items-center">
        <div class="col-md-6">
          <div class="card-body my-auto w-50 mx-auto">
            <p class="card-text text-start w-75 lh-base text-danger fw-bold">BARU</p>
            <h5 class="card-title text-start fw-bolder fs-2">{{ $product['name'] }}</h5>
            <p class="card-text text-start lh-base">{{ $product['description'] }}<br>Mulai dari @currency($product['price'])</p>
            <button type="button" class="btn btn-outline-primary btn-lg btn-buy fw-medium fs-6 lh-lg">Beli Sekarang</button>
          </div>
        </div>
        <div class="col-md-4 my-4 py-4">
          <img src="/img/{{ $product['image'] }}" class="img-fluid rounded-start w-75 ms-4" alt="...">
        </div>
      </div>
    </div>
</x-layout>