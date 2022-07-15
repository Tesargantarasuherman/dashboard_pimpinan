<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(
            'auth',
            
        );
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function map()
    {
        $array = [
            [
                "id" => 1,
                "lokasi" => "A. Yani",
                "latitude" => "-6.913483",
                "longitude" => "107.634377 ",
                "status" => "aktif",
                "vendor" => "Dahua",
                "dinas" => "Diskominfo",
                "created_at" => "2022-03-25T04:11:17.000000Z",
                "updated_at" => "2022-03-25T04:11:17.000000Z"
            ],
            [
                "id" => 2,
                "lokasi" => "A. Yani 2",
                "latitude" => "-6.913483",
                "longitude" => "106.634377 ",
                "status" => "aktif",
                "vendor" => "Dahua",
                "dinas" => "Diskominfo",
                "created_at" => "2022-03-25T04:11:17.000000Z",
                "updated_at" => "2022-03-25T04:11:17.000000Z"
            ],
        ];
        return $array;
    }
    public function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return view('home', compact('widget'));
    }
    public function login(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://suratonline.bandung.go.id/api/index.php/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('email' => $request->email, 'password' => $request->password, 'regid' => $request->password),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
