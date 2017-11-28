<?php

namespace App\Http\Controllers\Admin\Cases;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewscaseController extends Controller
{
    public function execute(){
    	if (view()->exists('admin.case.news_case')) {
    		$news_case = \App\Main::all();


    		$data = [
    			'title' => 'кейс',
    			'news_case' => $news_case

    		];

    	return view('admin.case.news_case', $data);
    	}
    	abort(404);
    }
}
