@extends('layouts.app')
@section('title', 'Tambah Wishlist')
@section('page-title', 'Tambah Wishlist')

@section('content')
<form action="{{ route('wishlists.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    <div>
        <label>User</label>
        <select name="user_id" class="w-full border px-3 py-2 rounded">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label>Product</label>
        <select name="product_id" class="w-full border px-3 py-2 rounded">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
</form>
@endsection
