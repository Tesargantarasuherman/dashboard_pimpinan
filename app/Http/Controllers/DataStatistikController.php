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
}
