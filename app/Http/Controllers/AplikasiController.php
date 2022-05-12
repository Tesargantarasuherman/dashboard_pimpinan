<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function index(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://aplikasi.bandung.go.id/wp-json/api/v1/aplikasi?page=1&per_page=300',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: 261b3b04f89120d8515b57cd1011610b8fd2272a'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
    public function aplikasiIndex()
    {
        return view('aplikasi.index');
    }
}