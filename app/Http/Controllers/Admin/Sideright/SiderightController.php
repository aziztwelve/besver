<?php

namespace App\Http\Controllers\Admin\Sideright;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sideright;

class SiderightController extends Controller
{
    public function execute()
    {
        if (view()->exists('admin.sideright.sideright')) {

            $siderights = \App\Sideright::all();
            $data = [
            'title' => 'Сайдбар',
            'siderights' => $siderights
        ];

        return view('admin.sideright.sideright', $data);
        }
        abort(404);
    } 



    


    public function add( Sideright $sideright, Request $request)
    {
     //    // $sideright = \App\Sideright::whereId($id)->firstOrFail();
     //    $data = [
     //        'title'=>'Добавление Сайдбара',
     //        'sideright'=>$sideright
     //    ];


    	// return view('admin.sideright.add', $data);



        if (view()->exists('admin.sideright.add')) {
            $data = [

                    'title' => 'Добавление Страницы'
                    ];

                    return view('admin.sideright.add', $data);
                }
    }





     public function edit($id)
    {
        $sideright = \App\Sideright::find($id);

        if (view()->exists('admin.sideright.edit')) {
            $data = [
                    'title'=>'Редактирование страницы-'.$sideright['content_main'],
                    'data'=>$sideright
                    ];

        return view('admin.sideright.edit', $data);
        }
    }
}
