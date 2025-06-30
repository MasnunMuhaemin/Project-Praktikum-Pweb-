@extends('layouts.app')

@section('title', 'Tambah Produk')
@section('page-title', 'Tambah Produk')

@section('content')
<form action="{{ route('products.store') }}" method="POST"  enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf

    <div>
        <label>Kode Produk</label>
        <input type="text" name="kode_product" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label>Nama Produk</label>
        <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label>Deskripsi</label>
        <textarea name="description" class="w-full border px-3 py-2 rounded"></textarea>
    </div>

    <div>
        <label>Harga</label>
        <input type="number" name="price" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label>Stok</label>
        <input type="number" name="stock" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label>Diskon (%)</label>
        <input type="number" name="discount" class="w-full border px-3 py-2 rounded" value="0">
    </div>

    <div>
        <label>Gambar</label>
        <input type="file" name="img" accept="image/*" class="w-full border px-3 py-2 rounded">
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
</form>
@endsection
