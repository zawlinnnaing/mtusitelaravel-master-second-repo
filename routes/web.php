
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

Route::get('/', 'PageController@index');

Route::get('/depertments', 'PageController@depertments');

Route::get('/about', 'PageController@about');

Route::get('/research', 'PageController@research');

Route::get('/depertments/civil', 'PageController@civil');

Route::get('/depertments/mech', 'PageController@mechnical');

Route::get('/academic','PageController@academic');
Route::get('/depertments/mecha', 'PageController@mechatronic');

Route::get('/depertments/ec','PageController@ec');

Route::get('/depertments/ep','PageController@ep');
Route::get('/depertments/ceit','PageController@ceit');
Route::get('/depertments/archi','PageController@archi');
Route::get('/depertments/eng','PageController@eng');
Route::get('/depertments/math','PageController@math');
Route::get('/depertments/chem','PageController@chem');
Route::get('/depertments/phy','PageController@phy');
