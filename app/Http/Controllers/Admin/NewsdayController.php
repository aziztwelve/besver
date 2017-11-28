<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsdayController extends Controller
{
    //

     public function execute(){

    	if (view()->exists('admin.main_not_photo')) {
    		
    		$main_not_photos = \App\MainNotPhoto::all();


    		$data = [

    				 'title' => 'Новости дня',
    				 'main_not_photos' => $main_not_photos

    		        ];

    		return view('admin.main_not_photo', $data);
    	}
    	abort(404);
    }
}
