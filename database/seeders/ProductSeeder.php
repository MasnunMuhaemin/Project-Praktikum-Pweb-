<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'kode_product' => 'PRD001',
            'name' => 'Casing 11 Pro Max',
            'description' => 'Deskripsi Produk A',
            'img' => 'produk_a.jpg',
            'price' => 100000,
            'stock' => 50,
            'discount' => 10.00,
        ]);

        Product::create([
            'kode_product' => 'PRD002',
            'name' => 'Casing 11 Pro',
            'description' => 'Deskripsi Produk B',
            'img' => 'produk_b.jpg',
            'price' => 150000,
            'stock' => 30,
            'discount' => 5.00,
        ]);
    }
}
