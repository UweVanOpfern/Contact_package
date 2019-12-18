<?php


Route::group(['namespace' => 'Uweaimevan\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact.get');
    Route::post('contact', 'ContactController@sendEmail')->name('contact.post');

});