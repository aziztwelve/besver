<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MainNotPhoto;
use Validator;

class NewsdayEditController extends Controller
{
    //


    public function execute($id, MainNotPhoto $photo_delete, Request $request){
    	// $not_photo = MainNotPhoto::find($id);
    	if ($request->isMethod('delete')) {
    		// $photo_delete = new MainNotPhoto;
    		$photo_delete = MainNotPhoto::whereId($id)->firstOrFail();
    		$photo_delete->delete();
    		return redirect('admin/news_day')->with('status', 'Страница удалена');
    	}



    	if ($request->isMethod('post')) {
    		
    	$photo_not = MainNotPhoto::whereId($id)->firstOrFail();
    	$photo_not->filter = $request->get('filter');
    	$photo_not->author = $request->get('author');
    	$photo_not->content = $request->get('content');
    	$photo_not->content_main = $request->get('content_main');
    	$photo_not->content_text = $request->get('content_text');
    	 $photo_not->time_create = $request->get('partydate');


    	$photo_not->save();

    	return redirect('admin/news_day')->with('status', 'Страница Изменена');
    	}	











    	// if ($request->isMethod('post')) {
    	// 	$input = $request->except('_token');
    	// 	// dd($input);
    		
    	// 	$validator = Validator::make($input, [
    	// 		'author'=>'required|max:255',
    	// 		'filter'=>'required',
    	// 		'content_main'=>'required',
    	// 		'content'=>'required',
    	// 		'content_text'=>'required',
    	// 	]);

    	// 	if ($validator->fails()) {
    	// 		return redirect()->route('news_dayEdit', ['id'=>$input['id']])->withErrors($validator);
    	// 	}

    	// 	$not_photo->fill($input);
    	// 	if ($not_photo->update()) {
    	// 		return redirect('admin')->with('status', 'Страница обновлена');
    	// 	}
    	// }




    	// $not_photo = MainNotPhoto::find($id);
    	// $old = $not_photo->toArray();
    	// dd($not_photo);



    	$not_photo = MainNotPhoto::find($id);

    	if (view()->exists('admin.main_not_photo_edit')) {
    		$data = [


    				'title'=>'Редактирование страницы-'.$not_photo['content_main'],
    				'data'=>$not_photo
    		        ];

    	return view('admin.main_not_photo_edit', $data);
    	}
    }
}
