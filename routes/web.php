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

/*
 * Dog food route
 */
Route::resource('categories', 'CategoryController');

/*
 * Authentication routes.
 */
Auth::routes();

/*
 * contact us route
 */
Route::resource('contact-us', 'ContactController', [
    'only' => [
        'create',
        'store',
    ],
]);

/*
 * Grooming service route
 */
Route::get('services/grooming', 'BookingController@getGroomingForm')->name('getGroomingForm');

Route::post('services/grooming-save', 'BookingController@saveGroomingForm')->name('saveGroomingForm');

/*
 * Veterinary service route
 */
Route::get('services/veterinary', 'BookingController@getVeterinaryForm')->name('getVeterinaryForm');

Route::post('services/veterinary-save', 'BookingController@saveVeterinaryForm')->name('saveVeterinaryForm');

