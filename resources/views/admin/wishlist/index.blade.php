@extends('layouts.app')

@section('title', 'Data Wishlist')
@section('page-title', 'Data Wishlist')

@section('content')
<a href="{{ route('wishlists.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600">Tambah Wishlist</a>

@if(session('success'))
<div class="bg-green-100 text-green-700 p-2 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<table class="w-full bg-white shadow rounded">
    <thead>
        <tr class="bg-gray-100 text-left">
            <th class="p-3">No</th>
            <th class="p-3">User</th>
            <th class="p-3">Produk</th>
            <th class="p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wishlists as $wishlist)
        <tr class="border-b">
            <td class="p-3">{{ $loop->iteration }}</td>
            <td class="p-3">{{ $wishlist->user->name }}</td>
            <td class="p-3">{{ $wishlist->product->name }}</td>
            <td class="p-3 space-x-2">
                <a href="{{ route('wishlists.show', $wishlist->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                <a href="{{ route('wishlists.edit', $wishlist->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                <form id="delete-form-{{ $wishlist->id }}" action="{{ route('wishlists.destroy', $wishlist->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="text-red-500 hover:underline delete-wishlist-btn" data-id="{{ $wishlist->id }}">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@push('scripts')
<script>
    document.querySelectorAll('.delete-wishlist-btn').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');

            Swal.fire({
                title: 'Yakin ingin menghapus wishlist ini?',
                text: "Data ini tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        });
    });
</script>
@endpush
@endsection
