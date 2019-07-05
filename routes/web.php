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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home/', 'HomeController@index')->name('home');
Route::get('master','PageController@master')->name('master');
Route::get('/','PageController@index')->middleware('locale')->name('index');
Route::get('product','ProductController@product')->middleware('locale')->name('product');
Route::get('news','NewController@news')->middleware('locale')->name('news');
Route::get('news/{id}','NewController@detail')->middleware('locale')->name('detail_news');
Route::get('product/{id}','ProductController@detail')->middleware('locale')->name('detailproduct');
Route::get('lienhe','PageController@lienhe')->middleware('locale')->name('lienhe');
Route::get('thuonghieu','PageController@thuonghieu')->middleware('locale')->name('thuonghieu');
Route::get('timkiem','PageController@timkiem')->middleware('locale')->name('timkiem');
Route::get('change-language/{language}','PageController@changelanguage')->name('change-language');
// Route::get('trademark','PageController@trademark')->name('trademark');
// admin
Route::group(['prefix'=>'admin','middleware'=>'check'],function(){
	Route::get('/','AdminContronller@admin')->name('admin');
	Route::group(['prefix'=>'product'],function(){
		Route::get('/','AdminContronller@product')->name('adminproduct');	
		Route::get('/add','AdminContronller@getaddproduct');
		Route::post('/add','AdminContronller@postaddproduct')->name('addproduct');
		Route::get('/edit/{id}','AdminContronller@geteditproduct');
		Route::post('/edit/{id}','AdminContronller@posteditproduct')->name('editproduct');
		Route::get('/delete/{id}','AdminContronller@deleteproduct')->name('deleteproduct');
		Route::post('search','AdminContronller@searchproduct')->name('searchproduct');
	});
// slide
	Route::group(['prefix'=>'slide'],function(){
		Route::get('/','AdminContronller@slide')->name('adminslide');
		Route::get('/add','AdminContronller@getaddslide');
		Route::post('/add','AdminContronller@postaddslide')->name('addslide');
		Route::get('/edit/{id}','AdminContronller@geteditslide');
		Route::post('/edit/{id}','AdminContronller@posteditslide')->name('editslide');
		Route::get('/delete/{id}','AdminContronller@deleteslide')->name('deleteslide');
	});
//news
	Route::group(['prefix'=>'news'],function(){
		Route::get('/','AdminContronller@news')->name('adminnews');
		Route::get('/add','AdminContronller@getaddnews')->name('adminnews');
		Route::post('/add','AdminContronller@postaddnews')->name('addnews');
		Route::get('/edit/{id}','AdminContronller@geteditnews');
		Route::post('/edit/{id}','AdminContronller@posteditnews')->name('editnews');
		Route::get('/delete/{id}','AdminContronller@deletenews')->name('deletenews');
		Route::post('search','AdminContronller@searchnews')->name('searchnews');
	});
	Route::group(['prefix'=>'contact'],function(){
		Route::get('allcontact','AdminContronller@allcontact')->name('admincontact');
		Route::get('edit/{id}','AdminContronller@geteditcontact');
		Route::post('edit/{id}','AdminContronller@posteditcontact')->name('editcontact');
		Route::post('contact-info','AdminContronller@contact')->name('contact-info');
		Route::get('all','AdminContronller@contactall')->name('contact-all');
	});
	Route::group(['prefix'=>'thuonghieu'],function(){
		Route::get('/','AdminContronller@allthuonghieu')->name('adminthuonghieu');
		Route::get('edit/{id}','AdminContronller@geteditthuonghieu');
		Route::post('edit/{id}','AdminContronller@posteditthuonghieu')->name('edithuonghieu');
	});	
});
// Route::get('edit','AdminContronller@editcontact')->name('admincontact');
// Route::post('contact-info','AdminContronller@contact')->name('contact-info');
// Route::get('all','AdminContronller@contactall')->name('contact-all');
// Route::get('admin1','AdminContronlle@r@test');
// Route::get('allnew','AdminContronller@allntaew');
// Route::get('addnews','AdminContronller@addnews');