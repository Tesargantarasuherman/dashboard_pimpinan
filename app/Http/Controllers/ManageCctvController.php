<?php

namespace App\Http\Controllers;

use App\Models\ManageCctv;
use Illuminate\Http\Request;

class ManageCctvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getCctv = MasterDataCctv::orderBy('id', 'desc')->get();

        return view('infrastruktur.cctv.manage', compact(['getCctv']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageCctv  $manageCctv
     * @return \Illuminate\Http\Response
     */
    public function show(ManageCctv $manageCctv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageCctv  $manageCctv
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageCctv $manageCctv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageCctv  $manageCctv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageCctv $manageCctv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageCctv  $manageCctv
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageCctv $manageCctv)
    {
        //
    }
}
