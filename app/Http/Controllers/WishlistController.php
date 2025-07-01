<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::with(['user', 'product'])->get();
        return view('admin.wishlist.index', compact('wishlists'));
    }

    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('admin.wishlist.create', compact('users', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);

        Wishlist::create($request->all());
        return redirect()->route('wishlists.index')->with('success', 'Wishlist berhasil ditambahkan.');
    }

    public function show(Wishlist $wishlist)
    {
        return view('admin.wishlist.show', compact('wishlist'));
    }

    public function edit(Wishlist $wishlist)
    {
        $users = User::all();
        $products = Product::all();
        return view('admin.wishlist.edit', compact('wishlist', 'users', 'products'));
    }

    public function update(Request $request, Wishlist $wishlist)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $wishlist->update($request->all());
        return redirect()->route('wishlists.index')->with('success', 'Wishlist berhasil diperbarui.');
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return redirect()->route('wishlists.index')->with('success', 'Wishlist berhasil dihapus.');
    }
}
