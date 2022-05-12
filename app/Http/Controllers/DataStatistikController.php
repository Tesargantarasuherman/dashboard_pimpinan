<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStatistikController extends Controller
{
    //
    public function covidIndex()
    {

        return view('data-statistik.covid19');
    }

    public function vaksinIndex()
    {

        return view('data-statistik.vaksin');
    }
}
