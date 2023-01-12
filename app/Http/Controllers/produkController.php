<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
        $produk = 'Aqua 400ML';
        return view('produk/index', compact('produk'));
    }

    public function show()
    {
        $produk = ['Aqua 115 ML', 'Minuman Bersoda', 'Buku Sejarah', 'Mouse', 'CPU'];
        return view('produk/show', compact('produk'));
    }
}
