<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStatistikController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function covidIndex()
    {

        return view('data-statistik.covid19');
    }

    public function vaksinIndex()
    {

        return view('data-statistik.vaksin');
    }

    public function saktiIndex()
    {
        return view('data-statistik.sakti112');
    }
    public function pklIndex()
    {
        return view('data-statistik.pkl');
    }
}
