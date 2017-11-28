<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',   function () {
//     return view('index_hub');
// });


// Route::get('/', ['as'=>'home','uses'=>'WelcomeController@index']);




Route::get('/home1', function () {
    return view('child');
});

// Route::get('/', 'CreatesController@home');
Route::get('/create', function(){
	return view('create');
});

Route::post('/insert', 'CreatesController@add');
Route::get('/update/{id}', 'CreatesController@update');
Route::post('/edit/{id}', 'CreatesController@edit');
Route::get('/read/{id}', 'CreatesController@read');
Route::get('/delete/{id}', 'CreatesController@delete');







Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ContentController@main')->name('home');


Route::get('/content_day/{id?}', 'ContentController@show');

Route::get('/content_photo/{id?}', 'ContentController@showPhoto');

Route::get('/content_side/{id?}', 'ContentController@showSide');























// ===================================ADMIN===========================================


//admin/service
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

	//admin
	Route::get('/', function(){

		if (view()->exists('admin.index')) {
			# code...
			$data = ['title'=>'Панель Администратора'];


			return view('admin.index', $data);
		}
		
	});

	//admin/news_day
	Route::group(['prefix'=>'news_day'], function(){


		//admin/news_day
		Route::get('/', ['uses'=>'Admin\NewsdayController@execute', 'as'=>'news_day']);


		//admin/news_day/add
		Route::match(['get', 'post'], '/add', ['uses'=>'Admin\NewsdayAddController@execute', 'as'=>'news_dayAdd']);


		//admin/news_day/edit
		Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses'=>'Admin\NewsdayEditController@execute', 'as'=>'news_dayEdit']);

	});



	//admin/news_case
	Route::group(['prefix'=>'news_case'], function(){


		//admin/news_case
		Route::get('/', ['uses'=>'Admin\Cases\NewscaseController@execute', 'as'=>'news_case']);


		//admin/news_case/add
		Route::match(['get', 'post'], '/add', ['uses'=>'Admin\Cases\NewscaseAddController@execute', 'as'=>'news_caseAdd']);


		//admin/news_case/edit
		Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses'=>'Admin\Cases\NewscaseEditController@execute', 'as'=>'news_caseEdit']);

	});



	//admin/sideright
	Route::group(['prefix'=>'sideright'], function(){


		//admin/sideright
		Route::get('/', ['uses'=>'Admin\Sideright\SiderightController@execute', 'as'=>'sideright']);

		//admin/sideright/add
		Route::match(['get', 'post'], '/add', ['uses'=>'Admin\Sideright\SiderightController@add', 'as'=>'siderightAdd']);

		//admin/suderight/edit/{id}
		Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses'=>'Admin\Sideright\SiderightController@edit', 'as'=>'siderightEdit']);
		
	});

});
