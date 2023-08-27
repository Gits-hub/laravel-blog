<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\profile;

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
    return view('welcome', [
        'Name' => 'Profiles',
        'profile' => profile::all()
    ]);
});

Route::get('/{id}', function ($id) {
    return view('profile', [
        'person' => profile::find($id)
    ]);
});

Route::get('/home', function () {
    return response('<h3>Welcome to laravel programming</h3>');
});

Route::get('/search', function (Request $request) {
        return($request->name .' '. $request->age);
});