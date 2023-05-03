<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStatistikController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function covidIndex()
    {

        return view('data-statistik.covid19');
    }

    public function vaksinIndex()
    {

        return view('data-statistik.vaksin');
    }

    public function saktiIndex()
    {
        return view('data-statistik.sakti112');
    }
    public function pklIndex()
    {
        return view('data-statistik.pkl');
    }
    public function PklPerwilayah(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/district');
    }
    public function PklPerpendidikan(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfEducation');
    }
    public function PklArea(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfBuildArea');
    }
    public function PklReligion(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfReligion');
    }
    public function pklProduk(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfProduct');
    }
    public function pklWaktu(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfBusinesTime');
    }
    public function pklMedia(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfBusinesMedia');
    }
    public function pklStatusPemilik(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfOwnershipStatus');
    }
    public function pklStatusPernikahan(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfMaritalstatus');
    }
    public function pklStatusNik(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/getAllPkl');
    }
    public function pklTotalPemilikBisnis(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/totalBusinessOwner');
    }
    public function pklOmset(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/businessOfOmzet');
    }
    public function pklBisnis(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/countBusinessPkl');
    }
    public function pklCetakKartu(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/countPrintedCardPkl');
    }
    public function pklProfileBisnis(){
        return $this->getPkl('https://sipkl.bandung.go.id/data-pkl/totalBusinessProfile');
    }
    private function getPKL($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }
}
