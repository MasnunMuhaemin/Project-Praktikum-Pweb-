@extends('layouts.app')

@section('title', 'Tambah User')
@section('page-title', 'Tambah User')

@section('content')
<form action="{{ route('users.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf

    <div>
        <label>Nama</label>
        <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label>Alamat</label>
        <textarea name="alamat" class="w-full border px-3 py-2 rounded"></textarea>
    </div>

    <div>
        <label>No HP</label>
        <input type="text" name="no_hp" class="w-full border px-3 py-2 rounded">
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div class="flex justify-end space-x-2">
        <a href="{{ route('users.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Batal</a>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-2">Simpan</button>
    </div>
</form>
@endsection
