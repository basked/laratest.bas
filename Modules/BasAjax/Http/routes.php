<?php


// middleware to api
Route::group(['middleware' => 'api', 'prefix' => 'basajax', 'namespace' => 'Modules\BasAjax\Http\Controllers'], function()
{
    Route::get('api/contact', 'ContactController@apiContact')->name('api.contact');
    Route::resource('contact','ContactController');
});
