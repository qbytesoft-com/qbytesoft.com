<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Website')->group(function (){
    Route::get('/','PageController@index')->name('qbytesoft.home');
    Route::get('/web-development','PageController@webDevelopment')->name('qbytesoft.web-development');
    Route::get('/open-source','PageController@openSource')->name('qbytesoft.open-source');
    Route::get('/laravel','PageController@laravel')->name('qbytesoft.laravel');
    Route::get('/shopify','PageController@shopify')->name('qbytesoft.shopify');
    Route::get('/shopify-apps','PageController@shopifyApps')->name('qbytesoft.products');
    Route::get('/about-qbytesoft','PageController@about')->name('qbytesoft.about');
    Route::get('/contact-us','PageController@contact')->name('qbytesoft.contact');
    Route::get('/privacy-policy','PageController@privacyPolicy')->name('qbytesoft.privacy-policy');
});



