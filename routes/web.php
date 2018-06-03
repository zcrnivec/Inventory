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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/user', 'UserController@index');

Route::get('admin/router', 'RouterController@index');
Route::post('admin/router', 'RouterController@store')->name('router.store');
// Route::post('admin/router', 'RouterController@update')->name('router.update');

Route::get('admin/sswitch', 'SwitchController@index');

Route::get('admin/firewall', 'FirewallController@index');

Route::get('admin/accesspoint', 'AccessPointController@index');


Route::post('admin/sswitch', 'SwitchController@store')->name('sswitch.store');

// Route::resource('admin/router', 'RouterController');
// Route::get('admin/router',                 ['as' => 'router.index',      'uses' => 'RouterController@index'    ]);
// Route::get('admin/router/create',          ['as' => 'router.create',     'uses' => 'RouterController@create'   ]);
// Route::post('admin/router',                ['as' => 'router.store',      'uses' => 'RouterController@store'    ]);
// Route::get('admin/router/{router}',      ['as' => 'router.show',       'uses' => 'RouterController@show'     ]);
// Route::get('admin/router/{router}/edit', ['as' => 'router.edit',       'uses' => 'RouterController@edit'     ]);
Route::patch('admin/router',      ['as' => 'router.update',     'uses' => 'RouterController@update'   ]);
Route::delete('admin/router',   ['as' => 'router.destroy',    'uses' => 'RouterController@destroy'  ]);

Route::post('admin/sswitch', 'SwitchController@store')->name('sswitch.store');
Route::patch('admin/sswitch',      ['as' => 'sswitch.update',     'uses' => 'SwitchController@update'   ]);
Route::delete('admin/sswitch',   ['as' => 'sswitch.destroy',    'uses' => 'SwitchController@destroy'  ]);

Route::post('admin/firewall', 'FirewallController@store')->name('firewall.store');
Route::patch('admin/firewall',      ['as' => 'firewall.update',     'uses' => 'FirewallController@update'   ]);
Route::delete('admin/firewall',   ['as' => 'firewall.destroy',    'uses' => 'FirewallController@destroy'  ]);

Route::post('admin/accesspoint', 'AccessPointController@store')->name('accesspoint.store');
Route::patch('admin/accesspoint',      ['as' => 'accesspoint.update',     'uses' => 'AccessPointController@update'   ]);
Route::delete('admin/accesspoint',   ['as' => 'accesspoint.destroy',    'uses' => 'AccessPointController@destroy'  ]);

Route::get('admin/assistance', 'AssistanceController@index');
Route::post('admin/assistance', 'AssistanceController@store')->name('assistance.store');
Route::patch('admin/assistance',      ['as' => 'assistance.update',     'uses' => 'AssistanceController@update'   ]);
Route::delete('admin/assistance',   ['as' => 'assistance.destroy',    'uses' => 'AssistanceController@destroy'  ]);

Route::get('admin/cost', 'CostController@index');

Route::get('admin/server', 'ServerController@index');
Route::post('admin/server', 'ServerController@store')->name('server.store');
Route::patch('admin/server',      ['as' => 'server.update',     'uses' => 'ServerController@update'   ]);
Route::delete('admin/server',   ['as' => 'server.destroy',    'uses' => 'ServerController@destroy'  ]);
