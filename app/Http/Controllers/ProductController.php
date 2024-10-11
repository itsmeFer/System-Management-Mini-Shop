<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // Mengambil semua data dari tabel menus
        return view('products.index', compact('menus')); // Kirim data ke view
    }
}
