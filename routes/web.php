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


Route::get('user_face', [
		'as' 	=> 'getIndex',
		'uses' 	=> 'pageController@getIndex'
	]);

Route::get('admin_face', function () {
    return view('admin.face.source.indexAD');
});


Route::get('getType/{type}', [
		'as' 	=> 'getType',
		'uses' 	=> 'pageController@get_type_news'
	]);

Route::get('chitiet/{id}',[
	'as'=>'chitiet',
	'uses'=>'pageController@get_detail'
]);

Route::post('timkiem',[
	'as'=>'timkiem',
	'uses'=>'pageController@timkiem'
]);
//Thao Tác Với Category

// dang nhap admin

Route::get('admindangnhap', [
'as' => 'dangnhap',
'uses' =>'LoginController@getAdminLogin',
]);
Route::post('admindangnhap', [
'as' => 'dangnhap',
'uses' =>'LoginController@postAdminLogin',
]);

// chạy trang chủ
Route::get('trangchu', [
'as' => 'index',
'uses' =>'LoginController@getIndex',
])->middleware('checklogin');

// dang xuat
Route::get('logout', [
'as' => 'logout',
'uses' =>'LoginController@logout',
]);

Route::group(['prefix' => 'admin/category/'], function () {
Route::get('addCate', [
		'as' 	=> 'cate.getAdd',
		'uses' 	=> 'categoryController@getCategories'
	]);

Route::post('addCate', [
		'as' 	=> 'cate.postAdd',
		'uses' 	=> 'categoryController@postCate'
]);

Route::get('ShowCate', [
		'as' 	=> 'ShowCate',
		'uses' 	=> 'categoryController@getCate'
]);

Route::get('deleteCate/{id}', [
		'as' 	=> 'getDeleteCate',
		'uses' 	=> 'categoryController@getDelete'
	]);
Route::get('edit/{id}', [
		'as' 	=> 'editCate',
		'uses' 	=> 'categoryController@getEdit'
	]);

Route::post('edit/{id}', [
		'as' 	=> 'editCate',
		'uses' 	=> 'categoryController@postEdit'
]);

});

///
///Thao Tác với User
Route::group(['prefix' => 'admin/user/'], function () {
Route::get('showUser', [
		'as' 	=> 'showUser',
		'uses' 	=> 'userController@showUser'
	]);
Route::get('deleteUser/{id}', [
		'as' 	=> 'getDelete',
		'uses' 	=> 'userController@getDelete'
	]);

});



Route::group(['prefix' => 'admin/news/'], function () {

	Route::get('addNew', [
		'as' 	=> 'getAddNew',
		'uses' 	=> 'NewController@getAddNew'
	]);

	Route::post('addNew', [
		'as' 	=> 'postAddNew',
		'uses' 	=> 'NewController@postAddnew'
	]);
	Route::get('showNew', [
		'as' 	=> 'getshowNew',
		'uses' 	=> 'NewController@showNews'
	]);

	Route::get('deleteNews/{id}', [
		'as' 	=> 'getDeleteNews',
		'uses' 	=> 'NewController@getDelete'
	]);
	Route::get('editNew/{id}', [
		'as' 	=> 'getedit',
		'uses' 	=> 'NewController@getEdit'
	]);

	Route::post('editNew/{id}', [
		'as' 	=> 'postedit',
		'uses' 	=> 'NewController@postEdit'
	]);
	Route::get('showComment', [
		'as' 	=> 'getshowComment',
		'uses' 	=> 'CommentController@showComment'
	]);

	Route::get('deleteComment/{id}', [
		'as' 	=> 'getDeleteComment',
		'uses' 	=> 'CommentController@getDeleteComment'
	]);
	Route::get('showLike', [
		'as' 	=> 'getshowLike',
		'uses' 	=> 'LikeController@showLike'
	]);
	

	Route::get('postView/{id}', [
		'as' 	=> 'postView',
		'uses' 	=> 'NewController@postView'
]);
});
Route::get('/autocomplete', 'NewController@index');
Route::post('/autocomplete/fetch', 'NewController@fetch')->name('autocomplete.fetch');


Route::get('/students', 'NewController@index');

Route::get('/students/{id}', 'NewController@show');

Route::get('/search/name', 'NewController@searchByName');

Route::get('/search/email', 'NewController@searchByEmail');


//Routte get dât from other ưebsite
Route::get('getXahoi', [
		'as' 	=> 'getxahoi',
		'uses' 	=> 'GetDataControler@getXahoi'
	]);
Route::get('getGiaitri', [
		'as' 	=> 'getgiaitri',
		'uses' 	=> 'GetDataControler@getGiaitri'
	]);
Route::get('getPhapluat', [
		'as' 	=> 'getphapluat',
		'uses' 	=> 'GetDataControler@getPhapluat'
	]);
Route::get('getThethao', [
		'as' 	=> 'getthethao',
		'uses' 	=> 'GetDataControler@getThethao'
	]);
Route::get('getCongnghe', [
		'as' 	=> 'getcongnghe',
		'uses' 	=> 'GetDataControler@getCongnghe'
	]);
Route::get('getTamsu', [
		'as' 	=> 'gettamsu',
		'uses' 	=> 'GetDataControler@getTamsu'
	]);
Route::get('getSuckhoe', [
		'as' 	=> 'getsuckhoe',
		'uses' 	=> 'GetDataControler@getSuckhoe'
	]);