<?php

namespace App\Http\Controllers\Admin\Cases;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewscaseEditController extends Controller
{
    public function execute($id, Request $request){

        if ($request->isMethod('delete')) {
            $case_delete = \App\Main::whereId($id)->firstOrFail();
            $case_delete->delete();
            return redirect('admin/news_case')->with('status', 'Страница Удалена');

        }



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
    		$news_case_edit = \App\Main::whereId($id)->firstOrFail();
    		$news_case_edit->filter = $request->get('filter');
            $news_case_edit->author = $request->get('author');
            $news_case_edit->time_create = $request->get('time_create');
            $news_case_edit->image = $fileNameToStore;
            $news_case_edit->content_main = $request->get('content_main');
            $news_case_edit->content = $request->get('content');
    		$news_case_edit->content_text = $request->get('content_text');

            $news_case_edit->save();


    		return redirect('admin/news_case')->with('status', 'Страница изменена');
    	}











    	$news_case_edit_view = \App\Main::find($id);

    	if (view()->exists('admin.case.news_case_edit')) {
    		$data = [
    			'title'=> 'Рудактирование страницы'.$news_case_edit_view['content_main'],
    			'data' =>$news_case_edit_view
    		];
    	return view('admin.case.news_case_edit', $data);
    	}
    }
}
