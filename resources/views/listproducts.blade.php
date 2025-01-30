<x-layout>
    <x-slot:title>List Products</x-slot:title>
    <h1 class="fs-2 text-center my-4">Ini Halaman List Products</h1>
    <div class="container my-4 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($products as $index => $product)
                <tr>
                    <th>{{ $index + 1 }}</th>
                    <td><img src="img/{{ $product->image }}" width="50"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada produk tersedia</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
