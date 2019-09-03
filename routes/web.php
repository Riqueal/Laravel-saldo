<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

    Route::post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
    
    Route::get('withdraw', 'BalanceController@withdraw')->name('balance.withdraw');

    Route::post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');

    Route::get('transfer', 'BalanceController@transfer')->name('balance.transfer');

    Route::post('deposit', 'BalanceController@depositStore')->name('deposit.store');

    Route::get('deposit', 'BalanceController@deposit')->name('balance.deposit');

    Route::get('balance', 'BalanceController@index')->name('admin.balance');

    Route::get('/', 'AdminController@index')->name('admin.home');

});


Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();