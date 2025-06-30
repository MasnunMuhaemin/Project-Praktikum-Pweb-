@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('page-title', 'Selamat Datang, ' . $user->name)

@section('content')
    <p class="text-gray-600">Ini adalah halaman dashboard admin dengan sidebar.</p>

    <div class="mt-8 p-4 bg-white shadow rounded">
        <p>Konten dashboard bisa ditambahkan di sini.</p>
    </div>
@endsection
