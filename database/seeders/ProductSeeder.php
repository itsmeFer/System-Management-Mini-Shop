<?php

// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['nama_menu' => 'Thai Tea', 'harga' => 7000]);
        Product::create(['nama_menu' => 'Green Tea', 'harga' => 7000]);
        Product::create(['nama_menu' => 'Tiramisu', 'harga' => 10000]);
    }
}
