<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as' => 'wallet.', 'prefix' => 'wallet'], function () {
    Route::name('add-coins')->post('add-coins', 'WalletController@addCoinsToStart');
    Route::name('get-user-coins')->post('get-user-coins', 'WalletController@getUserCoins');
});

Route::group(['as' => 'shop.', 'prefix' => 'shop'], function () {
    Route::name('get-boxes')->get('get-boxes', 'ShopController@getBoxes');
    Route::name('get-runes')->get('get-runes', 'ShopController@getRunes');
    Route::name('get-prizes')->get('get-prizes', 'ShopController@getPrizes');

    Route::name('buy-box')->post('buy-box', 'ShopController@buyBox');
    Route::name('buy-prize')->post('buy-prize', 'ShopController@buyPrize');
    Route::name('buy-rune')->post('buy-rune', 'ShopController@buyRune');
});

Route::group(['as' => 'inventory.', 'prefix' => 'inventory'], function () {
    Route::name('get-inventory')->post('get-inventory', 'InventoryController@getInventory');
});
