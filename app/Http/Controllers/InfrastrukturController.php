<?php

namespace App\Http\Controllers;

use App\Models\MasterDataCctv;
use App\Models\MasterDataMenaraTelekomunikasi;
use App\Models\MasterDataWifi;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class InfrastrukturController extends Controller
{
    public function __construct()
    {   
        $this->middleware(
            'auth',
            [
                'except' => [
                    'index',
                    'cctvIndex',
                    'cctvCreate',
                    'wifiIndex',
                    'wifiCreate',
                    'menaraIndex',
                    'menaraCreate',
                    'getMenara',
                    'getWifi'
                ]
            ]
        );
    }
    public function index(){
        $getCctv = MasterDataCctv::orderBy('id', 'desc')->get();
        return $getCctv;
    }
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

    public function wifiIndex()
    {
        $dataWifi = MasterDataWifi::count();
        $getWifi = MasterDataWifi::orderBy('id', 'desc')->get();

        $dataCount = [
            'dataWifi' => $dataWifi,
        ];
        return view('infrastruktur.wifi.index', compact(['dataCount', 'getWifi']));
    }
    public function wifi()
    {
        $getWifi = MasterDataWifi::orderBy('id', 'desc')->get();
        
        return $getWifi;
    }

    public function wifiCreate(Request $request)
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
            $duplicate = MasterDataWifi::where('longitude', $request->input('longitude'))->first();

            if ($duplicate) {
                Toastr::warning('Duplicate data', 'Warning');
                return back();
            } else {

                $dataWifi = new MasterDataWifi();
                $dataWifi->lokasi = $request->input('lokasi');
                $dataWifi->latitude = $request->input('latitude');
                $dataWifi->longitude = $request->input('longitude');
                $dataWifi->status = 1;
                $dataWifi->vendor = $request->input('vendor');
                $dataWifi->dinas = $request->input('dinas');
                $dataWifi->save();

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

    //
    public function menaraIndex()
    {
        $dataMenara = MasterDataMenaraTelekomunikasi::count();
        $getMenara = MasterDataMenaraTelekomunikasi::orderBy('id', 'desc')->get();

        $dataCount = [
            'dataMenara' => $dataMenara,
        ];
        return view('infrastruktur.menara.index', compact(['dataCount', 'getMenara']));
    }

    public function menaraCreate(Request $request)
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
            $duplicate = MasterDataMenaraTelekomunikasi::where('longitude', $request->input('longitude'))->first();

            if ($duplicate) {
                Toastr::warning('Duplicate data', 'Warning');
                return back();
            } else {

                $dataWifi = new MasterDataMenaraTelekomunikasi();
                $dataWifi->lokasi = $request->input('lokasi');
                $dataWifi->latitude = $request->input('latitude');
                $dataWifi->longitude = $request->input('longitude');
                $dataWifi->status = 1;
                $dataWifi->vendor = $request->input('vendor');
                $dataWifi->dinas = $request->input('dinas');
                $dataWifi->save();

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

    public function getMenara(){
        $getMenara = MasterDataMenaraTelekomunikasi::orderBy('id', 'desc')->get();
        return $getMenara;
    }
    public function getWifi(){
        $getMenara = MasterDataWifi::orderBy('id', 'desc')->get();
        return $getMenara;
    }
}
