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

Route::get('/', [
    'uses' => 'HomeController@getWelcomePage',
    'as'   => 'page.welcome'
]);

/*
 * Privacy  policies page
 */
Route::get('privacy-policies', 'PoliciesController@index')->name('policies');

