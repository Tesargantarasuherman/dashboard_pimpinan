<?php

namespace App\Http\Controllers;

use App\Models\MasterRole;
use App\Models\MasterSkpd;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersManagementController extends Controller
{
    public function __construct()
    {   
        $this->middleware(
            'auth'
        );
    }
    public function roleIndex()
    {
        $getData = MasterRole::orderBy('id', 'desc')->get();

        return view('users-management.roles.index', compact(['getData']));
    }

    public function roleCreate(Request $request)
    {
        $addData = new MasterRole();
        $addData->nama = $request->input('nama');

        $addData->save();

        Toastr::success('Data added successfully', 'Success');
        return back();
    }

    public function userIndex()
    {
        $getData = User::orderBy('id', 'desc')->get();
        $role = MasterRole::orderBy('id', 'desc')->get();


        return view('users-management.users.index', compact(['getData', 'role']));
    }

    public function userCreate(Request $request)
    {
        $addData = new User();
        $addData->nama = $request->input('nama');
        $addData->email = $request->input('email');
        $addData->id_role = $request->input('id_role');
        $addData->password = Hash::make('123456');

        // dd($addData);

        $addData->save();

        Toastr::success('Data added successfully', 'Success');
        return back();
    }
    public function userDetail(Request $request, $id_user)
    {

        $getData = User::where('id', $id_user)->first();

        return view('users-management.users.detail', compact(['getData']));
    }

    public function userEdit(Request $request, $id_user)
    {

        $getData = User::where('id', $id_user)->first();
        $role = MasterRole::orderBy('id', 'desc')->get();
        $maskterSkpd = MasterSkpd::orderBy('id', 'desc')->get();

        return view('users-management.users.edit', compact(['getData', 'role', 'maskterSkpd']));
    }

    public function userUpdate(Request $request, $id_user)
    {

        $getData = User::where('id', $id_user)->first();

        $getData->nama = $request->input('nama');
        $getData->email = $request->input('email');
        $getData->id_role = $request->input('id_role');
        $getData->nip = $request->input('nip');
        $getData->nik = $request->input('nik');
        $getData->id_skpd = $request->input('id_skpd');
        $getData->update();

        Toastr::success('Data added successfully', 'Success');
        return back();
    }
}
