<?php

namespace App\Http\Controllers\Admin\Cases;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewscaseAddController extends Controller
{
    public function execute(Request $request){
    	if ($request->hasFile('image')) {
    		//Get file name with the extesion
    		$filenameWithExt = $request->file('image')->getClientOriginalName();
    		//Get just file name
    		$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    		//Get just ext
    		$extension = $request->file('image')->getClientOriginalExtension();
    		//Filename to store
    		$fileNameToStore = $filename.'_'.time().'.'.$extension;
    		//Upload image
    		$path = $request->file('image')->storeAs('public/image/', $fileNameToStore);
    	}else{
    		$fileNameToStore = 'noimage.jpg';
    	}


    	if ($request->isMethod('post')) {
    		$case_add = new \App\Main;
    		$case_add->filter = $request->get('filter');
    		$case_add->author = $request->get('author');
    		$case_add->content_main = $request->get('content_main');
    		$case_add->content = $request->get('content');
    		$case_add->content_text = $request->get('content_text');
    		$case_add->image = $fileNameToStore;
    		$case_add->time_create = $request->get('partydate');


    		$case_add->save();
    		return redirect('admin/news_case')->with('status', 'Страница добавлена');
    	}




    	if (view()->exists('admin.case.news_case_add')) {
    		$news_case_add = \App\Main::all();

    		$data = [
    			'title' => 'Добавление Кейса',
    			'news_case_add' => $news_case_add

    		];
    		return view('admin.case.news_case_add', $data);
    	}
    	abort(404);
    }

}
