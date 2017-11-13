<?php
Route::get('/', 'PagesController@index' );
Route::get('/bai-viet', [
	'as'   => 'articles.index',
	'uses' => 'ArticlesController@index'
]);
Route::get('/bai-viet/tao-moi', [
	'as'   => 'articles.create',
	'uses' => 'ArticlesController@create'
]);
Route::post('/tao-moi', [
	'as'   => 'articles.store',
	'uses' => 'ArticlesController@store'
]);
Route::get('/bai-vet/{id}/cap-nhap', [
	'as'   => 'articles.edit',
	'uses' => 'ArticlesController@edit'
]);
Route::post('/bai-vet/{id}', [
	'as'   => 'articles.update',
	'uses' => 'ArticlesController@update'
]);
Route::get('/bai-viet/{id}', [
	'as'   => 'articles.show',
	'uses' => 'ArticlesController@show'
]);
