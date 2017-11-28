<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainNotPhoto;

class NewsdayAddController extends Controller
{
    //

    public function execute(Request $request){
        if ($request->isMethod('post')) {

        $photo_not = new MainNotPhoto;
        $photo_not->filter = $request->get('filter');
        // $photo_not->author = $request->get('author');
        $photo_not->content = $request->get('content');
        $photo_not->content_main = $request->get('content_main');
        $photo_not->content_text = $request->get('content_text');
        $photo_not->time_create = $request->get('partydate');

        $photo_not->save();

        return redirect('admin')->with('status', 'Страница добавлена');
        }


    	if (view()->exists('admin.main_not_photo_add')) {
    		$data = [

    				'title' => 'Добавление Страницы'
    		        ];

    		        return view('admin.main_not_photo_add', $data);
    	}
    	abort(404);
    }
}
