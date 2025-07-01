@extends('layouts.app')
@section('title', 'Detail Wishlist')
@section('page-title', 'Detail Wishlist')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <p><strong>User:</strong> {{ $wishlist->user->name }}</p>
    <p><strong>Product:</strong> {{ $wishlist->product->name }}</p>
    <a href="{{ route('wishlists.index') }}" class="mt-4 inline-block bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Kembali</a>
</div>
@endsection
