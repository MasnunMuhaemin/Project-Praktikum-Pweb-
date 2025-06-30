@extends('layouts.app')

@section('title', 'Edit User')
@section('page-title', 'Edit User')

@section('content')
<form action="{{ route('users.update', $user->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')

    <div>
        <label>Nama</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border px-3 py-2 rounded" required>
    </div>

    <div>
        <label>Alamat</label>
        <textarea name="alamat" class="w-full border px-3 py-2 rounded">{{ old('alamat', $user->alamat) }}</textarea>
    </div>

    <div>
        <label>No HP</label>
        <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" class="w-full border px-3 py-2 rounded">
    </div>

    <div>
        <label>Password (biarkan kosong jika tidak diubah)</label>
        <input type="password" name="password" class="w-full border px-3 py-2 rounded">
    </div>

    <div class="flex justify-end space-x-2">
        <a href="{{ route('users.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Batal</a>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
    </div>
</form>
@endsection
