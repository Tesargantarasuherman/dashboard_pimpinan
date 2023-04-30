<?php

namespace App\Http\Controllers;

use App\Models\MasterSkpd;
use App\Models\Perpu;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PerpuController extends Controller
{
    public function __construct()
    {   
        $this->middleware(
            'auth'
        );
    }
    
    public function perpuIndex()
    {
        $getData = Perpu::orderBy('id', 'desc')->get();
        $skpd = MasterSkpd::orderBy('id', 'desc')->get();

        return view('perpu.index', compact(['skpd', 'getData']));
    }

    public function perpuCreate(Request $request)
    {
        $duplicate = Perpu::where('perihal', $request->input('perihal'))->first();

        if ($duplicate) {
            Toastr::warning('Duplicate data', 'Warning');
            return back();
        } else {

            $addData = new Perpu();
            $addData->tahun = $request->input('tahun');
            $addData->pemerkasa = $request->input('pemerkasa');
            $addData->perihal = $request->input('perihal');

            if($request->hasFile('file')){
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();
                $destinationpath = public_path('/perpu');
                $file->move($destinationpath,$filename);
                $addData->file = $filename;
            }
            $addData->save();

            Toastr::success('Data added successfully', 'Success');
            return back();
        }
    }
}
