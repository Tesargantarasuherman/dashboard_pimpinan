<?php

namespace App\Http\Controllers;

use App\Models\Pentest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PersandianKeamananInformasiController extends Controller
{
    public function pentestIndex()
    {
        $getPentest = Pentest::orderBy('id', 'desc')->get();

        return view('persandian.pentest.index', compact('getPentest'));
    }


    public function pentestCreate(Request $request)
    {

        try {

            //Cek Duplicate data
            $duplicate = Pentest::where('nama_aplikasi', $request->input('nama_aplikasi'))->first();

            if ($duplicate) {
                Toastr::warning('Duplicate data', 'Warning');
                return back();
            } else {

                $dataCctv = new Pentest();
                $dataCctv->nama_aplikasi = $request->input('nama_aplikasi');
                $dataCctv->link_website = $request->input('link_website');
                $dataCctv->tanggal = $request->input('tanggal');
                $dataCctv->status = 1;
                $dataCctv->save();

                Toastr::success('Data added successfully', 'Success');
                return back();
            }
        } catch (\Throwable $th) {
            //return error message
            return response()->json([
                'success' => false,
                'message' => $th
            ], 409);
        }
    }
}
