@extends('layouts.app')

@section('title', 'Detail User')
@section('page-title', 'Detail User')

@section('content')
<div class="bg-white p-6 rounded shadow space-y-4">

    <div>
        <h2 class="text-lg font-semibold">Nama:</h2>
        <p>{{ $user->name }}</p>
    </div>

    <div>
        <h2 class="text-lg font-semibold">Email:</h2>
        <p>{{ $user->email }}</p>
    </div>

    <div>
        <h2 class="text-lg font-semibold">Alamat:</h2>
        <p>{{ $user->alamat ?? '-' }}</p>
    </div>

    <div>
        <h2 class="text-lg font-semibold">No HP:</h2>
        <p>{{ $user->no_hp ?? '-' }}</p>
    </div>

    <div class="pt-4">
        <a href="{{ route('users.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">
            Kembali
        </a>
        <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-2">
            Edit
        </a>
    </div>

</div>
@endsection
