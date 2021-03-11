<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome',
    [
        'title' => "This is more fun"
    ]
);
});

Auth::routes();
   Route::get('/{any}', function(){
            return view('vueapp');
    })->where('any', '.*');


   Route::get('/page', function () {
        return view('page',
            [
                'title' => "Page 2 - A little about the Author",
                'author' => json_encode([
                        "name" => "Will Thompson",
                        "role" => "Software Dev",
                        "code" => "Learning Laravel w/ Vue"
                ])
            ]
        );
    });

 