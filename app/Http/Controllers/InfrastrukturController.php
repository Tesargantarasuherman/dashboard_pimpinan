<?php

namespace App\Http\Controllers;

use App\Models\MasterDataCctv;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class InfrastrukturController extends Controller
{
    public function cctvIndex()
    {
        $dataCctv = MasterDataCctv::count();
        $getCctv = MasterDataCctv::orderBy('id', 'desc')->get();


        $dataCount = [
            'dataCctv' => $dataCctv,
        ];
        return view('infrastruktur.cctv.index', compact(['dataCount', 'getCctv']));
    }


    public function cctvCreate(Request $request)
    {
        //validate incoming request 
        $this->validate($request, [
            'lokasi'  => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            // 'vendor' => 'required|string',
            // 'dinas' => 'required|string',
        ]);

        try {

            //Cek Duplicate data
            $duplicate = MasterDataCctv::where('longitude', $request->input('longitude'))->first();

            if ($duplicate) {
                Toastr::warning('Duplicate data', 'Warning');
                return back();
            } else {

                $dataCctv = new MasterDataCctv();
                $dataCctv->lokasi = $request->input('lokasi');
                $dataCctv->latitude = $request->input('latitude');
                $dataCctv->longitude = $request->input('longitude');
                $dataCctv->status = 1;
                $dataCctv->vendor = $request->input('vendor');
                $dataCctv->dinas = $request->input('dinas');
                $dataCctv->link_stream = $request->input('link_stream');
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
