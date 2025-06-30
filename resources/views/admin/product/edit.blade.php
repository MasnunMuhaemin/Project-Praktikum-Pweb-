@extends('layouts.app')

@section('title', 'Edit Produk')
@section('page-title', 'Edit Produk')

@section('content')
<form action="{{ route('products.update', $product->id) }}" method="POST"  enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')

    <div>
        <label>Kode Produk</label>
        <input type="text" name="kode_product" class="w-full border px-3 py-2 rounded" value="{{ old('kode_product', $product->kode_product) }}" required>
    </div>

    <div>
        <label>Nama Produk</label>
        <input type="text" name="name" class="w-full border px-3 py-2 rounded" value="{{ old('name', $product->name) }}" required>
    </div>

    <div>
        <label>Deskripsi</label>
        <textarea name="description" class="w-full border px-3 py-2 rounded">{{ old('description', $product->description) }}</textarea>
    </div>

    <div>
        <label>Harga</label>
        <input type="number" name="price" class="w-full border px-3 py-2 rounded" value="{{ old('price', $product->price) }}" required>
    </div>

    <div>
        <label>Stok</label>
        <input type="number" name="stock" class="w-full border px-3 py-2 rounded" value="{{ old('stock', $product->stock) }}" required>
    </div>

    <div>
        <label>Diskon (%)</label>
        <input type="number" name="discount" class="w-full border px-3 py-2 rounded" value="{{ old('discount', $product->discount) }}">
    </div>

    <div>
        <label>Gambar (biarkan kosong jika tidak diubah)</label>
        <input type="file" name="img" accept="image/*" class="w-full border px-3 py-2 rounded">
        <div class="mt-2">
            <img src="{{ asset('storage/' . $product->img) }}" class="w-24 h-24 object-cover rounded" alt="preview">
        </div>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
</form>
@endsection
