<?php
Route::get('/', 'PagesController@index' );
Route::get('/bai-viet', [
	'as'   => 'article.index',
	'uses' => 'ArticlesController@index'
]);
Route::get('/bai-viet/tao-moi', [
	'as'   => 'article.create',
	'uses' => 'ArticlesController@create'
]);
Route::post('/tao-moi', [
	'as'   => 'article.store',
	'uses' => 'ArticlesController@store'
]);
Route::get('/tim-kiem', [
	'as'   => 'article.search',
	'uses' => 'ArticlesController@search'
]);
Route::get('/bai-vet/{id}/cap-nhap', [
	'as'   => 'article.edit',
	'uses' => 'ArticlesController@edit'
]);
Route::post('/bai-vet/{id}', [
	'as'   => 'article.update',
	'uses' => 'ArticlesController@update'
]);
Route::get('/bai-viet/{id}', [
	'as'   => 'article.show',
	'uses' => 'ArticlesController@show'
]);
Route::post('/bai-viet/{id}', [
	'as'   => 'article.destroy',
	'uses' => 'ArticlesController@destroy'
]);

