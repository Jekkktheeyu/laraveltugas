<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    /**
     * Tampilkan biodata mahasiswa yang sedang login.
     */
    public function index()
    {
        $mahasiswa = Auth::user()->mahasiswa;

        return view('mahasiswa.biodata', compact('mahasiswa'));
    }
}
