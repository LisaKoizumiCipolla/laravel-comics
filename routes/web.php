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

    $data = [
        'headerNavbar' => [
            [
                'text' => "CHARACTERS",
                'link' => "#",
                'selected' => false
            ],
            [
                'text' => "COMICS",
                'link' => "#",
                'selected' => true
            ],
            [
                'text' => "MOVIES",
                'link' => "#",
                'selected' => false
            ],
            [
                'text' => "TV",
                'link' => "#",
                'selected' => false
            ],
            [
                'text' => "GAMES",
                'link' => "#",
                'selected' => false
            ],
            [
                'text' => "COLLECTIBLES",
                'link' => "#",
                'selected' => false
            ],
            [
                'text' => "VIDEOS",
                'link' => "#",
                'selected' => false
            ],
            [
                'text' => "FANS",
                'link' => "#",
                'selected' => false
            ],
            [
                'text' => "NEWS",
                'link' => "#",
                'selected' => false
            ],
            [
                'text' => "SHOP",
                'link' => "#",
                'selected' => false
            ],
        ]
    ];
    return view('home', $data);
})->name('homepage');
