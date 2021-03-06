<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\MasterRole;
use Illuminate\Http\Request;
class MasterRoleController extends Controller
{
    public function __construct()
    {   
        $this->middleware(
            'auth'
        );
    }
    public function addMasterRole(Request $request)
    {
        try {

            $masterData = new MasterRole;
            $masterData->nama = $request->input('nama');

            // dd($masterData);

            $masterData->save();

            return response()->json([
                'success' => true,
                'message' => 'Input Data Berhasil',
                'data'    => $masterData,
            ], 201);
        } catch (\Throwable $th) {
            //return error message
            return response()->json([
                'success' => false,
                'message' => $th
            ], 409);
        }
    }

    public function getAllMasterRole(Request $request)
    {
        try {

            $skpd = MasterRole::orderBy('id', 'ASC')->get();
            return response()->json([
                'success' => true,
                'message' => 'Master Skpd',
                'data' =>  $skpd,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th
            ], 409);
        }
    }
}