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
    public function getTicketToday(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://bandung.sakti112.id/api/services/ticket-stats-today',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjZkNTc1NGQzZDNmZjNiNGI5ZWM5ZGQ1YThmNjE1YmJlZTI0ZTNhZWU2YWM0OTFkYTM2MDFlOWU1NGM1MGU4ODUxMWZiNTg2ODZkZWFkYTAzIn0.eyJhdWQiOiIyIiwianRpIjoiNmQ1NzU0ZDNkM2ZmM2I0YjllYzlkZDVhOGY2MTViYmVlMjRlM2FlZTZhYzQ5MWRhMzYwMWU5ZTU0YzUwZTg4NTExZmI1ODY4NmRlYWRhMDMiLCJpYXQiOjE2NjA1NDQxNjcsIm5iZiI6MTY2MDU0NDE2NywiZXhwIjoxNjkyMDgwMTY3LCJzdWIiOiIxOSIsInNjb3BlcyI6W119.peZhoj_xSCE6nTszbZX_SJww8bznRtqVPi5cIINIc1uiofc7XsPeZPRXPBLHq10Ex3hqaL4zozSEjN6nCE_3JfLWBuSyFO9oOHMOqzK8UZue_Jej9PJ-gkp0MPQs0sPp2yIB5TRnYyfk6Afbhg3oGuyLViQ4lXyclwrsoeqgzpyR_bgceBBFAvdg74HsnGpmVpIbbM8u5O48Frn6WLTfK_hAzvn-kRTOv5xHzxMgKm-TKPAgrvanC-XV8iGTSGLdmDrjKKGQ4FHWNX-YX3KUF-ihRyQiCby_7zVPTKjt_O_2--7MIvUSqjSqF74KBVCKpxt6cIeUP-dryJDqRCnY_zNmdlp0htLX4xh2k1f2kwsSbHtIphECdbaLFEAE3p6B54XWyob22HzPI6JRQaQB3kQL8LOq2ypDjZNo1r-VzNsp5rgE7l2rrrm9PdP0QFT4xf0F25nh1OshRxUytMTXxHbWXmSZuMrdfAHIHq8ncdYVYIeuGbsPSwX9ddp_FskbACNnDOzvvfUj-pbHw8EZREJHqd4fpbm6b4-B4z1w2pHdjaqU9_rUTvqnwRBDadh-8GSUCcm9QOOwWz-HLzh_bPdppNo4o4TNpXpKkSpiy4gHP_WoHNYx9SW6DIACbMsG9tSZhQ3b9gstwYkl5JMXf1XoT7OQM_k7QIdxvurR1bY'
        ),
        ));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($curl);

        $arr =[
            'data'=> json_decode($response)
        ];
        return $arr;
    }
}
