<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewCom;

class PagesController extends Controller
{
    //


   pubic function home() {

   	$viewcom = ViewCom::find(1);

   	return view ('pages.home' ['viewcom' => $viewcom]);

   }


   pubic function about() {

   	$viewcom = ViewCom::find(1);

   	return view ('pages.about' ['viewcom' => $viewcom]);

   }


   pubic function contact() {

   	$viewcom = ViewCom::find(1);

   	return view ('pages.contact' ['viewcom' => $viewcom]);

   }
}
