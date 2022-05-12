<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function aplikasiIndex()
    {
        return view('aplikasi.index');
    }
}
