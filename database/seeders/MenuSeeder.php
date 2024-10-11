<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'nama_menu' => 'Thai Tea',
            'size' => 'M',
            'harga' => 7000
        ]);

        Menu::create([
            'nama_menu' => 'Thai Tea',
            'size' => 'L',
            'harga' => 10000
        ]);

        Menu::create([
            'nama_menu' => 'Green Tea',
            'size' => 'M',
            'harga' => 7000
        ]);

        Menu::create([
            'nama_menu' => 'Green Tea',
            'size' => 'L',
            'harga' => 10000
        ]);

        Menu::create([
            'nama_menu' => 'Tiramisu',
            'size' => 'L',
            'harga' => 10000
        ]);
    }
}
