<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/infrastruktur-tik/map', 'HomeController@map')->name('map');
// Route::post('/', 'HomeController@login')->name('login');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('agenda', 'ScheduleController@index')->name('agenda');
Route::post('fullcalenderAjax', 'ScheduleController@ajax')->name('fullcalenderAjax');
Route::post('agenda/tambah', 'ScheduleController@AddAgenda')->name('agenda.tambah');
Route::get('/about', function () {
    return view('about');
})->name('about');

$router->group(['prefix' => 'api/v1'], function () use ($router) {

    $router->post('login', 'AuthController@login');

    $router->get('vaksin/terkini', 'IntegrasiController@vaksinTerkini');
    $router->post('agenda/kegiatan', 'IntegrasiController@agendaKegiatan');
    $router->get('agenda/kegiatan/sinkron', 'IntegrasiController@sinkronAgendaKegiatan');
    $router->get('cuaca', 'IntegrasiController@cuaca');
    $router->get('users', 'IntegrasiController@users');
    $router->get('covid', 'IntegrasiController@covid');


    //tambah Skala Nilai
    $router->post('skala-nilai-spbe', 'IndikatorSpbeController@addSkalaNilaiSpbe');
    $router->get('index-spbe', 'IndikatorSpbeController@getIndexSpbe');
    $router->get('index-spbe/{tahun}', 'IndikatorSpbeController@getIndexSpbeTahun');
    $router->get('index-spbe-all', 'IndikatorSpbeController@getIndexSpbeAll');

    $router->put('index-spbe/{id}', 'IndikatorSpbeController@getUpdataSkalaNilai');


    //Index SPBE
    $router->get('nilai-index', 'IndikatorSpbeController@getAllNilaiIndexPertahun');
    $router->get('nilai-index/{tahun}', 'IndikatorSpbeController@getNilaiIndex');


    $router->post('import', 'IndikatorSpbeController@import');


    //end


    //Master Data CCTV
    $router->post('master-data-cctv', 'MasterDataCctvController@addMasterDataCctv');
    $router->get('master-data-cctv', 'MasterDataCctvController@getAllMasterDataCctv');
    $router->get('master-data-cctv/{idCctv}', 'MasterDataCctvController@getMasterDataCctvById');
    $router->put('master-data-cctv/{idCctv}', 'MasterDataCctvController@updateMasterDataCctvById');
    $router->delete('master-data-cctv/{idCctv}', 'MasterDataCctvController@deleteMasterDataCctvById');
    $router->get('master-data-cctv/?', 'MasterDataCctvController@cariMasterDataCctv');

    //Master Data Wifi
    $router->post('master-data-wifi', 'MasterDataWifiController@addMasterDataWifi');
    $router->get('master-data-wifi', 'MasterDataWifiController@getAllMasterDataWifi');
    $router->get('master-data-wifi/{idWifi}', 'MasterDataWifiController@getMasterDataWifiById');
    $router->put('master-data-wifi/{idWifi}', 'MasterDataWifiController@updateMasterDataWifiById');
    $router->delete('master-data-wifi/{idWifi}', 'MasterDataWifiController@deleteMasterDataWifiById');
    $router->get('master-data-wifi/', 'MasterDataWifiController@cariMasterDataWifi');

    //Master Data Menara
    $router->post('master-data-menara-telekomunikasi', 'MasterDataMenaraTelekomunikasiController@addMasterDataMenara');
    $router->get('master-data-menara-telekomunikasi', 'MasterDataMenaraTelekomunikasiController@getAllMasterDataMenara');
    $router->get('master-data-menara-telekomunikasi/{idMenara}', 'MasterDataMenaraTelekomunikasiController@getMasterDataMenaraById');
    $router->put('master-data-menara-telekomunikasi/{idMenara}', 'MasterDataMenaraTelekomunikasiController@updateMasterDataMenaraById');
    $router->delete('master-data-menara-telekomunikasi/{idMenara}', 'MasterDataMenaraTelekomunikasiController@deleteMasterDataMenaraById');
    $router->get('master-data-menara-telekomunikasi/', 'MasterDataMenaraTelekomunikasiController@cariMasterDataMenara');


    //Master Skpd
    $router->get('master-skpd', 'MasterSkpdController@getAllMasterSkpd');
    $router->get('master-skpd/{id}', 'MasterSkpdController@getIdMasterSkpd');
    $router->get('master-skpd/data/cari', 'MasterSkpdController@cariMasterSkpd');


    //Master Skpd
    $router->post('kebutuhan-data-pendukung/create', 'MasterSmartCityController@addKebutuhanDataPendukung');
    $router->get('kebutuhan-data-pendukung', 'MasterSmartCityController@getAllKebutuhanDataPendukung');
    $router->get('kebutuhan-data-pendukung/{id}', 'MasterSmartCityController@getByIdKebutuhanDataPendukung');
    $router->put('kebutuhan-data-pendukung/{id}', 'MasterSmartCityController@updatedKebutuhanDataPendukung');
    $router->delete('kebutuhan-data-pendukung/{id}', 'MasterSmartCityController@deleteKebutuhanDataPendukung');

    $router->post('kuisioner-smart-city/create', 'MasterSmartCityController@addMasterKuisionerSmartCity');
    $router->get('kuisioner-smart-city', 'MasterSmartCityController@getAllMasterKuisionerSmartCity');
    $router->get('kuisioner-smart-city/{id_skpd}', 'MasterSmartCityController@getIdMasterKuisionerSmartCity');
    $router->put('kuisioner-smart-city/{id}', 'MasterSmartCityController@updateMasterKuisionerSmartCity');
    $router->delete('kuisioner-smart-city/{id}', 'MasterSmartCityController@deleteMasterKuisionerSmartCity');

    $router->post('nilai-kuisioner-smart-city/create', 'MasterSmartCityController@addNilaiKuisionerSmartCity');
    $router->get('nilai-kuisioner-smart-city', 'MasterSmartCityController@getAllNilaiKuisionerSmartCity');
    $router->get('nilai-kuisioner-smart-city/{id_skpd}', 'MasterSmartCityController@getIdNilaiKuisionerSmartCity');
    $router->put('nilai-kuisioner-smart-city/{id}', 'MasterSmartCityController@updateNilaiKuisionerSmartCity');

    $router->get('nilai-kuisioner/{tahun}', 'MasterSmartCityController@getDataTahun');
    $router->get('nilai/kuisioner/{id_kuisioner}/{tahun}', 'MasterSmartCityController@getDataNilai');
    

    //Master Role
    $router->post('role-app', 'MasterRoleController@addMasterRole');
    $router->get('master-role', 'MasterRoleController@getAllMasterRole');



});

