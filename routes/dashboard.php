<?php
/**
 * @author Author Name: Md Morshadun Nur
 * @email  Email: morshadunnur@gmail.com
 */

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Dashboard'], function (){
   Route::get('/app','DashboardController@index')->name('dashboard.home');
});
