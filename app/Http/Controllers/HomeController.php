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


class HomeController extends BaseController
{
    public function index(){

    	$slider 		= json_decode(file_get_contents(ENV('APP_URL_API').'home/slider'));
    	$berita 		= json_decode(file_get_contents(ENV('APP_URL_API').'home/berita'));
    	$text_agreement = json_decode(file_get_contents(ENV('APP_URL_API').'home/text_agreement'));

    	return view('page.info')->with([
    	    'slider' 		 => $slider,
    	    'berita' 		 => $berita,
    	    'text_agreement' => $text_agreement,
    	]);
    }

   	public function materi(){

   		$slider 		= json_decode(file_get_contents(ENV('APP_URL_API').'home/slider'));
    	$materi 		= json_decode(file_get_contents(ENV('APP_URL_API').'home/materi/'.Session::get('SES_JENIS_UJIAN')));
    	$text_agreement = json_decode(file_get_contents(ENV('APP_URL_API').'home/text_agreement'));


    	return view('page.materi')->with([
    	    'slider' 		 => $slider,
    	    'materi' 		 => $materi,
    	    'text_agreement' => $text_agreement,
    	]);
   	}


}