$router->group(['prefix' => 'spbe'], function () use ($router) {
    //Indikator spbe nama dan bobot
    $router->post('master-indikator-spbe', 'IndikatorSpbeController@addMasterIndikatorSpbe');
    $router->get('master-indikator-spbe', 'IndikatorSpbeController@getAllMasterIndikatorSpbe');
    $router->put('master-indikator-spbe/{idMaster}', 'IndikatorSpbeController@updateMasterDataIndikatorSpbeById');

    $router->post('import-master-indikator-spbe', 'IndikatorSpbeController@importMasterIndikatorSpbe');

    $router->get('domain-indikator', 'IndikatorSpbeController@domainIndikatorIndex')->name('domainindikator.index');
    $router->get('/domain-indikator/api', 'IndikatorSpbeController@domainIndikator');
    $router->get('/indeks-spbe/api/{tahun}', 'IndikatorSpbeController@detailIndeksSpbe');
    $router->get('/chart/indeks-spbe/api/{tahun}', 'IndikatorSpbeController@chartDetailIndeksSpbe');
    $router->get('/peraturan-perundangan', 'IndikatorSpbeController@perpuIndex')->name('perpu.index');
    $router->get('/indeks-spbe', 'IndikatorSpbeController@indeksSpbeIndex')->name('indeksspbe.index');
    $router->get('/add-indeks-spbe', 'IndikatorSpbeController@addSpbeIndex')->name('indeksspbe.add');
    $router->post('/add-spbe', 'IndikatorSpbeController@addSpbe')->name('add.spbe');
    $router->post('/update-spbe', 'IndikatorSpbeController@updateSpbe')->name('update.spbe');
    $router->get('/api/indeks-spbe-tahun', 'IndikatorSpbeController@indeksSbeTahun');

});

