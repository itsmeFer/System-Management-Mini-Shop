<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product; // Import model Product
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Ambil produk berdasarkan pencarian
        $products = Product::when($search, function ($query, $search) {
            return $query->where('nama_menu', 'like', '%' . $search . '%');
        })->get();

        return view('products.index', compact('products'));
    }
}
