@extends('layouts.app')

@section('title', 'Edit Wishlist')
@section('page-title', 'Edit Wishlist')

@section('content')
<form action="{{ route('wishlists.update', $wishlist->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')

    <div>
        <label for="user_id" class="block font-semibold mb-1">User</label>
        <select name="user_id" id="user_id" class="w-full border px-3 py-2 rounded" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $wishlist->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="product_id" class="block font-semibold mb-1">Produk</label>
        <select name="product_id" id="product_id" class="w-full border px-3 py-2 rounded" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}" {{ $wishlist->product_id == $product->id ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Simpan Perubahan
        </button>
        <a href="{{ route('wishlists.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">
            Batal
        </a>
    </div>
</form>
@endsection
