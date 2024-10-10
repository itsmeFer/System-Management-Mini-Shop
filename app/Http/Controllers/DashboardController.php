<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //  bisa menambahkan data yang ingin ditampilkan di dashboard di sini
        return view('dashboard.index');
    }
}
