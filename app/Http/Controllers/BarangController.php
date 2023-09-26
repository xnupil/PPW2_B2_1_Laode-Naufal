<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all(); // Mendapatkan semua data barang

        return view('barang.index', compact('barang')); // Menampilkan data barang ke view
    }
}
