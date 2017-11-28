<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Sideright;
use App\MainNotPhoto;



class ContentController extends Controller
{
    //



	public function main(Request $request) {

    $mains = Main::paginate(5);
    $siderights = Sideright::all();
    $mains_not_photo = MainNotPhoto::all();


    return view('index_hub', ['mains' => $mains, 'siderights' => $siderights, 'mains_not_photo'=>$mains_not_photo]);
}



	public function show($id){
		$content_day = MainNotPhoto::whereId($id)->firstOrFail();
		return	view('show.content_day',	compact('content_day'));

	}



	public function showPhoto($id){
		$content_photo = Main::whereId($id)->firstOrFail();
		return view('show.content_photo', compact('content_photo'));
	}





	// public function main(Request $request) {


	// 	$mains = Main::all();


	// 	return view('index_hub', ['mains'=>$mains]);

		// $sidebars = Sidebar::All();

		// return view('index_hub', ['sidebars'=>$sidebars]);





	// }


	public function showSide ($id){

		$sideright = Sideright::whereId($id)->firstOrFail();
		return view('show.content_side', compact('sideright'));
	}

}
