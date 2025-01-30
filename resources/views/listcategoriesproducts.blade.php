<x-layout>
    <x-slot:title>List Categories</x-slot:title>
    <h1 class="fs-2 text-center my-4 pb-4">Ini Halaman List Categories Products</h1>
    <div class="container my-4 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Jumlah Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($categories as $index => $category)
                <tr>
                    <th>{{ $index + 1 }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->products->count() }}</td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada kategori tersedia</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