$router->group(['prefix' => 'aplikasi'], function () use ($router) {
    $router->get('/', 'AplikasiController@aplikasiIndex')->name('aplikasi.index');
    $router->get('/api', 'AplikasiController@index')->name('index');
});

$router->group(['prefix' => 'infrastruktur-tik'], function () use ($router) {
    $router->get('/cctv', 'InfrastrukturController@cctvindex')->name('cctv.index');
    $router->post('/cctv', 'InfrastrukturController@cctvCreate')->name('cctv.create');

    $router->get('/wifi', 'InfrastrukturController@wifiIndex')->name('wifi.index');
    $router->post('/wifi', 'InfrastrukturController@wifiCreate')->name('wifi.create');

    $router->get('/menara-telekomunikasi', 'InfrastrukturController@menaraIndex')->name('menara.index');
    $router->post('/menara-telekomunikasi', 'InfrastrukturController@menaraCreate')->name('menara.create');

});


$router->group(['prefix' => 'persandian'], function () use ($router) {
    $router->get('/pentest', 'PersandianKeamananInformasiController@pentestIndex')->name('pentest.index');
    $router->post('/pentest', 'PersandianKeamananInformasiController@pentestCreate')->name('pentest.create');

    $router->get('/csirt', 'PersandianKeamananInformasiController@csirtIndex')->name('csirt.index');
    $router->post('/csirt', 'PersandianKeamananInformasiController@csirtCreate')->name('csirt.create');

    $router->get('/insiden-siber', 'PersandianKeamananInformasiController@insidenSiberIndex')->name('insiden.index');
    $router->post('/insiden-siber', 'PersandianKeamananInformasiController@insidenSiberCreate')->name('insiden.create');

    $router->get('/tte', 'PersandianKeamananInformasiController@tteIndex')->name('tte.index');
    $router->post('/tte', 'PersandianKeamananInformasiController@tteCreate')->name('tte.create');

});

$router->get('infrastruktur-tik/api/cctv', 'InfrastrukturController@index')->name('cctv');

$router->group(['prefix' => 'data-statistik'], function () use ($router) {
    $router->get('/covid19', 'DataStatistikController@covidIndex')->name('covid.index');
    $router->get('/vaksin', 'DataStatistikController@vaksinIndex')->name('vaksin.index');

});

$router->group(['prefix' => 'smart-city'], function () use ($router) {
    $router->get('/kuisioner', 'MasterSmartCityController@kuisionerIndex')->name('kuisioner.index');
    $router->post('/kuisioner', 'MasterSmartCityController@kuisionerCreate')->name('kuisioner.create');

    $router->get('/master-skpd', 'MasterSkpdController@getAllMasterSkpd');

    $router->get('/nilai', 'MasterSmartCityController@nilaiIndex')->name('nilai.index');
    $router->get('/nilai/kuisioner', 'MasterSmartCityController@nilaiCreate')->name('nilai.create');
    $router->post('/nilai', 'MasterSmartCityController@nilaiStore')->name('nilai.store');
    $router->get('/nilai/{id_skpd}', 'MasterSmartCityController@getNilaiSkpd')->name('nilai.getnilaiskpd');
    $router->get('/kuisioner/{skpd}', 'MasterSmartCityController@getKuisionerBySkpd');
    $router->get('/get-kuisioner/{skpd}/{tahun}', 'MasterSmartCityController@getKuisionerBySkpdPertahun');
    $router->post('/nilai/update', 'MasterSmartCityController@nilaiUpdate')->name('nilai.update');

});

$router->group(['prefix' => 'peraturan-perundangan'], function () use ($router) {
    $router->get('/perpu', 'PerpuController@perpuIndex')->name('perpu.index');
    $router->post('/perpu', 'PerpuController@perpuCreate')->name('perpu.create');


});
