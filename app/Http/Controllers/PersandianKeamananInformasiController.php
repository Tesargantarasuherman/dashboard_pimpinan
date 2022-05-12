<?php

namespace App\Http\Controllers;

use App\Models\PersandianPentest;
use App\Models\PersandianTte;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PersandianKeamananInformasiController extends Controller
{
    public function pentestIndex()
    {
        $getPentest = PersandianPentest::orderBy('id', 'desc')->get();

        return view('persandian.pentest.index', compact('getPentest'));
    }


    public function pentestCreate(Request $request)
    {

        try {

            //Cek Duplicate data
            $duplicate = PersandianPentest::where('nama_aplikasi', $request->input('nama_aplikasi'))->first();

            if ($duplicate) {
                Toastr::warning('Duplicate data', 'Warning');
                return back();
            } else {

                $addData = new PersandianPentest();
                $addData->nama_aplikasi = $request->input('nama_aplikasi');
                $addData->link_website = $request->input('link_website');
                $addData->tanggal = $request->input('tanggal');
                $addData->status = 1;
                $addData->save();

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

    public function csirtIndex()
    {
        $getPentest = PersandianPentest::orderBy('id', 'desc')->get();

        return view('persandian.csirt.index', compact('getPentest'));
    }

    public function insidenSiberIndex()
    {
        $getPentest = PersandianPentest::orderBy('id', 'desc')->get();

        return view('persandian.insiden.index', compact('getPentest'));
    }



    public function tteIndex()
    {
        $getTte = PersandianTte::orderBy('id', 'desc')->get();

        return view('persandian.tte.index', compact('getTte'));
    }


    public function tteCreate(Request $request)
    {

        try {

            //Cek Duplicate data
            $duplicate = PersandianTte::where('nip', $request->input('nip'))->first();

            if ($duplicate) {
                Toastr::warning('Duplicate data', 'Warning');
                return back();
            } else {

                $addData = new PersandianTte();
                $addData->nip = $request->input('nip');
                $addData->nama_pegawai = $request->input('nama_pegawai');
                $addData->tanggal = $request->input('tanggal');
                $addData->status = 1;
                $addData->save();

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
