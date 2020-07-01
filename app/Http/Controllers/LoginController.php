<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;


class LoginController extends BaseController
{
    public function login(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $wkt_mulai = date('Y-m-d H:i:s');
        
        $client   = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'login/login_api', [
            'form_params'   => [
                'username'  => $request->txtUserID,
                'password'  => md5($request->txtPassID),
            ]
        ]);
        $check = json_decode($response->getBody());
    
        if($check->count > 0){
            Session::put('SES_STT',$check->data->stt);
            Session::put('SES_UIDUSER',$check->data->uid);
            Session::put('SES_NAMA',$check->data->nama);
            Session::put('SES_NOINDUK',$check->data->noinduk);
            Session::put('SES_KELAS',$check->data->kelas);
            Session::put('SES_JENIS_UJIAN',$check->data->jenis_ujian);

            return redirect()->route('Home.index');
        }else{

        }  
    }  

    public function logout (){
      Session::flush();
      return redirect()->route('Home.index')->with('alert','Anda berhasil logout');
    }
}
