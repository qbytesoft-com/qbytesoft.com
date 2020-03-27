<?php
Route::group(function (){
    Route::namespace('Website')->group(function (){
       Route::get('/','PageController@index')->name('qbytesoft.home');
       Route::get('/web-development','PageController@webDevelopment')->name('qbytesoft.web-development');
       Route::get('/open-source','PageController@openSource')->name('qbytesoft.open-source');
       Route::get('/laravel','PageController@laravel')->name('qbytesoft.laravel');
       Route::get('/about','PageController@about')->name('qbytesoft.about');
    });
});

