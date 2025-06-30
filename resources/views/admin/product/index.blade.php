@extends('layouts.app')

@section('title', 'Daftar Produk')
@section('page-title', 'Daftar Produk')

@section('content')
<a href="{{ route('products.create') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Produk</a>

@if(session('success'))
    <div class="mb-4 text-green-600">{{ session('success') }}</div>
@endif

<table class="w-full bg-white rounded shadow text-sm">
    <thead>
        <tr class="bg-gray-100 text-left">
            <th>No. </th>
            <th class="p-3">Gambar</th> 
            <th class="p-3">Kode</th>
            <th class="p-3">Nama</th>
            <th class="p-3">Harga</th>
            <th class="p-3">Stok</th>
            <th class="p-3">Diskon</th>
            <th class="p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr class="border-b">
            <td>{{ $loop->iteration }}</td>
            <td class="p-3">
                <img src="{{ asset('storage/' . $product->img) }}" alt="gambar" class="w-16 h-16 object-cover rounded">
            </td>
            <td class="p-3">{{ $product->kode_product }}</td>
            <td class="p-3">{{ $product->name }}</td>
            <td class="p-3">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
            <td class="p-3">{{ $product->stock }}</td>
            <td class="p-3">{{ $product->discount }}%</td>
            <td class="p-3 space-x-2">
                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline">Edit</a>
                <button
                    class="text-red-500 hover:underline"
                    onclick="confirmDelete({{ $product->id }})"
                >
                    Hapus
                </button>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="p-3 text-center">Belum ada produk.</td>
        </tr>
        @endforelse
    </tbody>
</table>
<form id="delete-form-{{ $product->id }}"
      action="{{ route('products.destroy', $product->id) }}"
      method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

@push('scripts')
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Data produk akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e3342f',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }

    @if (session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        timer: 2000,
        showConfirmButton: false
    });
    @endif
</script>
@endpush

@endsection
