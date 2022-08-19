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
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/district?keys=&target=');
    }
    public function PklPerpendidikan(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfEducation?keys=&target=');
    }
    public function PklArea(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfBuildArea?keys=&target=');
    }
    public function PklReligion(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfReligion?keys=&target=');
    }
    public function pklProduk(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfProduct?keys=&target=');
    }
    public function pklWaktu(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfBusinesTime?keys=&target=');
    }
    public function pklMedia(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfBusinesMedia?keys=&target=');
    }
    public function pklStatusPemilik(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfOwnershipStatus?keys=&target=');
    }
    public function pklStatusPernikahan(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfMaritalstatus?keys=&target=');
    }
    public function pklStatusNik(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/getAllPkl?keys=&target=');
    }
    public function pklTotalPemilikBisnis(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/totalBusinessOwner?keys=&target=');
    }
    public function pklOmset(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/businessOfOmzet?keys=&target=');
    }
    public function pklBisnis(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/countBusinessPkl?keys=&target=');
    }
    public function pklCetakKartu(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/countPrintedCardPkl?keys=&target=');
    }
    public function pklProfileBisnis(){
        return $this->getPkl('https://sipkl.kitapeduli.org/data-pkl/totalBusinessProfile?keys=&target=');
    }
    private function getPKL($url){
        $curl = curl_init();
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
